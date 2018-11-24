<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function __construct()
    {
        //$this->middleware(['auth', 'verified']);
    }
	
    public function index() {

		$title = "testing a pass thru variable";
		return view('dashboard')->with('title', $title);
		
	}
}