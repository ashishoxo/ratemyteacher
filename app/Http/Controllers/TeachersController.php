<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Teacher;
use App\ReviewTeacher;

class TeachersController extends Controller
{
    public function list_teachers(){
    	$model = Teacher::with(['department_rel'])->get();
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
    public function list_teachers_for_student()
    {
        $model = Teacher::with(['department_rel'])->get();
        return view('student.teachers.list',['model'=>$model]);
    }
    public function rate_teacher($id)
    {
        $model = Teacher::with(['reviews'])->find($id);
        return view('student.teachers.rate',['model'=>$model]);   
    }
    public function review_teacher(Request $request,$id)
    { 
        $model = new ReviewTeacher;
        $model->teacher_id = $id;
        $model->comment = $request->comment;
        $model->rating = $request->rating;
        $model->user = $request->user;
        $model->save();
        return redirect()->route('rate.teacher',$id);
    }
    public function ratings_teacher($id)
    {
        // $model = new ReviewTeacher;
        $model = ReviewTeacher::where('teacher_id',$id)->get();
        // dd($model);
        return view('admin.teachers.ratings',['model'=>$model]);   
    }
}
