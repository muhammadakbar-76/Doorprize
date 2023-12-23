<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrimaryController extends Controller
{
    public function index(Request $request)
    {
        if (!$request->session()->has('dept_queue')) {
            init_dept_queue();
        }

        // var_dump($request->session()->all());
        dd(get_dept_queue());
    }

    public function undi(Request $request)
    {
        // var_dump($request->session()->get('dept_queue'));
        shift_push_dept_queue();
        dd(get_dept_queue());
    }
}
