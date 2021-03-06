<?php
/**
 * Lithium: the most rad php framework
 *
 * @copyright     Copyright 2013, Union of RAD (http://union-of-rad.org)
 * @license       http://opensource.org/licenses/bsd-license.php The BSD License
 */

namespace app\controllers;

class HelloController extends \lithium\action\Controller {

	public function index($name = null) {
		return $this->render(array('data' => array('name' => $name)));
	}
}

?>
