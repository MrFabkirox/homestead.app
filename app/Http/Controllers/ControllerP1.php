<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;	
use App\Http\Requests;
use App\Http\Model\task;

class ControllerP1 extends Controller {

	public $restful = true;

    public function showTask() {

        $tasks = DB::select('select * from tasks');

        return view('p1', ['tasks' => $tasks]);

        //return \View::make('p1')
        //    ->with('name','name')
        //    ->with('tasks', task::all());

    }

    public function showSelected() {
        
        return \View::make('p1')
            ->with('tasks', task::where('id', 0));
    }
}
