<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class department extends Model
{
    protected $fillable = ['name'];

    public static function getDepartment(){

    	return self::orderBy('id','asc')->pluck('name','id');
    }
    
}
