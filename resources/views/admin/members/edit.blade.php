@extends('admin.layouts.master')


@section('content')

    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Edit Member</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{url('admin/dashboard')}}">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v1</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <div class="container">
      <div class="row">
      <div class="col-md-12">
        <div class="card card-primary">
        <div class="card-header">
                <h3 class="card-title">Edit Member</h3>
              </div>
             </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="post" action="{{url('admin/updateMembers', $editMembers->id)}}" enctype="multipart/form-data">
                {{ csrf_field() }}  
                <div class="card-body">

                  <div>
                    <input type="hidden" name="company_id" value="{{$editMembers->company_id}}">
                  </div>

                <div class="form-group">
                        <label>Company</label>
                       <!--  <select class="form-control" name="company_id">
                          <option>-----Select----</option>
                          @foreach($companies as $company)
                          <option value="{{$company->id}}">{{$company->company_name}}</option>
                          @endforeach
                        </select> -->

                      <select name="company_id" class="form-control">
                     @foreach($companies as $key=>$company)
                      <option value="{{ $company->id }}"{{ ( $editMembers->company_id == $company->id ) ? ' selected' : '' }}>{{$company->company_name}}</option>
                      @endforeach
                      </select>

                </div>

                  <div class="form-group">
                    <label for="member_email">Email:</label>
                    <input type="text" name="member_email" value="{{$editMembers->member_email}}" class="form-control" id="member_email" placeholder="Enter Email">
                  </div>

                  <div class="form-group">
                    <label for="member_name">Name</label>
                    <input type="text" name="member_name" value="{{$editMembers->member_name}}" class="form-control" id="member_name" placeholder="Enter Name">
                  </div>

                  <div class="form-group">
                    <label for="member_contact">Contact</label>
                    <input type="text" name="member_contact" value="{{$editMembers->member_contact}}" class="form-control" id="member_contact" placeholder="Enter Contact">
                  </div>

                  <div class="form-group">
                    <label for="member_aadhar_number">Aadhar Number</label>
                    <input type="text" name="member_aadhar_number" value="{{$editMembers->member_aadhar_number}}" class="form-control" id="member_aadhar_number" placeholder="Enter Aadhar Number">
                  </div>

                  <div class="form-group">
                    <label for="member_pan_number">Pan Number</label>
                    <input type="text" name="member_pan_number" value="{{$editMembers->member_pan_number}}" class="form-control" id="member_pan_number" placeholder="Enter Pan Number">
                  </div>

                  <div class="form-group">
                    <label for="member_location">Location</label>
                    <input type="text" name="member_location" value="{{$editMembers->member_location}}" class="form-control" id="member_location" placeholder="Enter Location">
                  </div>

                <div class="form-group">
                  <label>Joining Date</label>
                    <div class="input-group date" id="" data-target-input="nearest">
                        <input type="text" name="member_joining_date" value="{{$editMembers->member_joining_date}}" id="startDate" class="form-control date-picker" data-target="#reservationdate"/>
                        <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                        </div>
                    </div>
                </div>

                  <div class="form-group">
                    <div>
                    @if(!empty($editMembers->member_pan_image))
                    <img src="{{asset('/uploads/member_pan_image/'.$editMembers->member_pan_image)}}" alt="" style="width:50px;">
                    @endif
                    </div>
                    <label for="member_pan_image">Pan Image</label>
                    <input type="file" name="member_pan_image" class="form-control" id="member_pan_image">
                  </div>

                  <div class="form-group">
                    @if(!empty($editMembers->member_aadhar_image))
                    <img src="{{asset('/uploads/member_aadhar_image/'.$editMembers->member_aadhar_image)}}" alt="" style="width:50px;">
                    @endif
                    <label for="member_aadhar_image">Aadhar Image</label>
                    <input type="file" name="member_aadhar_image" class="form-control" id="member_aadhar_image">
                  </div>


                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
      </div>
      </div>
    </div>

@endsection





