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

		return Response::json($this->json_success);
	}

	public function update($id) {

		$user = User::find($id);

		$user->name = Input::get('name');
		$user->email = Input::get('email');
		$user->password = Hash::make(Input::get('password'));

		$user->save();

		return Response::json(['succes' => true]);
	}

	public function destroy($id) {

		$user = User::find($id);

		$user->delete();

		return Response::json($this->json_success);
	}

}