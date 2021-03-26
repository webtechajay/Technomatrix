<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;

class IndexController extends Controller
{
    public function index()
    {
    	// dd('jfjf');
    	return view('technomatrix.layouts.index');
    }

    public function store(Request $request)
    {	

    	$request->validate(
    		[
    			'contact_name'=>'required|max:120',
    			'contact_email'=>'required|email',
    			'contact_number'=>'required|min:11|numeric',
    			'message'=>'required|max:500',
    	],
    	[
    		'contact_name.required'=>"Name  field is require",
    		'contact_email.required'=>"Email field is require",
    		'contact_number.required'=>"Number field is require",
    		'message.required'=>"Message field is require",
    	]
    );
    	// dd($request->all());
    	$storeContact = new Contact();
    	$storeContact->contact_name = $request->contact_name;
    	$storeContact->contact_email = $request->contact_email;
    	$storeContact->contact_number = $request->contact_number;
    	$storeContact->message = $request->message;
    	$storeContact->save();
    	return redirect('/')->with('success','Technomatrix team get in touch you !');

    }
}
