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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();


Route::get('/', 'HomeController@index')->name('home');
Route::get('logout', 'Auth\LoginController@logout');


Route::group(['middleware' => ['auth']], function() {
	Route::get('dashboard', 'HomeController@dashboard')->name('dashboard');

    Route::resource('roles','RoleController');

    Route::resource('users','UserController');

    Route::resource('tickets','TicketController');

    Route::resource('accounts','AccountController');

    Route::resource('comissions','ComissionController');

    Route::resource('customers','CustomerController');

    Route::resource('expenses','ExpenseController');

    Route::resource('invoices','InvoiceController');

    Route::resource('leads','LeadController');

    Route::resource('orders','OrderController');

    Route::resource('proposals','ProposalController');

    Route::resource('tasks','TaskController');

    Route::resource('projects','ProjectController');

    Route::resource('products','ProductController');
    Route::resource('messages','MessageController');

});