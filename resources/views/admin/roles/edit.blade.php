@extends('admin.layouts.master')


@section('content')

  <section class="content">

    <div class="container-fluid">
      <div class="row">
      <div class="col-md-12">
        <div class="card card-primary">
        <div class="card-header">
                <h3 class="card-title">Edit Roles</h3>
              </div>
             </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="post" action="{{url('admin/updateRole', $editRoles->id)}}" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="card-body">

              

                  <div class="form-group">
                    <label for="role">Role</label>
                    <input type="text" name="role" value="{{$editRoles->role}}" class="form-control" id="role" placeholder="Enter Role">
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
@endsection





