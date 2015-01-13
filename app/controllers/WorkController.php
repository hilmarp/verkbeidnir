<?php

class WorkController extends \BaseController {

	public function index() {

		return Response::json(['name' => 'Hilmar']);
	}
}