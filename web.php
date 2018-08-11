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

// Front
Route::get('/', ['as' => '/', 'uses' => 'FrontController@index']);

Route::get('productodetalle/{url}', ['as' => 'productodetalle', 'uses' => 'FrontController@productodetalle']);
