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
                <h3 class="card-title">Edit Expense</h3>
              </div>
             </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="post" action="{{url('admin/updateExpense', $editExpense->id)}}">
                {{ csrf_field() }}
                <div class="card-body">

                <div class="form-group">
                  <label>Month/Year</label>
                    <div class="input-group date" id="reservationdate" data-target-input="nearest">
                        <input type="text" name="expense_month_year" value="{{$editExpense->expense_month_year}}" id="startDate" class="form-control date-picker" data-target="#reservationdate"/>
                        <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                        </div>
                    </div>
                </div>

                  <div class="form-group">
                    <label for="expense_salaries">Salaries</label>
                    <input type="integer" name="expense_salaries" value="{{$editExpense->expense_salaries}}" class="form-control" id="expense_salaries" placeholder="Enter Expense Salaries">
                  </div>

                  <div class="form-group">
                    <label for="expense_internet">Internet</label>
                    <input type="integer" name="expense_internet" value="{{$editExpense->expense_internet}}" class="form-control" id="expense_internet" placeholder="Enter Expense Internet">
                  </div>

                  <div class="form-group">
                    <label for="expense_water">Water</label>
                    <input type="integer" name="expense_water" value="{{$editExpense->expense_water}}" class="form-control" id="expense_water" placeholder="Enter Expense Water">
                  </div>

                  <div class="form-group">
                    <label for="expense_electricity">Electricity</label>
                    <input type="integer" name="expense_electricity" value="{{$editExpense->expense_electricity}}" class="form-control" id="expense_electricity" placeholder="Enter Expense Electricity">
                  </div>

                  <div class="form-group">
                    <label for="expense_pantry">Pantry</label>
                    <input type="integer" name="expense_pantry" value="{{$editExpense->expense_pantry}}" class="form-control" id="expense_pantry" placeholder="Enter Expense Pantry">
                  </div>

                  <div class="form-group">
                    <label for="expense_kafe">Kafe</label>
                    <input type="integer" name="expense_kafe" value="{{$editExpense->expense_kafe}}" class="form-control" id="expense_kafe" placeholder="Enter Expense Kafe">
                  </div>

                  <div class="form-group">
                    <label for="expense_marketing">Marketing</label>
                    <input type="integer" name="expense_marketing" value="{{$editExpense->expense_marketing}}" class="form-control" id="expense_marketing" placeholder="Enter Expense Marketing">
                  </div>

                  <div class="form-group">
                    <label for="expense_stationary">Stationary</label>
                    <input type="integer" name="expense_stationary" value="{{$editExpense->expense_stationary}}" class="form-control" id="expense_stationary" placeholder="Enter Expense Stationary">
                  </div>

                  <div class="form-group">
                    <label for="expense_traveling">Traveling</label>
                    <input type="integer" name="expense_traveling" value="{{$editExpense->expense_traveling}}" class="form-control" id="expense_traveling" placeholder="Enter Expense Traveling">
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
@endsection