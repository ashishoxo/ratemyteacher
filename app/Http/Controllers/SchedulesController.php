<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SchedulesController extends Controller
{
    public function add_schedule()
    {
    	return view('admin.schedules.add');
    }
}
