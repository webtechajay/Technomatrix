@extends('admin.layouts.master')


@section('content')

  <section class="content">

    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
        <div class="card card-primary">
        <div class="card-header">
                <h3 class="card-title">View Company</h3>
              </div>
             </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Id</th>
                    <th>Company Name</th>
                    <th>Dr Name One</th>
                    <th>Dr Name Two</th>
                    <th>Address</th>
                    <th>Pan Card Number</th>
                    <th>Aadhar card Number</th>
                    <th>Number Of Employees</th>
                    <th>Number Of Desks</th>
                    <th>Meeting Room Hours</th>
                    <th>Locking Time</th>
                    <th>Lockout Time</th>
                    <th>Notice Peroid</th>
                    <th>Tenure</th>
                    <th>Certifivation Of Information Image</th>
                    <th>Pan Card Image</th>
                    <th>Aadhar Card Image</th>
                    <th>Tan Card Image</th>
                    <th>Contact Person Name</th>
                    <th>Contact Person Mobile Number</th>
                    <th>Profile Pic</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                    @foreach($viewCompany as $key=>$company)
                  <tr>
                    <td>{{$key+1}}</td>
                    <td>{{$company->company_name}}</td>
                    <td>{{$company->director_name_one}}</td>
                    <td>{{$company->director_name_two}}</td>
                    <td>{{$company->address}}</td>
                    <td>{{$company->pan_card_number}}</td>
                    <td>{{$company->aadhar_card_number}}</td>
                    <td>{{$company->number_of_employees}}</td>
                    <td>{{$company->number_of_desks}}</td>
                    <td>{{$company->meeting_room_hours}}</td>
                    <td>{{$company->locking_time}}</td>
                    <td>{{$company->lockout_time}}</td>
                    <td>{{$company->notice_peroid}}</td>
                    <td>{{$company->tenure}}</td>
                    <td>
                    @if(!empty($company->certification_of_information_image))
                    <img src="{{asset('/uploads/certification_of_information_image/'.$company->certification_of_information_image)}}" alt="" style="width:50px;">
                    @endif
                    </td>
                    <td>
                    @if(!empty($company->pan_card_image))
                    <img src="{{asset('/uploads/pan_card_image/'.$company->pan_card_image)}}" alt="" style="width:50px;">
                    @endif
                    </td>
                    <td>
                    @if(!empty($company->aadhar_card_image))
                    <img src="{{asset('/uploads/aadhar_card_image/'.$company->aadhar_card_image)}}" alt="" style="width:50px;">
                    @endif
                    </td>
                    <td>
                    @if(!empty($company->tan_card_image))
                    <img src="{{asset('/uploads/tan_card_image/'.$company->tan_card_image)}}" alt="" style="width:50px;">
                    @endif
                    </td>
                    <td>{{$company->contact_person_name}}</td>
                    <td>{{$company->contact_person_mobile_number}}</td>
                    <td>
                    @if(!empty($company->profile_pic))
                    <img src="{{asset('/uploads/profile_pic/'.$company->profile_pic)}}" alt="" style="width:50px;">
                    @endif
                    </td>
                    <td>
                      <a href="{{url('admin/editCompany', $company->id)}}" class="btn btn-sm btn-primary">Edit</a>
                      <a href="{{url('admin/destroyCompany', $company->id)}}" class="btn btn-sm btn-danger">Delete</a>
                      <a href="{{url('admin/showCompany', $company->id)}}" class="btn btn-sm btn-secondary">View</a>
                    </td>
                  </tr>
                  @endforeach
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
           
        </div>
      </div>
    </div>

</section>
@endsection