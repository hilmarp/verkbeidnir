<?php

class UserController extends \BaseController {

	public function index() {

		$users = User::all();

		return Response::json($users);
	}

	public function store() {

		User::create([
			'name' => Input::get('name'),
			'email' => Input::get('email'),
			'password' => Hash::make(Input::get('password'))
		]);

		return Response::json([ 'success' => true ]);
	}

}