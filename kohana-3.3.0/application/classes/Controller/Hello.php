<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Hello extends Controller {

	public function action_index()
	{
$name = $this->request->param('id');
$view = View::factory('hello_index');
$view->set('name', $name);
		$this->response->body($view);
	}

} // End Welcome
