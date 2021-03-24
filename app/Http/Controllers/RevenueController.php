<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\RevenueMaster;
use DB;

class RevenueController extends Controller
{

     public function __construct()
    {

        $this->middleware('auth');
    }

	public function index()
	{
		$viewRevenue = RevenueMaster::all();
        $revenue_graph = DB::select("select month_year,invoice_amount from revenue_masters");
		return view('admin.revenue.index')->with(compact('viewRevenue','revenue_graph'));
	}
    public function create()
    {   
        $companies = DB::select("select company_name,id from companies");
        // dd($companies);
    	return view('admin.revenue.create')->with(compact('companies'));
    }


    public function store(Request $request)
    {
    	$storeRevenue = new RevenueMaster();
    	$storeRevenue->name = $request->name;
    	$storeRevenue->month_year = $request->month_year;
    	$storeRevenue->invoice_amount = $request->invoice_amount;
    	$storeRevenue->revenue_amount = $request->revenue_amount;
    	$storeRevenue->gst = $request->gst;
    	$storeRevenue->save();

    	return redirect('admin/viewRevenue');
    }

    public function edit($revenue)
    {   
        $companies = DB::select("select company_name,id from companies");
    	$editRevenue = RevenueMaster::find($revenue);
    	return view('admin.revenue.edit')->with(compact('editRevenue', 'companies'));
    }


    public function update(Request $request, $revenue)
    {
    	$updateRevenue = RevenueMaster::find($revenue);
    	$updateRevenue->name = $request->name;
    	$updateRevenue->month_year = $request->month_year;
    	$updateRevenue->invoice_amount = $request->invoice_amount;
    	$updateRevenue->revenue_amount = $request->revenue_amount;
    	$updateRevenue->gst = $request->gst;
    	$updateRevenue->save();

    	return redirect('admin/viewRevenue');
    }

    public function destroy($revenue)
    {
    	$destroyRevenue = RevenueMaster::find($revenue);
    	$destroyRevenue->delete();
    	return redirect('admin/viewRevenue');
    }

    public function show($revenue)
    {   
        $showRevenue = RevenueMaster::find($revenue);
        $companies = DB::select("select company_name,id from companies");
        return view('admin.revenue.show')->with(compact('showRevenue', 'companies'));
    }
}
