<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Feedback;

class FeedbackController extends Controller
{
    //

	public function __construct(){

	}


	//This is going to demonstrate model binding in the controller
	public function find(Feedback $feedback){

		return $feedback;
	}


}
