@extends('admin.layouts.master')


@section('content')

  <section class="content">

    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
        <div class="card card-primary">
        <div class="card-header">
                <h3 class="card-title">View Visitor</h3>
              </div>
             </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Id</th>
                    <th>visitor Name</th>
                    <th>visitor Email</th>
                    <th>visitor Contact</th>
                    <th>visitor Whoom To Meet</th>
                    <th>visitor Address</th>
                    <th>visitor In Time</th>
                    <th>visitor Out Time</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                    @foreach($viewVisitor as $key=>$visitor)
                  <tr>
                    <td>{{$key+1}}</td>
                    <td>{{$visitor->visitor_name}}</td>
                    <td>{{$visitor->visitor_email}}</td>
                    <td>{{$visitor->visitor_contact}}</td>
                    <td>{{$visitor->visitor_whoom_to_meet}}</td>
                    <td>{{$visitor->visitor_address}}</td>
                    <td>{{$visitor->visitor_in_time}}</td>
                    <td>{{$visitor->visitor_out_time}}</td>
                    <td>
                      <a href="{{url('admin/editVisitor', $visitor->id)}}"><i class="fa fa-edit"></i></a>
                      <a href="{{url('admin/destroyVisitor', $visitor->id)}}"><i class="fa fa-trash"></i></a>
                      <a href="{{url('admin/showVisitor', $visitor->id)}}"><i class="fa fa-eye"></i></a>
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