<?php

class Work extends \Eloquent {
	
	protected $fillable = ['customer_id', 'status_id', 'type', 'description', 'password', 'solution', 'price'];

	// Validation rules
	public static $rules = [
		'customer_id' => 'required',
		'status_id' => 'required',
		'type' => 'required',
		'description' => 'required',
		'password' => '',
		'solution' => '',
		'price' => ''
	];

	public function customer() {
		return $this->belongsTo('Customer');
	}

	public function status() {
		return $this->belongsTo('Status');
	}
}