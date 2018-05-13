<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    protected $fillable = ['name','department'];

    public function department_rel(){
    	return $this->belongsTo('App\department','department','id');
    }
    public function reviews(){
    	return $this->hasMany('App\ReviewTeacher','teacher_id','id');
    }

}
