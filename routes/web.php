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


Route::get('/dashboard',	['as'=>'admin.dashboard',	'uses'=>'DashboardController@index']);
Route::get('/teachers',		['as'=>'teachers.list',		'uses'=>'TeachersController@list_teachers']);
Route::get('/teacher/add',	['as'=>'teacher.add',		'uses'=>'TeachersController@add_teacher']);