<?php

use App\Models\Department;
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
    function init_dept_queue()
    {
        $dept = Department::all()->map(fn ($item) => $item->department_name);
        Session::put('dept_queue', $dept);
        Session::save();
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
    function shift_push_dept_queue()
    {
        if (Session::has('dept_queue')) {
            $dept_queue = Session::get('dept_queue');
            $depts = $dept_queue->shift(2); //this one between 1 or 2, depend on request input
            foreach ($depts as $dept) {
                $dept_queue->push($dept);
            }
            Session::put('dept_queue', $dept_queue);
            Session::save();
        }
    }
}
