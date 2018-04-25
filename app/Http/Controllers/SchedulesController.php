<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Schedule;
use App\Schedule_meta;

class SchedulesController extends Controller
{
    public function add_schedule()
    {
    	return view('admin.schedules.add');
    }
    public function save_schedule(Request $request)
    {	
    	$model = new Schedule;
    	$model->schedule_type = $request->schedule_type;
    	$model->save();
    	foreach ($request->except(['_token', 'schedule_type']) as $key => $value) {
    		$meta = new Schedule_meta;
    		$meta->schedule_id = $model->id;
    		$meta->key = $key;
    		$meta->value = ($value == null)?'':$value;
    		
    		$meta->save();	
    	}
    }
    public function list_departments()
    {
    	$model = Schedule::with(['meta'])->get();
    	return view('admin.schedules.list',['schedules'=>$model]);
    }
}
