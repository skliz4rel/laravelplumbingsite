<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //


    public function about(){
    	return "This is the about page";
    }

    public function help(){

    	$lessons = ['Step 1','Step 2','Step 3'];

    	return view('pages.help', ['title'=>'Page title','lessons'=>$lessons]);
    }


    public function Loaddata(){


    	$lessons = ['Step 1','Step 2','Step 3'];
    	return view("pages.Loaddata",['Address'=>'13, Ibarapa street'])->with('lessons',$lessons)->with('Author','Akindejoye Olajide');
    }


    public function loadway(){

    	$lessons = ['Step 1','Step 2','Step 3'];
    	$name = "Akindejoye Olajide";
    	$Address = "13, Ibarapa street";
    	return view("pages.loadway",compact("lessons","name","Address"));
    }
    
}
