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

/*Route::get('/', function () {
	$people = ['val1','val2','val3'];
   // return view('welcome',['people'=>$people]);
   // return view('welcome',compact($people));
	// return view('welcome')->with('people',$people);
    return view('welcome')->withPeople($people);
});

Route::get('about',function(){
	return view('pages.about');
});
*/

Route::get('/','PagesController@home');
Route::get('cards/index','CardsController@index');
Route::get('cards/show/{id}','CardsController@show');
