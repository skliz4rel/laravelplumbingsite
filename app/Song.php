<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Song extends Model
{
    //We are going to determine the fillable or updatable fields of a Song entity

	protected $fillable = [ 'title', 'lyrics' ];


	//We have set the name of the table
	 protected $table = "song";
	 
}
