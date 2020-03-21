<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    //

    //We have set the name of the table
    protected $table = "task";



    //Creating your user defined methods in the Task Model
    public static function isComplete(){

    	return static::where('completed',0)->get();
    }
}
