<?php

Route::group(['prefix' => 'api'], function() {

	Route::get('works', 'WorkController@index');

});