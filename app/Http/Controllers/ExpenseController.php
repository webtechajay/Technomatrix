<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Expense;
use DB;

class ExpenseController extends Controller
{

     public function __construct()
    {

        $this->middleware('auth');
    }

	public function index()
	{
		$viewExpense = Expense::all();
        $expense_graph = DB::select("select expense_month_year,expense_total from expenses");
		return view('admin.expense.index')->with(compact('viewExpense','expense_graph'));
	}

    public function create()
    {
    	return view('admin.expense.create');
    }


    public function store(Request $request)
    {
    	$storeExpense = new Expense();
    	$storeExpense->expense_month_year = $request->expense_month_year;
    	$storeExpense->expense_salaries = $request->expense_salaries;
    	$storeExpense->expense_internet = $request->expense_internet;
    	$storeExpense->expense_water = $request->expense_water;
    	$storeExpense->expense_electricity = $request->expense_electricity;
    	$storeExpense->expense_pantry = $request->expense_pantry;
    	$storeExpense->expense_kafe = $request->expense_kafe;
    	$storeExpense->expense_marketing = $request->expense_marketing;
    	$storeExpense->expense_stationary = $request->expense_stationary;
    	$storeExpense->expense_traveling = $request->expense_traveling;
        $storeExpense->expense_total = $request->expense_total;
    	$storeExpense->save();

    	return redirect('/admin/viewExpense');
    }

    public function edit($expense)
    {
    	$editExpense = Expense::find($expense);
    	return view('admin.expense.edit')->with(compact('editExpense'));
    }

    public function update(Request $request, $expense)
    {
    	$updateExpense = Expense::find($expense);
    	$updateExpense->expense_month_year = $request->expense_month_year;
    	$updateExpense->expense_salaries = $request->expense_salaries;
    	$updateExpense->expense_internet = $request->expense_internet;
    	$updateExpense->expense_water = $request->expense_water;
    	$updateExpense->expense_electricity = $request->expense_electricity;
    	$updateExpense->expense_pantry = $request->expense_pantry;
    	$updateExpense->expense_kafe = $request->expense_kafe;
    	$updateExpense->expense_marketing = $request->expense_marketing;
    	$updateExpense->expense_stationary = $request->expense_stationary;
    	$updateExpense->expense_traveling = $request->expense_traveling;
    	$updateExpense->save();

    	return redirect('admin/viewExpense');
    }

    public function destroy($expense)
    {
    	$destroyExpense = Expense::find($expense);
    	$destroyExpense->delete();
    	return redirect('admin/viewExpense');
    }

    public function show($expense)
    {
    	$showExpense = Expense::find($expense);
    	return view('admin.expense.show')->with(compact('showExpense'));
    }
}
