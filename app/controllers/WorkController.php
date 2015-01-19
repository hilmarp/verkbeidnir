<?php

class WorkController extends \BaseController {

	public function index() {

		$works = Work::all();

		return Response::json($works);
	}
}