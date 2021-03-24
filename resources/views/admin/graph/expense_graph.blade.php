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
    width:500px;
    height:350px;
    margin:auto;
    }
</style>



<section  class="content">
<div class="container-fluid mt-3">
    <div class="row justify-content-center">
        <div class="col-12">
            <div id="chart-title">Expense</div>
            <div id="bar-chart"></div>
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

  @foreach($expense_graph as $key=>$val)

    { y: '{{$val->expense_month_year}}', b: {{$val->expense_total}} },

    @endforeach
  ],
  xkey: 'y',
  ykeys: [ 'b'],
  labels: ['Expense'],
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