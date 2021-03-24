<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Visitor;

class VisitorController extends Controller
{

	public function index()
	{
		$viewVisitor = Visitor::all();
		return view('admin.visitor.index')->with(compact('viewVisitor'));
	}
    public function create()
    {
    	return view('admin.visitor.create');
    }

    public function store(Request $request)
    {
    	// dd($request->all());
    	$storeVisitor = new Visitor();
    	$storeVisitor->visitor_name = $request->visitor_name;
    	$storeVisitor->visitor_email = $request->visitor_email;
    	$storeVisitor->visitor_contact = $request->visitor_contact;
    	$storeVisitor->visitor_whoom_to_meet = $request->visitor_whoom_to_meet;
    	$storeVisitor->visitor_address = $request->visitor_address;
    	$storeVisitor->visitor_in_time = $request->visitor_in_time;
    	$storeVisitor->visitor_out_time = $request->visitor_out_time;
    	$storeVisitor->save();

    	return  redirect('admin/viewVisitor');
    }

    public function edit($visitor)
    {
    	$editVisitor = Visitor::find($visitor);
    	// dd($editVisitor);
    	return view('admin.visitor.edit')->with(compact('editVisitor'));
    }

    public function update(Request $request, $visitor)
    {
    	$updateVisitor = Visitor::find($visitor);
    	$updateVisitor->visitor_name = $request->visitor_name;
    	$updateVisitor->visitor_email = $request->visitor_email;
    	$updateVisitor->visitor_contact = $request->visitor_contact;
    	$updateVisitor->visitor_whoom_to_meet = $request->visitor_whoom_to_meet;
    	$updateVisitor->visitor_address = $request->visitor_address;
    	$updateVisitor->visitor_in_time = $request->visitor_in_time;
    	$updateVisitor->visitor_out_time = $request->visitor_out_time;
    	$updateVisitor->save();

    	return redirect('admin/viewVisitor');
    }


    public function destroy($visitor)
    {
    	$deleteVisitor = Visitor::find($visitor);
    	$deleteVisitor->delete();
    	return redirect('admin/viewVisitor');
    }

    public function show($visitor)
    {
    	$showVisitor = Visitor::find($visitor);
    	return view('admin.visitor.show')->with(compact('showVisitor'));
    }
}
