<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;


class AdminController extends Controller
{
     public function __construct()
    {

        $this->middleware('auth');
    }
    
    public function index()
    {
    	return view('admin.layouts.index');
    }

    public function graphRevenuExpenseIndex()
    {

		$revenue_expense_graph = DB::select("SELECT revenue_amount,expense_total ,expense_month_year FROM Tecnomatrix.revenue_masters
			left join expenses
			on revenue_masters.month_year = expenses.expense_month_year;");
		// dd($revenue_expense_graph);
		$a =[];
		foreach ($revenue_expense_graph as $key => $value) {
				if ($value->expense_total == null) {
					$value->expense_total = 0;
					$a[] = $value;
				}
			
		}

		// dd($a);


    	return view('admin.graph.graph_revenue_expense',compact('revenue_expense_graph'));
    }

    public function graphExpense()
    {	
    	$expense_graph = DB::select("select expense_month_year,expense_total from expenses");
    	return view('admin.graph.expense_graph', compact('expense_graph'));
    }

    public function graphRevenue()
    {
    	$revenue_graph = DB::select("select month_year,invoice_amount from revenue_masters");
    	return view('admin.graph.revenue_graph', compact('revenue_graph'));
    }
}
