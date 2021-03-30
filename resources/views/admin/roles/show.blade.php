@extends('admin.layouts.master')


@section('content')

  <section class="content">

    <div class="container-fluid">
      <div class="row">
      <div class="col-md-12">
        <div class="card card-primary">
        <div class="card-header">
                <h3 class="card-title">Show Roles</h3>
              </div>
             </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="post" action="" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="card-body">

              

                  <div class="form-group">
                    <label for="role">Role</label>
                    <input type="text" name="role" value="{{$showRoles->role}}" class="form-control" id="role" placeholder="Enter Role" readonly="">
                  </div>
                <!-- /.card-body -->

                <!-- <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div> -->

              </form>
      </div>
      </div>
    </div>
</section>
@endsection





