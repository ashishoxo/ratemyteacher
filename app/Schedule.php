<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    public function meta(){
    	return $this->hasMany('App\Schedule_meta','schedule_id','id');
    }
}