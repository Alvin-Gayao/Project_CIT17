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

Route::get('/templates', 'TemplatesController@index');
Route::get('/templates/adminhome', 'TemplatesController@adminhome');
Route::get('/templates/register', 'TemplatesController@register');
//items_sold table
Route::get('/items_sold', 'ItemsSoldController@index');
Route::get('/items_sold/create', 'ItemsSoldController@create');
Route::post('/items_sold', 'ItemsSoldController@store');
Route::get('/items_sold/{items_sold}/edit', 'ItemsSoldController@edit');
Route::put('/items_sold/{items_sold}', 'ItemsSoldController@update');
Route::delete('/items_sold/{items_sold}', 'ItemsSoldController@destroy');