<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\Employee;
use App\Models\Prize;
use App\Models\Prize_dept_counter;
use App\Models\Winner;
use Illuminate\Http\Request;

class PrimaryController extends Controller
{
    public function index(Request $request)
    {
        $prizes = Prize::orderBy('prize_id')->get();
        return view('index', ['prizes' => $prizes, 'title' => 'Undian Doorprize']);
    }

    public function undi(Request $request)
    {
        $prize_id = $request->input('prize_id');
        $doorprize_count = $request->input('doorprize_count');
        try {
            //code...

            //! you should make table view of prize and department relationship for counting how much prize per dept can get

            // cek jumlah hadiah yang sudah di roll
            $prize = Prize::where('prize_id', $prize_id)->first();
            $sum_prize = Prize_dept_counter::where('id_prize', $prize_id)->sum('counter');

            if ($sum_prize < $prize->prize_value) {
                //get department yang counternya kurang dari max_count prize secara acak berdasar jumlah yang diundi
                $dept_acak = Prize_dept_counter::select('id_department')
                    ->where('id_prize', $prize_id)
                    ->where('counter', '<', $prize->max_count)
                    ->inRandomOrder()
                    ->limit($doorprize_count)
                    ->get();

                $list_pemenang = array();

                foreach ($dept_acak as $dept) {
                    //get pemenang
                    if ($prize->rules_operator == '=') {
                        $pemenang = Employee::with('departments')
                            ->where('id_department', $dept->id_department)
                            ->where($prize->rules_field, '>=', (int)$prize->rules_value)
                            ->where($prize->rules_field, '<=', (int)$prize->rules_value + 0.99)
                            ->inRandomOrder()
                            ->limit(1)
                            ->first();
                    } else {
                        $pemenang = Employee::with('departments')
                            ->where('id_department', $dept->id_department)
                            ->where($prize->rules_field, $prize->rules_operator, $prize->rules_value)
                            ->inRandomOrder()
                            ->limit(1)
                            ->first();
                    }

                    $list_pemenang[] = $pemenang;

                    //tambahkan pemenang di table winner
                    Winner::create([
                        'employee_name' => $pemenang->employee_name,
                        'employee_nik' => $pemenang->employee_nik,
                        'department_name' => $pemenang->departments->department_name,
                        'lama_kerja' => $pemenang->lama_kerja,
                        'prize_name' => $prize->prize_name,
                    ]);

                    //hapus pemenang dari table employee
                    Employee::find($pemenang->employee_id)->delete();

                    //counter dept tambah 1
                    Prize_dept_counter::where('id_department', $dept->id_department)
                        ->where('id_prize', $prize_id)
                        ->increment('counter');
                }

                $sisa_hadiah = (int)$prize->prize_value - Prize_dept_counter::where('id_prize', $prize_id)->sum('counter');

                return view('undi', compact('list_pemenang', 'prize', 'prize_id', 'doorprize_count', 'sisa_hadiah'));
            } else {
                return view('habis');
            }
        } catch (\Throwable $th) {
            return view('reroll', compact('prize_id', 'doorprize_count'));
        }
    }
}
