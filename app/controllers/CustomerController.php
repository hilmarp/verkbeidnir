<?php

class CustomerController extends \BaseController {

	public function index() {

		$customers = Customer::all();

		return Response::json($customers);
	}

	public function store() {

		Customer::create([
			'ssn' => Input::get('ssn'),
			'name' => Input::get('name'),
			'address' => Input::get('address'),
			'telephone' => Input::get('telephone'),
			'email' => Input::get('email')
		]);

		return Response::json([ 'success' => true ]);
	}

}