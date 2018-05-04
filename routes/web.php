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
	Route::get('/dashboard',			['as'=>'admin.dashboard',	'uses'=>'DashboardController@index']);
	Route::get('/teachers',				['as'=>'teachers.list',		'uses'=>'TeachersController@list_teachers']);
	Route::get('/teacher/add',			['as'=>'teacher.add',		'uses'=>'TeachersController@add_teacher']);	
	Route::get('/teacher/edit/{id}',	['as'=>'teacher.edit',		'uses'=>'TeachersController@edit_teacher']);
	Route::post('/teacher/save',		['as'=>'teacher.save',		'uses'=>'TeachersController@save_teacher']);
	Route::get('/departments',			['as'=>'departments.list',	'uses'=>'DepartmentController@list_departments']);
	Route::get('/department/add',		['as'=>'department.add',	'uses'=>'DepartmentController@add_department']);	
	Route::get('/department/edit/{id}',	['as'=>'department.edit',	'uses'=>'DepartmentController@edit_department']);	
	Route::post('/department/save',		['as'=>'department.save',	'uses'=>'DepartmentController@save_department']);
	Route::get('/schedules',			['as'=>'schedules.list',	'uses'=>'SchedulesController@list_schedules']);
	Route::get('/schedule/add',			['as'=>'schedule.add',		'uses'=>'SchedulesController@add_schedule']);
	Route::get('/schedule/edit/{id}',	['as'=>'schedule.edit',		'uses'=>'SchedulesController@edit_schedule']);
	Route::post('/schedule/save',		['as'=>'schedule.save',		'uses'=>'SchedulesController@save_schedule']);
	Route::get('/users',				['as'=>'users.list',		'uses'=>'UsersController@list_users']);
	Route::get('/user/add',				['as'=>'user.add',			'uses'=>'UsersController@add_user']);	
	Route::get('/user/edit/{id}',		['as'=>'user.edit',			'uses'=>'UsersController@edit_user']);
	Route::post('/user/save',			['as'=>'user.save',			'uses'=>'UsersController@save_user']);

});
Route::group(['middleware'=>'auth'],function(){
	Route::get('/profile',				['as'=>'profile.view',		'uses'=>'ProfileController@view_profile']);
	Route::get('/lectures',				['as'=>'lectures.list',		'uses'=>'SchedulesController@list_lectures']);
	Route::get('/lecture/rate/{id}',			['as'=>'lecture.rate',		'uses'=>'SchedulesController@rate_lectures']);
	Route::get('/guest-lectures',		['as'=>'guestlectures.list','uses'=>'SchedulesController@list_guest_lectures']);
	Route::get('/guest-lecture/rate/{id}',	['as'=>'guestlectures.rate','uses'=>'SchedulesController@rate_guest_lectures']);
	Route::get('/workshops',			['as'=>'workshops.list',	'uses'=>'SchedulesController@list_workshops']);
	Route::get('/workshop/rate/{id}',		['as'=>'workshops.rate',	'uses'=>'SchedulesController@rate_workshops']);
	
});
