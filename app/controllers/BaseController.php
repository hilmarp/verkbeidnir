<?php

class BaseController extends Controller {

	// Skilaboð þegar JSON er success
	protected $json_success = [
		'status' => 'success',
		'message' => null
	];

	// Skilaboð við JSON error
	protected $json_error = [
		'status' => 'error',
		'message' => 'Error has occurred'
	];

	public function __construct() {

		View::share('json_success', $this->json_success);
	}

	/**
	 * Setup the layout used by the controller.
	 *
	 * @return void
	 */
	protected function setupLayout()
	{
		if ( ! is_null($this->layout))
		{
			$this->layout = View::make($this->layout);
		}
	}

}
