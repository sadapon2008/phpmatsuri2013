<?php
/**
 * Short description for file.
 *
 * PHP 5
 *
 * CakePHP(tm) Tests <http://book.cakephp.org/2.0/en/development/testing.html>
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://book.cakephp.org/2.0/en/development/testing.html CakePHP(tm) Tests
 * @package       Cake.Test.Fixture
 * @since         CakePHP(tm) v 1.2.0.4667
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
namespace Cake\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * Short description for class.
 *
 * @package       Cake.Test.Fixture
 */
class CounterCacheUserFixture extends TestFixture {

	public $fields = array(
		'id' => ['type' => 'integer'],
		'name' => ['type' => 'string', 'length' => 255, 'null' => false],
		'post_count' => ['type' => 'integer', 'null' => true],
		'posts_published' => ['type' => 'integer', 'null' => true],
		'_constraints' => ['primary' => ['type' => 'primary', 'columns' => ['id']]]
	);

	public $records = array(
		array('id' => 66, 'name' => 'Alexander', 'post_count' => 2, 'posts_published' => 1),
		array('id' => 301, 'name' => 'Steven', 'post_count' => 1, 'posts_published' => 1),
	);
}
