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



Auth::routes();
Route::get('admin',				['as'=>'admin.login',		'uses'=>'AdminAuth\LoginController@showLoginForm']);
Route::post('admin',			['as'=>'admin.dologin',		'uses'=>'AdminAuth\LoginController@doLogin']);
Route::get('admin-register',	['as'=>'admin.register',	'uses'=>'AdminAuth\RegisterController@ShowRegisterForm']);
Route::post('admin-register',	['as'=>'admin.doregister',	'uses'=>'AdminAuth\RegisterController@create']);

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware'=>'admin'],function(){
	Route::get('/dashboard',		['as'=>'admin.dashboard',	'uses'=>'DashboardController@index']);
	Route::get('/teachers',			['as'=>'teachers.list',		'uses'=>'TeachersController@list_teachers']);
	Route::get('/teacher/add',		['as'=>'teacher.add',		'uses'=>'TeachersController@add_teacher']);	
	Route::get('/teacher/edit/{id}',['as'=>'teacher.edit',		'uses'=>'TeachersController@edit_teacher']);	
	Route::post('/teacher/save',		['as'=>'teacher.save',		'uses'=>'TeachersController@save_teacher']);	

	Route::resource('users', 'UsersController');
});
Route::group(['middleware'=>'auth'],function(){
	Route::get('student', function(){
		echo "This is my admin<a href='/logout'>Logout</a>";
	});	
});
