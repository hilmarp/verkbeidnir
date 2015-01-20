<?php

// API Routes
Route::group(['prefix' => 'api'], function() {

	// Users
	Route::get('users', 'UserController@index');
	Route::post('users', 'UserController@store');
	Route::put('users/{id}', 'UserController@update');
	Route::delete('users/{id}', 'UserController@destroy');

	// Customers
	Route::get('customers', 'CustomerController@index');
	Route::post('customers', 'CustomerController@store');

	// Works
	Route::get('works', 'WorkController@index');

});