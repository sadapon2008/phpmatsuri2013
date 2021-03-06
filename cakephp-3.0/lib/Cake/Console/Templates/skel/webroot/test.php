<?php
/**
 * Web Access Frontend for TestSuite
 *
 * PHP 5
 *
 * @link          http://book.cakephp.org/2.0/en/development/testing.html
 * @package       app.webroot
 * @since         CakePHP(tm) v 1.2.0.4433
 */

set_time_limit(0);
ini_set('display_errors', 1);

require dirname(__DIR__) . '/Config/bootstrap.php';

use Cake\Core\Configure;
use Cake\TestSuite\TestSuiteDispatcher;

if (Configure::read('debug') < 1) {
	throw new NotFoundException(__d('cake_dev', 'Debug setting does not allow access to this url.'));
}

TestSuiteDispatcher::run();
