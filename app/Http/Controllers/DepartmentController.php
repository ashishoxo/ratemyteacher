<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\department;

class DepartmentController extends Controller
{
    public function list_departments(){
    	$model = department::all();
    	return view('admin.departments.list',['model'=>$model]);
    }
    public function add_department(){
    	return view('admin.departments.add');
    }
    public function save_department(Request $request)
    {
    	$model = new department;
        $model->fill($request->except(['_token']));
        $model->save();
    	return redirect()->route('departments.list');
    }
    public function edit_department($id){
    	$model = department::find($id);
    	return view('admin.departments.edit',['model'=>$model]);	
    }
}
