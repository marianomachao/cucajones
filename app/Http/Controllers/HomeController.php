<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;

class HomeController extends Controller
{
    //
    public function show()
    {
    	// print_r(Item::all());
        return view('home', [
        	'items' => Item::where('active', 1)->get(),
        	'tweets' => Item::where('active', 1)->where('type', 'tweet')->get(),
        	'photos' => Item::where('active', 1)->where('type', 'imagen')->get(),
        	'videos' => Item::where('active', 1)->where('type', 'youtube')->get(),
        	'bandcamps' => Item::where('active', 1)->where('type', 'bandcamp')->get(),
        	'spotify' => Item::where('active', 1)->where('type', 'spotify')->get(),
        	'texts' => Item::where('active', 1)->where('type', 'texto')->get()
        ]);
    }
}