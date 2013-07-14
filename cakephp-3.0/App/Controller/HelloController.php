<?php
namespace App\Controller;

use Cake\Core\Configure;
use Cake\Error;
use Cake\Utility\Inflector;

class HelloController extends AppController {

	public $uses = array();

	public function index($name = null) {
$this->set('name', $name);
	}
}
