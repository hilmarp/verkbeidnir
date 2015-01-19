<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;

	protected $fillable = ['name', 'email', 'password'];

	protected $hidden = array('password', 'remember_token');

	// Validation rules
	public static $rules = [
		'name' => 'required',
		'email' => 'required',
		'password' => 'required|confirmed',
		'password_confirmation' => 'required'
	];

}
