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
