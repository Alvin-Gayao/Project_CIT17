<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    	return view('welcome');
		});
//authentication
Route::get('/login', 'AuthController@index')->name('login');
Route::post('/login', 'AuthController@login');
Route::get('/register', 'AuthController@register');
Route::post('/register', 'AuthController@store');
Route::get('/signup', 'AuthController@signup');
Route::post('/signup', 'AuthController@store');

Route::middleware(['auth'])->group(function(){
	Route::get('/dashboard', 'TemplatesController@index');
	//suppliers show
	Route::get('/suppliers', 'SuppliersController@index');
	//create
	Route::get('/suppliers/create', 'SuppliersController@create');
	Route::post('/suppliers', 'SuppliersController@store');
	//update
	Route::get('/suppliers/{supplier}/edit', 'SuppliersController@edit');
	Route::put('/suppliers/{supplier}', 'SuppliersController@update');
	//destroy
	Route::delete('/suppliers/{supplier}', 'SuppliersController@destroy');

	//Products//
	Route::get('/products', 'ProductsController@index');
	//create
	Route::get('/products/create', 'ProductsController@create');
	Route::post('/products', 'ProductsController@store');
	//update
	Route::get('/products/{product}/edit', 'ProductsController@edit');
	Route::put('/products/{product}', 'ProductsController@update');
	//destroy
	Route::delete('/products/{product}', 'ProductsController@destroy');

	//Customers
	Route::get('/customers', 'CustomersController@index');
	//create
	Route::get('/customers/create', 'CustomersController@create');
	Route::post('/customers', 'CustomersController@store');
	//update
	Route::get('/customers/{customer}/edit', 'CustomersController@edit');
	Route::put('/customers/{customer}', 'CustomersController@update');
	//destroy
	Route::delete('/customers/{customer}', 'CustomersController@destroy');

	//Sales
	Route::get('/sales', 'SalesController@index');
	//create
	Route::get('/sales/create', 'SalesController@create');
	Route::post('/sales', 'SalesController@store');
	//update
	Route::get('/sales/{sales}/edit', 'SalesController@edit');
	Route::put('/sales/{sales}', 'SalesController@update');
	//destroys
	Route::delete('/sales/{sales}', 'SalesController@destroy');

	//Bookings
	Route::get('/bookings', 'BookingsController@index');
	//create
	Route::get('/bookings/create', 'BookingsController@create');
	Route::post('/bookings', 'BookingsController@store');
	//update
	Route::get('/bookings/{booking}/edit', 'BookingsController@edit');
	Route::put('/bookings/{booking}', 'BookingsController@update');
	//destroy
	Route::delete('/bookings/{booking}', 'BookingsController@destroy');

	//logout
	Route::get('/logout', 'AuthController@logout');
});