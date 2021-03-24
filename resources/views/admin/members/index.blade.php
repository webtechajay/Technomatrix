@extends('admin.layouts.master')


@section('content')

   <section class="content">

    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
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
                    <th>Company_id</th>
                    <th>Email</th>
                    <th>Name</th>
                    <th>Contact</th>
                    <th>Aadhar Number</th>
                    <th>Pan Number</th>
                    <th>Location</th>
                    <th>Joining Date</th>
                    <th>Pan Image</th>
                    <th>Aadhar Image</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                    @foreach($viewMembers as $key=>$member)
                  <tr>
                    <td>{{$key+1}}</td>
                    <td>{{$member->company_id}}</td>
                    <td>{{$member->member_email}}</td>
                    <td>{{$member->member_name}}</td>
                    <td>{{$member->member_contact}}</td>
                    <td>{{$member->member_aadhar_number}}</td>
                    <td>{{$member->member_pan_number}}</td>
                    <td>{{$member->member_location}}</td>
                    <td>{{$member->member_joining_date}}</td>
                    <td>
                    @if(!empty($member->member_pan_image))
                    <img src="{{asset('/uploads/member_pan_image/'.$member->member_pan_image)}}" alt="" style="width:50px;">
                    @endif
                    </td>
                    <td>
                    @if(!empty($member->member_aadhar_image))
                    <img src="{{asset('/uploads/member_aadhar_image/'.$member->member_aadhar_image)}}" alt="" style="width:50px;">
                    @endif
                    </td>
                    <td>
                      <a href="{{url('admin/editMembers', $member->id)}}" class="btn btn-sm btn-primary">Edit</a>
                      <a href="{{url('admin/destroyMembers', $member->id)}}" class="btn btn-sm btn-danger">Delete</a>
                      <a href="{{url('admin/showMembers', $member->id)}}" class="btn btn-sm btn-secondary">View</a>
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