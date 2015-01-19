<?php

class Status extends \Eloquent {

	protected $table = 'status';
	
	protected $fillable = ['status'];

	// Validation rules
	public static $rules = [
		'status' => ''
	];

	public $timestamps = false;

	public function works() {
		return $this->hasMany('Work');
	}
}