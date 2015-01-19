<?php

// API Routes
Route::group(['prefix' => 'api'], function() {

	// Users
	Route::get('users', 'UserController@index');
	Route::post('users', 'UserController@store');

	// Customers
	Route::get('customers', 'CustomerController@index');
	Route::post('customers', 'CustomerController@store');

	// Works
	Route::get('works', 'WorkController@index');

});