<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Schedule;
use App\Schedule_meta;
use App\review;
use Carbon\Carbon;

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
    	$model->date = $request->date;

    	$model->save();
    	foreach ($request->except(['_token', 'schedule_type','date']) as $key => $value) {
    		$meta = new Schedule_meta;
    		$meta->schedule_id = $model->id;
    		$meta->key = $key;
    		$meta->value = ($value == null)?'':$value;
    		
    		$meta->save();	
    	}
    }
    public function list_schedules()
    {
    	$model = Schedule::with(['meta'])->get();
    	return view('admin.schedules.list',['schedules'=>$model]);
    }

    public function list_lectures()
    {   $today = Carbon::now()->format('Y-m-d');
        $model = Schedule::where([['schedule_type','=','lecture'],['date','=',$today]])->with(['meta'])->get();
        return view('student.classes.lectures.list',['lectures'=>$model]);
    }
    public function list_guest_lectures()
    {
        $today = Carbon::now()->format('Y-m-d');
        $model = Schedule::where([['schedule_type','=','guest_lecture'],['date','=',$today]])->with(['meta'])->get();
        return view('student.classes.guest-lectures.list',['guest_lectures'=>$model]);
    }
    public function list_workshops()
    {
        $today = Carbon::now()->format('Y-m-d');
        $model = Schedule::where([['schedule_type','=','workshop'],['date','=',$today]])->with(['meta'])->get();
        return view('student.classes.workshops.list',['workshop'=>$model]);
    }  

    public function rate_lectures($id)
    {
        $model = Schedule::with(['meta','reviews'])->find($id);
        
        return view('student.classes.lectures.rate',['model'=>$model]);        
    }
    public function rate_lectures_save(Request $request,$id)
    {
        $model = new review;
        $model->schedule_id = $id;
        $model->comment = $request->comment;
        $model->rating = $request->rating;
        $model->user = $request->user;
        $model->save();
        return redirect()->route('lecture.rate',$id);

    }
    public function rate_guest_lectures($id)
    {
        $model = Schedule::with(['meta','reviews'])->find($id);
        return view('student.classes.guest-lectures.rate',['model'=>$model]);        
    }
    public function rate_workshops($id)
    {
        $model = Schedule::with(['meta','reviews'])->find($id);
        return view('student.classes.workshops.rate',['model'=>$model]);      
    }  
    public function delete_schedule($id)
    {
        $model = Schedule::with(['meta','reviews'])->find($id);
        $model->delete();
        return redirect()->route('schedules.list');
    }
}
