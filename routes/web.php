<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('about',
	function (){
		return view("pages.about");
	});

Route::get('help','PagesController@help');  //This is the routing format for Laravel 5.0

Route::get('loaddata','PagesController@loaddata'); 

Route::get('loadway','PagesController@loadway');


//This is the songs routing

Route::get('songs','SongsController@index');

Route::get('songs/{id}','SongsController@show');

Route::get('list','SongsController@list');

Route::get('asong/{id}','SongsController@asong');


//This is going to call views that use the eloquent structure

Route::get('elist',[ 'as' => 'songlist','uses'=>'SongController@list']);

Route::get('esong',[ 'as'=>'asong','uses' => 'SongController@asong']);

Route::get('show/{slug}', [ 'as'=>'showone', 'uses' => 'SongController@show']);

Route::get('song/{slug}/edit', ['as'=>'songedit','uses' => 'SongController@edit']);



//One line to give you awesome routing
$router->resource("person","PersonController", [

		'names'=>[
			'index'=>'personlist',
			'show'=>'showpersons'
		],
		'only'=>[
			'index','show','edit','update'
		]
		/*,
		except=>[
			'create'
		]
		*/
	]);

//Route::patch('updatesong/{slug}','SongController@update');  this is when you are not giving the route name

Route::patch('updatesong/{slug}', ['as'=>'updater','uses' => 'SongController@update']);

Route::post('create', ['as'=>'createsong', 'uses' => 'SongController@create']);

Route::get('find/{feedback}',"FeedbackController@find");