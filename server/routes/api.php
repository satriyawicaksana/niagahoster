<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('price/', 'PriceController@index');
Route::get('price/{id}', 'PriceController@show');
Route::post('price/', 'PriceController@store');
Route::put('price/{id}', 'PriceController@update');
Route::delete('price/{id}', 'PriceController@delete');