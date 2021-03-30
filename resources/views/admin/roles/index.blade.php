@extends('admin.layouts.master')


@section('content')

    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">

    <style type="text/css">
    @import url(https://fonts.googleapis.com/css?family=Open+Sans);

    #bar-chart *{
    font-family:open sans;
    }

    #chart-title{
    width:100%;
    text-align:center;
    font-size:18px;
    font-family:open sans;
    }

    #bar-chart{
    width:100%;
    height:350px;
    margin:auto;
    }
</style>



<section  class="content">
    <div class="card card-primary">
    <div class="card-header">
    <h3 class="card-title">View Roles</h3>
    </div>
    </div>

</section>


   <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Id</th>
                    <th>Roles</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                    @foreach($viewRoles as $key=>$roles)
                  <tr>
                    <td>{{$key+1}}</td>
                    <td>{{$roles->role}}</td>
                    <td>
                      <a href="{{url('admin/editRole', $roles->id)}}" class="btn btn-sm btn-primary">Edit</a>
                      <a href="{{url('admin/deleteRole', $roles->id)}}" class="btn btn-sm btn-danger">Delete</a>
                      <a href="{{url('admin/showRole', $roles->id)}}" class="btn btn-sm btn-secondary">View</a>
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