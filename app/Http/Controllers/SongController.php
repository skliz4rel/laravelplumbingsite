<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Song;

class SongController extends Controller
{
    //
 //This sample below would show a sample display a list from a database and getting particular item from the list in the database
    private $song;

    public function __construct(Song $song){
        $this->song = $song;
    }

    public function list(){

    	//$songs = Song::get();
        $songs  = $this->song->get();
      
    	return view('song.list',compact('songs'));
    }


    public function asong($id){

    	//$song = Song::find($id);
        $song = $this->song->find($id);

    	return view('song.asong',compact('song'));
    }

    public function show($slug){

    	//$song = Song::whereSlug($slug)->first();

        //or  $song = Song::where('slug',$slug)->first();

        $song = $this->song->where('slug',$slug)->first();

    	return view('song.show', compact('song'));
    }

    public function edit($slug){

        $song = $this->song->where('slug',$slug)->first();

        return view('song.edit',compact('song'));
    }


    public function update($slug, Request $request){

     $song = $this->song->where('slug',$slug)->first();

        if(isset($song)){
            
            //$song->title = $request->get('title');  // method one
            //$song->fill(['title'=> $request->get('title')]);  // method two

            $song->fill($request->input());  //This method is only good when you have protected your model against mass loading attack

            $song->save();
              return redirect('elist');
          }

          return $slug;
    }


    public function create(){

        return view('song.create');
    }
    
}
