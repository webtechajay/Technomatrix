@extends('admin.layouts.master')


@section('content')

  <section class="content">

    <div class="container-fluid">
      <div class="row">
      <div class="col-md-12">
        <div class="card card-primary">
        <div class="card-header">
                <h3 class="card-title">Add Visitor</h3>
              </div>
             </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="post" action="{{url('admin/storeVisitor')}}" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="card-body">

            

                  <div class="form-group">
                    <label for="visitor_name">Person Name</label>
                    <input type="text" name="visitor_name" class="form-control" id="visitor_name" placeholder="Enter Person Name">
                  </div>

                  <div class="form-group">
                    <label for="visitor_email">Email:</label>
                    <input type="text" name="visitor_email" class="form-control" id="visitor_email" placeholder="Enter Email">
                  </div>


                  <div class="form-group">
                    <label for="visitor_contact">Mobile No</label>
                    <input type="text" name="visitor_contact" class="form-control" id="visitor_contact" placeholder="Enter Contact">
                  </div>


                  <div class="form-group">
                    <label for="visitor_whoom_to_meet">Whoom to Meet</label>
                    <input type="text" name="visitor_whoom_to_meet" class="form-control" id="visitor_whoom_to_meet" placeholder="Enter Whoom To Meet">
                  </div>


                  <div class="form-group">
                    <label for="visitor_address">Address</label>
                    <textarea class="form-control" name="visitor_address" id="visitor_address" placeholder="Enter Address"></textarea>
                  </div>

                    <div class="form-row">
                    <div class="form-group col-md-6">
                    <label for="visitor_in_time">In Time</label>
                    <input type="text" class="form-control" name="visitor_in_time" id="visitor_in_time" placeholder="Visitor In Time">
                    </div>

                    <div class="form-group col-md-6">
                    <label for="visitor_out_time">Out Time</label>
                    <input type="text" class="form-control" name="visitor_out_time" id="visitor_out_time" placeholder="Visitor Out Time">
                    </div>
                    </div>

                

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
      </div>
      </div>
    </div>
</section>
@endsection





