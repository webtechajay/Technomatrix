<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
    	// dd('jfjf');
    	return view('technomatrix.layouts.index');
    }
}
