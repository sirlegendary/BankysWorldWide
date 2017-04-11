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


Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

Route::get('/customer', 'CustomerController@index')->name('customer');

Route::get('/addNewCustomer', 'CustomerController@addCustomer')->name('addNewCustomer');

Route::post('/addNewCustForm', 'CustomerController@addNewCustForm')->name('addNewCustForm');

Route::get('/customer/{id}', 'CustomerController@showCustomer')->name('showCustomer');

Route::get('/customer/edit/{id}', 'CustomerController@edit');

Route::post('/customer/update', 'CustomerController@update')->name('update');

Route::get('/ajaxsearch', 'CustomerController@ajaxsearch');

Route::post('/customer/addNewBeneficiary', 'BeneficiaryController@addNew')->name('addNewBeneficiary');

Route::get('/customer/addTransaction/{id}', 'BeneficiaryController@showNewTransactionForm')->name('addTransaction');

Route::post('/customer/saveNewTransaction', 'BeneficiaryController@saveNewTransaction')->name('saveNewTransaction');


