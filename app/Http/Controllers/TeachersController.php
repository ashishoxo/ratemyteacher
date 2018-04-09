<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TeachersController extends Controller
{
    public function list_teachers(){
    	return view('admin.teachers.list');
    }
    public function add_teacher(){
    	return view('admin.teachers.add');
    }
}
