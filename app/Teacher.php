<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    protected $fillable = ['name','department','pic'];

    public function department_rel(){
    	return $this->belongsTo('App\department','department','id');
    }

}
