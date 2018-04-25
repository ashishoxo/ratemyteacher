<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function view_profile()
    {
    	return view('student.profile.view');
    }
    public function edit_profile()
    {
    	# code...
    }
}
