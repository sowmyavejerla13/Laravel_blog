<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use App\card;
class CardsController extends Controller
{
    //
    public function index()
    {
    	# code...
    	// $cards = DB::table('cards')->get();
        $cards= card::all();
    	return view('cards.index',compact('cards'));
    }

     public function show($id)
     {
     	$cards = card::find($id);
     	return view('cards.show',compact('cards'));
     }
}
