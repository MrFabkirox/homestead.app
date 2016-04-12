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

        $result = DB::table('tasks')->get();
        
        return \View::make('p1')
            ->with('tasks', $result);
    }

    public function addTask() {
    
        $tasks = DB::select('select * from tasks');

        return \View::make('p2', ['tasks' => $tasks]);
            
    }
    
    public function save(Request $request) {
    
           $post = $request->all();
           var_dump($post);
    }

}
