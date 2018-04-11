<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Teacher;

class TeachersController extends Controller
{
    public function list_teachers(){
    	$model = Teacher::all();
    	return view('admin.teachers.list',['model'=>$model]);
    }
    public function add_teacher(){
    	return view('admin.teachers.add');
    }
    public function save_teacher(Request $request)
    {
    	$model = new Teacher;
        $model->fill($request->except(['_token']));
        $model->save();
    	return redirect()->route('teachers.list');
    }
    public function edit_teacher($id){
    	$model = Teacher::find($id);
    	return view('admin.teachers.edit',['model'=>$model]);	
    }
}
