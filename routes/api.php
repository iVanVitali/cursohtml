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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

//Route::resource('products', 'ProductsController');


// Routes for pruduct resource
Route::post('products','ProductsController@create');
Route::get('products/{id}','ProductsController@show');
Route::put('products/{id}','ProductsController@update');
Route::delete('products/{id}','ProductsController@delete');
Route::get('products','ProductsController@index');