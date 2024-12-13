<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\Employee;
use App\Models\Prize;
use App\Models\Prize_dept_counter;
use App\Models\Winner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
            // cek jumlah hadiah yang sudah di roll
            $prize = Prize::where('prize_id', $prize_id)->first();
            $sum_prize = Prize_dept_counter::where('id_prize', $prize_id)->sum('counter');
            $prize_dept_counter = Prize_dept_counter::select('id_department', 'counter', 'max_count')
                ->where('id_prize', $prize_id)
                ->whereRaw('counter < max_count')
                ->get();

            if ($sum_prize < $prize->prize_value) {
                //get department yang counternya kurang dari max_count prize secara acak berdasar jumlah yang diundi
                $dept_acak = array();
                for ($i = 0; $i < $doorprize_count; $i++) {
                    $da = null;
                    if (($prize->prize_value - $sum_prize) >= $doorprize_count) {
                        while (empty($da)) {
                            # code...
                            $da = $prize_dept_counter->map(function ($item) {
                                if (!empty($item) && $item->counter < $item->max_count) return $item;
                            })->random();
                        }
                    } else {
                        $da = $prize_dept_counter->map(function ($item) {
                            if (!empty($item) && $item->counter < $item->max_count) return $item;
                        })->random();
                    }

                    if (empty($da)) continue;

                    $dept_acak[] = $da;

                    $prize_dept_counter->transform(function ($pdc) use ($da) {
                        if (
                            !empty($pdc) &&
                            $pdc->id_department ===
                            $da->id_department
                        ) $pdc->counter = $pdc->counter + 1;

                        return $pdc;
                    });
                }

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
                }

                $sisa_hadiah = (int)$prize->prize_value - Prize_dept_counter::where('id_prize', $prize_id)->sum('counter') - count($list_pemenang);

                return view('undi', compact('list_pemenang', 'prize', 'prize_id', 'doorprize_count', 'sisa_hadiah'));
            } else {
                return view('habis');
            }
        } catch (\Throwable $th) {
            return view('reroll', compact('prize_id', 'doorprize_count'));
        }
    }

    public function save_undi(Request $request)
    {
        $prize_id = $request->input('prize_id');
        $doorprize_count = $request->input('doorprize_count');
        $prize = Prize::where('prize_id', $prize_id)->first();

        foreach ($request->input('employee_id') as $val) {
            $employee = Employee::where('employee_id', $val)->first();

            //tambahkan pemenang di table winner
            Winner::create([
                'employee_name' => $employee->employee_name,
                'employee_nik' => $employee->employee_nik,
                'department_name' => $employee->real_dept,
                'lama_kerja' => $employee->lama_kerja,
                'prize_name' => $prize->prize_name,
            ]);

            //tambahkan dept 15&16, jika employee dept 2/12/15/16 kepilih, hapusnya berdasar nik
            //? kenapa gak pakai nik aja semua? karena kontraktor/mitra ada yang nik nya sama semua
            //hapus pemenang dari table employee
            if ($employee->id_department == 15 || $employee->id_department == 16 || $employee->id_department == 2 || $employee->id_department == 12) {
                Employee::where('employee_nik', $employee->employee_nik)->delete();
            } else {
                Employee::find($employee->employee_id)->delete();
            }

            //counter dept tambah 1
            Prize_dept_counter::where('id_department', $employee->id_department)
                ->where('id_prize', $prize_id)
                ->increment('counter');
        }

        return redirect("/?prize_id=$prize_id&doorprize_count=$doorprize_count");
    }
}
