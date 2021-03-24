@extends('admin.layouts.master')


@section('content')

<section class="content">


    <div class="container-fluid">
    	<div class="row">
    	<div class="col-md-12">
    		<div class="card card-primary">
    		<div class="card-header">
                <h3 class="card-title">Edit Revenue</h3>
              </div>
             </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="post" action="{{url('admin/updateRevenue', $editRevenue->id)}}">
              	{{ csrf_field() }}
                <div class="card-body">

                <div class="form-group">
                        <label>Company</label>
                        <select class="form-control" name="name">
                          <option>-----Select-----</option>
                          @foreach($companies as $company)
                          <option value="{{$company->id}}" {{ ( $editRevenue->name == $company->id ) ? ' selected' : '' }}>{{$company->company_name}}</option>
                          @endforeach
                        </select>
                </div>

                <div class="form-group">
                  <label>Date</label>
                    <div class="input-group date" id="reservationdate" data-target-input="nearest">
                        <input type="text" name="month_year" value="{{$editRevenue->month_year}}" class="form-control datetimepicker-input" data-target="#reservationdate"/>
                        <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                        </div>
                    </div>
                </div>

                  <div class="form-group">
                    <label for="invoice_amount">Invoice Amount</label>
                    <input type="text" name="invoice_amount" class="form-control" id="invoice_amount" placeholder="Enter Invoice Amount" value="{{$editRevenue->invoice_amount}}">
                  </div>
                  <div class="form-group">
                    <label for="revenue_amount">Revenue Amount</label>
                    <input type="text" name="revenue_amount" value="{{$editRevenue->revenue_amount}}" class="form-control" id="revenue_amount" placeholder="Enter Revenue Amount">
                  </div>
                  <div class="form-group">
                    <label for="gst">GST</label>
                    <input type="text" name="gst" value="{{$editRevenue->gst}}" class="form-control" id="gst" placeholder="Enter GST">
                  </div>
                  <!-- <div class="form-group">
                    <label for="exampleInputFile">File input</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text">Upload</span>
                      </div>
                    </div>
                  </div> -->
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
@endsection





