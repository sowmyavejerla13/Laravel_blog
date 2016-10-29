<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //
    public function home(){
    	$people = ['people1','people2','people3'];
    	return view('welcome')->withPeople($people);
    }
   
}
