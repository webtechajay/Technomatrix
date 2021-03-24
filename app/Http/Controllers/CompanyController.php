<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Company;

class CompanyController extends Controller
{

   public function __construct()
    {

        $this->middleware('auth');
    }

	public function index()
	{
		$viewCompany = Company::all();
		return view('admin.company.index')->with(compact('viewCompany'));
	}


    public function create()
    {
    	return view('admin.company.create');
    }

    public function store(Request $request)
    {
    	$storeCompany = new Company();
    	$storeCompany->company_name = $request->company_name;
    	$storeCompany->director_name_one = $request->director_name_one;
    	$storeCompany->director_name_two = $request->director_name_two;
    	$storeCompany->address = $request->address;
    	$storeCompany->pan_card_number = $request->pan_card_number;
    	$storeCompany->aadhar_card_number = $request->aadhar_card_number;
    	$storeCompany->number_of_employees = $request->number_of_employees;
    	$storeCompany->number_of_desks = $request->number_of_desks;
    	$storeCompany->meeting_room_hours = $request->meeting_room_hours;
    	$storeCompany->locking_time = $request->locking_time;
    	$storeCompany->lockout_time = $request->lockout_time;
    	$storeCompany->notice_peroid = $request->notice_peroid;
    	$storeCompany->tenure = $request->tenure;

    	//Certification Of Information Image

    	if($request->hasfile('certification_of_information_image')){
          $img_tmp = $request->file('certification_of_information_image');
          if($img_tmp->isValid()){

          //image path code
          $extension = $img_tmp->getClientOriginalExtension();
          $filename = rand(111,99999).'.'.$extension;
          $img_path = public_path('/uploads/certification_of_information_image'); 
          $img_tmp->move($img_path,$filename);

          //image resize
          // image::make($img_tmp)->resize(500,500)->save($img_path);

          $storeCompany->certification_of_information_image = $filename;
        }
        }

        //Pan Card Image

        if($request->hasfile('pan_card_image')){
          $img_tmp = $request->file('pan_card_image');
          if($img_tmp->isValid()){

          //image path code
          $extension = $img_tmp->getClientOriginalExtension();
          $filename = rand(111,99999).'.'.$extension;
          $img_path = public_path('/uploads/pan_card_image'); 
          $img_tmp->move($img_path,$filename);

          //image resize
          // image::make($img_tmp)->resize(500,500)->save($img_path);

          $storeCompany->pan_card_image = $filename;
        }
        }

    	//Aadhar Card Image

    	if($request->hasfile('aadhar_card_image')){
          $img_tmp = $request->file('aadhar_card_image');
          if($img_tmp->isValid()){

          //image path code
          $extension = $img_tmp->getClientOriginalExtension();
          $filename = rand(111,99999).'.'.$extension;
          $img_path = public_path('/uploads/aadhar_card_image'); 
          $img_tmp->move($img_path,$filename);

          //image resize
          // image::make($img_tmp)->resize(500,500)->save($img_path);

          $storeCompany->aadhar_card_image = $filename;
        }
        }

        //Tan Card Image

        if($request->hasfile('tan_card_image')){
          $img_tmp = $request->file('tan_card_image');
          if($img_tmp->isValid()){

          //image path code
          $extension = $img_tmp->getClientOriginalExtension();
          $filename = rand(111,99999).'.'.$extension;
          $img_path = public_path('/uploads/tan_card_image'); 
          $img_tmp->move($img_path,$filename);

          //image resize
          // image::make($img_tmp)->resize(500,500)->save($img_path);

          $storeCompany->tan_card_image = $filename;
        }
        }


    	$storeCompany->contact_person_name = $request->contact_person_name;
    	$storeCompany->contact_person_mobile_number = $request->contact_person_mobile_number;


    	//Profile Pic 

    	if($request->hasfile('profile_pic')){
          $img_tmp = $request->file('profile_pic');
          if($img_tmp->isValid()){

          //image path code
          $extension = $img_tmp->getClientOriginalExtension();
          $filename = rand(111,99999).'.'.$extension;
          $img_path = public_path('/uploads/profile_pic'); 
          $img_tmp->move($img_path,$filename);

          //image resize
          // image::make($img_tmp)->resize(500,500)->save($img_path);

          $storeCompany->profile_pic = $filename;
        }
        }

    	// $storeCompany->save();

    	if($storeCompany->save()) {
            $response["status"] = "success";            
        }
        else {
            $response["status"] = "failure";
        }
        return $response;


    }

