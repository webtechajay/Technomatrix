<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Auth::routes();

Route::get('error','HomeController@error');

Route::get('/home', 'HomeController@index')->name('home');

//Frontend
// =================================

Route::get('/','IndexController@index');

Route::post('store_contact','IndexController@store');



//Backend
// ====================================

Route::group(['middleware'=>['is_admin']], function(){

// Admin

Route::get('admin/dashboard', 'AdminController@index');
Route::get('/graph_revenue_expense', 'AdminController@graphRevenuExpenseIndex');
Route::get('/graph_expense', 'AdminController@graphExpense');
Route::get('/graph_revenue', 'AdminController@graphRevenue');


// Revenue Model

Route::get('admin/viewRevenue', 'RevenueController@index');
Route::get('admin/addRevenue', 'RevenueController@create');
Route::post('admin/storeRevenue', 'RevenueController@store');
Route::get('admin/editRevenue/{revenue}', 'RevenueController@edit');
Route::post('admin/updateRevenue/{revenue}', 'RevenueController@update');
Route::get('admin/destroyRevenue/{revenue}', 'RevenueController@destroy');
Route::get('admin/showRevenue/{revenue}', 'RevenueController@show');


// Expense Model 

Route::get('admin/viewExpense', 'ExpenseController@index');
Route::get('admin/addExpense', 'ExpenseController@create');
Route::post('admin/storeExpense', 'ExpenseController@store');
Route::get('admin/editExpense/{expense}', 'ExpenseController@edit');
Route::post('admin/updateExpense/{expense}', 'ExpenseController@update');
Route::get('admin/destroyExpense/{expense}', 'ExpenseController@destroy');
Route::get('admin/showExpense/{expense}', 'ExpenseController@show');


//Company Model

Route::get('admin/viewCompany', 'CompanyController@index');
Route::get('admin/addCompany', 'CompanyController@create');
Route::post('admin/storeCompany', 'CompanyController@store');
Route::get('admin/editCompany/{company}', 'CompanyController@edit');
Route::post('admin/updateCompany/{company}', 'CompanyController@update');
Route::post('admin/updateCompany/{company}', 'CompanyController@update');
Route::get('admin/destroyCompany/{company}', 'CompanyController@destroy');
Route::get('admin/showCompany/{company}', 'CompanyController@show');


// Members Model

Route::get('admin/viewMembers', 'MembersController@index');
Route::get('admin/createMembers', 'MembersController@create');
Route::post('admin/storeMembers', 'MembersController@store');
Route::get('admin/editMembers/{member}', 'MembersController@edit');
Route::post('admin/updateMembers/{member}', 'MembersController@update');
Route::get('admin/destroyMembers/{member}', 'MembersController@destroy');
Route::get('admin/showMembers/{member}', 'MembersController@show');



// Visitor Model

Route::get('admin/viewVisitor', 'VisitorController@index');
Route::get('admin/createVisitor', 'VisitorController@create');
Route::post('admin/storeVisitor', 'VisitorController@store');
Route::get('admin/editVisitor/{visitor}', 'VisitorController@edit');
Route::post('admin/updateVisitor/{visitor}', 'VisitorController@update');
Route::get('admin/destroyVisitor/{visitor}', 'VisitorController@destroy');
Route::get('admin/showVisitor/{visitor}', 'VisitorController@show');

});

