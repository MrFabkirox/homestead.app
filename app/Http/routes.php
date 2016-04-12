<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('showTask', [
    'as' => 'showTask',
    'uses' => 'ControllerP1@showTask'
]);

Route::get('showSelected', [
    'as' => 'showSelected',
    'uses' => 'ControllerP1@showSelected'
]);

Route::get('addTask', [
    'as' => 'addTask',
    'uses' => 'ControllerP1@addTask'
]);

Route::post('save', 'ControllerP1@save');

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});
