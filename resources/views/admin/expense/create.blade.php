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
                <h3 class="card-title">Add Expense</h3>
              </div>
             </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="post" action="{{url('admin/storeExpense')}}">
              	{{ csrf_field() }}
                <div class="card-body">

                <div class="form-group">
                  <label>Month/Year</label>
                    <div class="input-group date" id="reservationdate" data-target-input="nearest">
                        <input type="text" name="expense_month_year" id="startDate" class="form-control date-picker" data-target="#reservationdate"/>
                        <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                        </div>
                    </div>
                </div>

                  <div class="form-group">
                    <label for="expense_salaries">Salaries</label>
                    <input type="integer" name="expense_salaries" class="form-control my_input" id="expense_salaries" placeholder="Enter Expense Salaries">
                  </div>

                  <div class="form-group">
                    <label for="expense_internet">Internet</label>
                    <input type="integer" name="expense_internet" class="form-control my_input" id="expense_internet" placeholder="Enter Expense Internet">
                  </div>

                  <div class="form-group">
                    <label for="expense_water">Water</label>
                    <input type="integer" name="expense_water" class="form-control my_input" id="expense_water" placeholder="Enter Expense Water">
                  </div>

                  <div class="form-group">
                    <label for="expense_electricity">Electricity</label>
                    <input type="integer" name="expense_electricity" class="form-control my_input" id="expense_electricity" placeholder="Enter Expense Electricity">
                  </div>

                  <div class="form-group">
                    <label for="expense_pantry">Pantry</label>
                    <input type="integer" name="expense_pantry" class="form-control my_input" id="expense_pantry" placeholder="Enter Expense Pantry">
                  </div>

                  <div class="form-group">
                    <label for="expense_kafe">Kafe</label>
                    <input type="integer" name="expense_kafe" class="form-control my_input" id="expense_kafe" placeholder="Enter Expense Kafe">
                  </div>

                  <div class="form-group">
                    <label for="expense_marketing">Marketing</label>
                    <input type="integer" name="expense_marketing" class="form-control my_input" id="expense_marketing" placeholder="Enter Expense Marketing">
                  </div>

                  <div class="form-group">
                    <label for="expense_stationary">Stationary</label>
                    <input type="integer" name="expense_stationary" class="form-control  my_input" id="expense_stationary" placeholder="Enter Expense Stationary">
                  </div>

                  <div class="form-group">
                    <label for="expense_traveling">Traveling</label>
                    <input type="integer" name="expense_traveling" class="form-control my_input" id="expense_traveling" placeholder="Enter Expense Traveling">
                  </div>

                  <div class="form-group">
                    <label for="expense_total">Expense Total</label>
                    <input type="integer" name="expense_total" class="form-control" id="expense_total" placeholder="Enter Expense Total" value="">
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


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript">
    
           $(document).ready(function(){

              $('.my_input').on('keyup', function(){
              var total = 0;
              // on every keyup, loop all the elements and add all the results
              $('.my_input').each(function(index, element) {
              var val = parseFloat($(element).val());
              if( !isNaN( val )){
              total = total + val;
              }
              });
              $('#expense_total').val(total);
              });

           }); 
     
</script>
@endsection