<?php

class Customer extends \Eloquent {
	
	protected $fillable = ['ssn', 'name', 'address', 'telephone', 'email'];

	// Validation rules
	public static $rules = [
		'ssn' => '',
		'name' => 'required',
		'address' => '',
		'telephone' => 'required',
		'email' => ''
	];

	public function works() {
		return $this->hasMany('Work');
	}
}