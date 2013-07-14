<?php

class HelloController extends BaseController {

	public function index($name = null)
	{
		return View::make('hello_index', array('name' => $name));
	}

}
