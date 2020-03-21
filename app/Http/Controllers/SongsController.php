<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class SongsController extends Controller
{
    //Declaring the variables of the controller


    public function index(){

    	$songs = $this->Staticsonglist();

    	return view('songs.index', compact('songs'));
    }


    public function show($id){

    	$name = $this->Staticsonglist()[$id];
    	return view('songs.show',compact('name'));
    }

      //We are going to create an helper method below
    private function Staticsonglist(){
    	$songs = ['Boy friend','Be Alright','Fall'];
    	
    	return $songs;	
    }


    //This sample below would show a sample display a list from a database and getting particular item from the list in the database

    public function list(){

    	$songs = DB::table('song')->get();

      
    	return view('songs.list',compact('songs'));
    }

    public function asong($id){

    	$song = DB::table('song')->find($id);

    	return view('songs.asong',compact('song'));
    }
    

}