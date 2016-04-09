<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;	
use App\Http\Requests;

class ControllerP1 extends Controller
{
    public function showTask() {

        $tasks = DB::select('select * from tasks');

        return view('p1', ['tasks' => $tasks]);

        //return view('p1', ['tasks' => tasks::findOrFail(1)]);
    }

    public function showSelected() {

        $tasks = DB::select('select * from tasks');

        return view('p1', ['tasks' => $tasks]);

        //return view('p1', ['tasks' => tasks::findOrFail(1)]);

    }
}
