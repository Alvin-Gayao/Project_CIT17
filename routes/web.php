<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'TemplatesController@index');
Route::get('/templates/adminhome', 'TemplatesController@adminhome');
Route::get('/templates/register', 'TemplatesController@register');
//show
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
Route::get('/productss/create', 'ProductsController@create');
Route::post('/products', 'ProductsController@store');
//update
Route::get('/products/{products}/edit', 'ProductsController@edit');
Route::put('/products/{products}', 'ProductsController@update');
//destroy
Route::delete('/products/{products}', 'ProductsController@destroy');