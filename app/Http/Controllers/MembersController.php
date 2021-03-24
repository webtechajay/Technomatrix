<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Members;

class MembersController extends Controller
{

     public function __construct()
    {

        $this->middleware('auth');
    }

	public function index()
	{	
		$viewMembers = Members::all();
		return view('admin.members.index')->with(compact('viewMembers'));
	}


    public function create()
    {
    	$companies = DB::select('select id,company_name from companies');
    	// dd($companies);
    	return view('admin.members.create')->with(compact('companies'));
    }

    public function store(Request $request)
    {	


    	$storeMembers = new Members();
    	// dd($request->all());
    	$storeMembers->company_id = $request->company_id;
    	$storeMembers->member_email = $request->member_email;
    	$storeMembers->member_name = $request->member_name;
    	$storeMembers->member_contact = $request->member_contact;
    	$storeMembers->member_aadhar_number = $request->member_aadhar_number;
    	$storeMembers->member_pan_number = $request->member_pan_number;
    	$storeMembers->member_location = $request->member_location;
    	$storeMembers->member_joining_date = $request->member_joining_date;

    	

    	//Pan Image

    	if($request->hasfile('member_pan_image')){
        $file = $request->file('member_pan_image');
        $extenstion = $file->getClientOriginalExtension();
        $filename = time().'.'. $extenstion;
        $file->move('uploads/member_pan_image', $filename);
        $storeMembers->member_pan_image = $filename;

        }


    	//Member Aadhar Image

    	if($request->hasfile('member_aadhar_image')){
        $file = $request->file('member_aadhar_image');
        $extenstion = $file->getClientOriginalExtension();
        $filename = time().'.'. $extenstion;
        $file->move('uploads/member_aadhar_image', $filename);
        $storeMembers->member_aadhar_image = $filename;

        }



    	$storeMembers->save();

    	return redirect('admin/viewMembers');
    }

    public function edit($member)
    {
        $editMembers = Members::find($member);
        // dd($editMembers->company_id);

        $companies = DB::select('select id,company_name from companies');
        // dd($companies);
        return view('admin.members.edit')->with(compact('editMembers','companies'));
    }

    public function update(Request $request, $member)
    {
        $updateMembers = Members::find($member);
        // dd($request->all());
        $updateMembers->company_id = $request->company_id;
        $updateMembers->member_email = $request->member_email;
        $updateMembers->member_name = $request->member_name;
        $updateMembers->member_contact = $request->member_contact;
        $updateMembers->member_aadhar_number = $request->member_aadhar_number;
        $updateMembers->member_pan_number = $request->member_pan_number;
        $updateMembers->member_location = $request->member_location;
        $updateMembers->member_joining_date = $request->member_joining_date;

        

        //Pan Image

        if($request->hasfile('member_pan_image')){
        $file = $request->file('member_pan_image');
        $extenstion = $file->getClientOriginalExtension();
        $filename = time().'.'. $extenstion;
        $file->move('uploads/member_pan_image', $filename);
        $updateMembers->member_pan_image = $filename;

        }


        //Member Aadhar Image

        if($request->hasfile('member_aadhar_image')){
        $file = $request->file('member_aadhar_image');
        $extenstion = $file->getClientOriginalExtension();
        $filename = time().'.'. $extenstion;
        $file->move('uploads/member_aadhar_image', $filename);
        $updateMembers->member_aadhar_image = $filename;

        }



        $updateMembers->save();

        return redirect('admin/viewMembers');

    }


    public function destroy($member)
    {
        $destroyMembers = Members::find($member);
        $destroyMembers->delete();

        return redirect('admin/viewMembers');
    }

    public function show($member)
    {   
        $showMembers = Members::find($member);
        $companies = DB::select('select id,company_name from companies');
        return view('admin.members.show')->with(compact('showMembers', 'companies'));
    }

}
