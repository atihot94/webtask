<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class home extends Controller
{
    public function showhome(){
		return view('index');
	}
	public function services(){

		return view('services');
	}
	public function portfolio(){
		
		return view('portfolio');
	}
	public function teach(){

		return view('teac');
	}
}
