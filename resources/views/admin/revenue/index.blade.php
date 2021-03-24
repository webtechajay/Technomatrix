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
<h3 class="card-title">View Revenue</h3>
</div>
</div>

<div class="container-fluid mt-3">
    <div class="row justify-content-center">
        <div class="col-12">
            <!-- <div id="chart-title">Revenue</div> -->
            <div id="bar-chart"></div>
        </div>
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
                    <th>Company Id</th>
                    <th>Date</th>
                    <th>Invoice Amount</th>
                    <th>Revenue Amount</th>
                    <th>GST</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                    @foreach($viewRevenue as $key=>$revenue)
                  <tr>
                    <td>{{$key+1}}</td>
                    <td>{{$revenue->name}}</td>
                    <td>{{$revenue->month_year}}</td>
                    <td>{{$revenue->invoice_amount}}</td>
                    <td>{{$revenue->revenue_amount}}</td>
                    <td>{{$revenue->gst}}</td>
                    <td>
                      <a href="{{url('admin/editRevenue', $revenue->id)}}" class="btn btn-sm btn-primary">Edit</a>
                      <a href="{{url('admin/destroyRevenue', $revenue->id)}}" class="btn btn-sm btn-danger">Delete</a>
                      <a href="{{url('admin/showRevenue', $revenue->id)}}" class="btn btn-sm btn-secondary">View</a>
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


    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.3.0/raphael.min.js"></script>

<script type="text/javascript">
    Morris.Bar({
  element: 'bar-chart',

  data: [

  @foreach($revenue_graph as $key=>$val)

    { y: '{{$val->month_year}}', a: {{$val->invoice_amount}} },

    @endforeach
  ],
  xkey: 'y',
  ykeys: [ 'a'],
  labels: ['Revenue'],
  gridTextSize: 9,
  resize: true,
  xLabelAngle:60,
  barColors: function(row, series, type){
    if(series.key == 'a'){
      if(row.y > 4){
        return "#d22d2d";
      }else{
        return "#0b62a4"
      }
    }else{
      return "#7a92a3"
    }
  },
  hideHover: true
});
</script>

@endsection