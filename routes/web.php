<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/all-user', function () {
    return view('list_user');
});
Route::get('/create-user', function () {
    return view('create_user');
});

Route::get('/all-user', 'EmployeeController@index'); // list of all employee