    public function edit($company)
    {
      $editCompany = Company::find($company);
      return view('admin.company.edit')->with(compact('editCompany'));
    }

    public function update(Request $request, $company)
    {
        $updateCompany = Company::find($company);
        $updateCompany->company_name = $request->company_name;
        $updateCompany->director_name_one = $request->director_name_one;
        $updateCompany->director_name_two = $request->director_name_two;
        $updateCompany->address = $request->address;
        $updateCompany->pan_card_number = $request->pan_card_number;
        $updateCompany->aadhar_card_number = $request->aadhar_card_number;
        $updateCompany->number_of_employees = $request->number_of_employees;
        $updateCompany->number_of_desks = $request->number_of_desks;
        $updateCompany->meeting_room_hours = $request->meeting_room_hours;
        $updateCompany->locking_time = $request->locking_time;
        $updateCompany->lockout_time = $request->lockout_time;
        $updateCompany->notice_peroid = $request->notice_peroid;
        $updateCompany->tenure = $request->tenure;

      //Certification Of Information Image

      if($request->hasfile('certification_of_information_image')){
          $img_tmp = $request->file('certification_of_information_image');
          if($img_tmp->isValid()){

          //image path code
          $extension = $img_tmp->getClientOriginalExtension();
          $filename = rand(111,99999).'.'.$extension;
          $img_path = public_path('/uploads/certification_of_information_image'); 
          $img_tmp->move($img_path,$filename);

          //image resize
          // image::make($img_tmp)->resize(500,500)->save($img_path);

          $updateCompany->certification_of_information_image = $filename;
        }
        }

        //Pan Card Image

        if($request->hasfile('pan_card_image')){
          $img_tmp = $request->file('pan_card_image');
          if($img_tmp->isValid()){

          //image path code
          $extension = $img_tmp->getClientOriginalExtension();
          $filename = rand(111,99999).'.'.$extension;
          $img_path = public_path('/uploads/pan_card_image'); 
          $img_tmp->move($img_path,$filename);

          //image resize
          // image::make($img_tmp)->resize(500,500)->save($img_path);

          $updateCompany->pan_card_image = $filename;
        }
        }

      //Aadhar Card Image

      if($request->hasfile('aadhar_card_image')){
          $img_tmp = $request->file('aadhar_card_image');
          if($img_tmp->isValid()){

          //image path code
          $extension = $img_tmp->getClientOriginalExtension();
          $filename = rand(111,99999).'.'.$extension;
          $img_path = public_path('/uploads/aadhar_card_image'); 
          $img_tmp->move($img_path,$filename);

          //image resize
          // image::make($img_tmp)->resize(500,500)->save($img_path);

          $updateCompany->aadhar_card_image = $filename;
        }
        }

        //Tan Card Image

        if($request->hasfile('tan_card_image')){
          $img_tmp = $request->file('tan_card_image');
          if($img_tmp->isValid()){

          //image path code
          $extension = $img_tmp->getClientOriginalExtension();
          $filename = rand(111,99999).'.'.$extension;
          $img_path = public_path('/uploads/tan_card_image'); 
          $img_tmp->move($img_path,$filename);

          //image resize
          // image::make($img_tmp)->resize(500,500)->save($img_path);

          $updateCompany->tan_card_image = $filename;
        }
        }


      $updateCompany->contact_person_name = $request->contact_person_name;
      $updateCompany->contact_person_mobile_number = $request->contact_person_mobile_number;


      //Profile Pic 

      if($request->hasfile('profile_pic')){
          $img_tmp = $request->file('profile_pic');
          if($img_tmp->isValid()){

          //image path code
          $extension = $img_tmp->getClientOriginalExtension();
          $filename = rand(111,99999).'.'.$extension;
          $img_path = public_path('/uploads/profile_pic'); 
          $img_tmp->move($img_path,$filename);

          //image resize
          // image::make($img_tmp)->resize(500,500)->save($img_path);

          $updateCompany->profile_pic = $filename;
        }
        }

      // $storeCompany->save();

      if($updateCompany->save()) {
            $response["status"] = "success";            
        }
        else {
            $response["status"] = "failure";
        }
        return $response;
    }

    public function destroy($company)
    {
      $deleteCompany = Company::find($company);
      $deleteCompany->delete();
      return redirect('admin/viewCompany');
    }

    public function show($company)
    {
      $showCompany = Company::find($company);
      return view('admin.company.show')->with(compact('showCompany'));
    }
}
