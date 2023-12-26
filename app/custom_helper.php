<?php

use App\Models\Department;
use App\Models\Prize_dept_counter;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;

if (!function_exists('create_id')) {
    function create_id()
    {
        $unix = now() . Str::random(16);
        return md5($unix);
    }
}

if (!function_exists('init_dept_queue')) {
    function init_dept_queue($prize_id)
    {
        // if (Prize_dept_counter::where('id_prize', $prize_id)->get()->isEmpty()) {
        //     $dept = Department::all()->map(fn ($item) => $item->department_name);
        // } else {
        //     $dept = Queue_Department::all()->map(fn ($item) => $item->department_name);
        // }
        // Session::put('dept_queue', $dept);
        // Session::save();
        $queue = Prize_dept_counter::select('prize_dept_counter_id')->where('id_prize', $prize_id)->get();
        foreach ($queue as $val) {
            echo '<pre>', var_dump($val->prize_dept_counter_id), '</pre>';
        }
        exit;
    }
}

if (!function_exists('get_dept_queue')) {
    function get_dept_queue()
    {
        if (Session::exists('dept_queue'))
            return Session::get('dept_queue');
        else
            return null;
    }
}

if (!function_exists('shift_push_dept_queue')) {
    function shift_push_dept_queue($count = 2)
    {
        if (Session::has('dept_queue')) {
            $dept_queue = Session::get('dept_queue');
            $depts = $dept_queue->shift($count); //this one between 1 or 2, depend on request input
            foreach ($depts as $dept) {
                $dept_queue->push($dept);
            }
            Session::put('dept_queue', $dept_queue);
            Session::save();

            Queue_Department::truncate();
            $arr_of_queue_dept = $dept_queue->map(function ($name) {
                return [
                    'department_name' => $name
                ];
            })->toArray();
            DB::table('queue__departments')->insert($arr_of_queue_dept);
        }
    }
}
