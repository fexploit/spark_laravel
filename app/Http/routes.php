<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Route::get('/', function () {
    return view('spark::welcome');
});

Route::get('/home', function () {
    return view('spark::welcome');
});

Route::get('/customers/add', 'CustomerController@add');
Route::get('/customers/show', 'CustomerController@show');
Route::get('/customers/{customer}/edit', 'CustomerController@edit');
Route::get('/customers/{customer}/delete', 'CustomerController@delete');

Route::post('/customers/store', 'CustomerController@store');

Route::patch('/customers/{customer}', 'CustomerController@update');

