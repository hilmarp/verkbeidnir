<?php

class Work extends \Eloquent {
	
	protected $fillable = [];

	// Validation rules
	public static $rules = [
		// 'title' => 'required'
	];

	public function customer() {
		return $this->belongsTo('Customer');
	}
}