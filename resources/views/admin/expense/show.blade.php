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
                <h3 class="card-title">Show Expense</h3>
              </div>
             </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="post" action="">
                {{ csrf_field() }}
                <div class="card-body">

                <div class="form-group">
                  <label>Month/Year</label>
                    <div class="input-group date" id="reservationdate" data-target-input="nearest">
                        <input type="text" name="expense_month_year" value="{{$showExpense->expense_month_year}}" class="form-control" data-target="#reservationdate"/ readonly="">
                        <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                        </div>
                    </div>
                </div>

                  <div class="form-group">
                    <label for="expense_salaries">Salaries</label>
                    <input type="integer" name="expense_salaries" value="{{$showExpense->expense_salaries}}" class="form-control" id="expense_salaries" placeholder="Enter Expense Salaries" readonly="">
                  </div>

                  <div class="form-group">
                    <label for="expense_internet">Internet</label>
                    <input type="integer" name="expense_internet" value="{{$showExpense->expense_internet}}" class="form-control" id="expense_internet" placeholder="Enter Expense Internet" readonly="">
                  </div>

                  <div class="form-group">
                    <label for="expense_water">Water</label>
                    <input type="integer" name="expense_water" value="{{$showExpense->expense_water}}" class="form-control" id="expense_water" placeholder="Enter Expense Water" readonly="">
                  </div>

                  <div class="form-group">
                    <label for="expense_electricity">Electricity</label>
                    <input type="integer" name="expense_electricity" value="{{$showExpense->expense_electricity}}" class="form-control" id="expense_electricity" placeholder="Enter Expense Electricity" readonly="">
                  </div>

                  <div class="form-group">
                    <label for="expense_pantry">Pantry</label>
                    <input type="integer" name="expense_pantry" value="{{$showExpense->expense_pantry}}" class="form-control" id="expense_pantry" placeholder="Enter Expense Pantry" readonly="">
                  </div>

                  <div class="form-group">
                    <label for="expense_kafe">Kafe</label>
                    <input type="integer" name="expense_kafe" value="{{$showExpense->expense_kafe}}" class="form-control" id="expense_kafe" placeholder="Enter Expense Kafe" readonly="">
                  </div>

                  <div class="form-group">
                    <label for="expense_marketing">Marketing</label>
                    <input type="integer" name="expense_marketing" value="{{$showExpense->expense_marketing}}" class="form-control" id="expense_marketing" placeholder="Enter Expense Marketing" readonly="">
                  </div>

                  <div class="form-group">
                    <label for="expense_stationary">Stationary</label>
                    <input type="integer" name="expense_stationary" value="{{$showExpense->expense_stationary}}" class="form-control" id="expense_stationary" placeholder="Enter Expense Stationary" readonly="">
                  </div>

                  <div class="form-group">
                    <label for="expense_traveling">Traveling</label>
                    <input type="integer" name="expense_traveling" value="{{$showExpense->expense_traveling}}" class="form-control" id="expense_traveling" placeholder="Enter Expense Traveling" readonly="">
                  </div>

                  <!-- <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                  </div> -->

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