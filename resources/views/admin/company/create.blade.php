@extends('admin.layouts.master')


@section('content')

	<style>
    .ui-datepicker-calendar {
        /*display: none;*/
    }
    </style>

<section class="content">


        <div class="container-fluid">
    	<div class="row">
    	<div class="col-md-12">
    		<div class="card card-primary">
    		<div class="card-header">
                <h3 class="card-title">Add Company</h3>
              </div>
             </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form  id="company">
              
                <div class="card-body">

                  <div class="form-group">
                    <label for="company_name">Company Name</label>
                    <input type="text" name="company_name" class="form-control" id="company_name" placeholder="Enter Company Name">
                  </div>

                  <div class="form-group">
                    <label for="director_name_one">Dr Name One</label>
                    <input type="text" name="director_name_one" class="form-control" id="director_name_one" placeholder="Enter Director Name Two">
                  </div>

                  <div class="form-group">
                    <label for="director_name_two">Dr Name Two</label>
                    <input type="text" name="director_name_two" class="form-control" id="director_name_two" placeholder="Enter Director Name Two">
                  </div>

                  <div class="form-group">
                    <label for="address">Address</label>
                    <textarea class="form-control" id="address" name="address" placeholder="Enter Address"></textarea>
                  </div>

                  <div class="form-group">
                    <label for="pan_card_number">Pan Card Number</label>
                    <input type="text" name="pan_card_number" class="form-control" id="pan_card_number" placeholder="Enter Pan Card Number">
                  </div>

                  <div class="form-group">
                    <label for="aadhar_card_number">Aadhar card Number </label>
                    <input type="text" name="aadhar_card_number" class="form-control" id="aadhar_card_number" placeholder="Enter Aadhar Card Number">
                  </div>

                  <div class="form-group">
                    <label for="number_of_employees">Number Of Employees</label>
                    <input type="text" name="number_of_employees" class="form-control" id="number_of_employees" placeholder="Enter Number Of Employees">
                  </div>

                  <div class="form-group">
                    <label for="number_of_desks">Number Of Desks</label>
                    <input type="text" name="number_of_desks" class="form-control" id="number_of_desks" placeholder="Enter Number Of Desks">
                  </div>

                  <div class="form-group">
                    <label for="meeting_room_hours">Meeting Room Hours</label>
                    <input type="text" name="meeting_room_hours" class="form-control" id="meeting_room_hours" placeholder="Enter Meeting Room Hours">
                  </div>

                  <div class="form-group">
                    <label for="locking_time">Locking Time</label>
                    <input type="text" name="locking_time" class="form-control" id="locking_time" placeholder="Enter Locking Time">
                  </div>

                  <div class="form-group">
                    <label for="lockout_time">Lockout Time</label>
                    <input type="text" name="lockout_time" class="form-control" id="lockout_time" placeholder="Enter Lockout Time">
                  </div>

                  <div class="form-group">
                    <label for="notice_peroid">Notice Peroid</label>
                    <input type="text" name="notice_peroid" class="form-control" id="notice_peroid" placeholder="Enter Notice Peroid">
                  </div>

                  <div class="form-group">
                    <label for="tenure">Tenure</label>
                    <input type="text" name="tenure" class="form-control" id="tenure" placeholder="Enter Tenure">
                  </div>

                  <div class="form-group">
                    <label for="certification_of_information_image">Certifivation Of Information Image</label>
                    <input type="file" name="certification_of_information_image" class="form-control" id="certification_of_information_image" placeholder="Enter Certifivation Of Information Image">
                  </div>

                  <div class="form-group">
                    <label for="pan_card_image">Pan Card Image</label>
                    <input type="file" name="pan_card_image" class="form-control" id="pan_card_image">
                  </div>

                  <div class="form-group">
                    <label for="aadhar_card_image">Aadhar Card Image</label>
                    <input type="file" name="aadhar_card_image" class="form-control" id="aadhar_card_image">
                  </div>

                  <div class="form-group">
                    <label for="tan_card_image">Tan Card Image</label>
                    <input type="file" name="tan_card_image" class="form-control" id="tan_card_image">
                  </div>

                  <div class="form-group">
                    <label for="contact_person_name">Contact Person Name</label>
                    <input type="text" name="contact_person_name" class="form-control" id="contact_person_name" placeholder="Contact Person Name">
                  </div>

                  <div class="form-group">
                    <label for="contact_person_mobile_number">Contact Person Mobile Number</label>
                    <input type="text" name="contact_person_mobile_number" class="form-control" id="contact_person_mobile_number" placeholder="Enter Contact Person Mobile Number">
                  </div>

                  <div class="form-group">
                    <label for="profile_pic">Profile Pic</label>
                    <input type="file" name="profile_pic" class="form-control" id="profile_pic">
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


</section>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.11.0/sweetalert2.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.11.0/sweetalert2.all.min.js"></script>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript">
      $(function() {
        $("#company").on("submit", function(e) {
            e.preventDefault()
          $.ajax({
            url: '{{url("/admin/storeCompany")}}',
            headers:{
                'X-CSRF-TOKEN': "{{ csrf_token() }}"
              },  
            method: 'POST',
            type: 'JSON',
            data:  new FormData(this),
            contentType: false,
            cache: false,
            processData:false,
            success: function(obj) {
             if(obj.status ="success") {
                swal({
                    title:'An Event Added <b style="color:green;">successfully</b>!',
                    type:'success',
                    
                }).then(e=>{
                window.location.href = "{{ url('/admin/viewCompany') }}"

                }).catch(err=>{

                });
              }
            },
            error: function(obj) {
              alert("error"); 
            },
          })
      })      
  })
</script>

@endsection