<?php

class Customer extends \Eloquent {
	
	protected $fillable = [];

	// Validation rules
	public static $rules = [
		// 'title' => 'required'
	];

	public function works() {
		return $this->hasMany('Work');
	}
}