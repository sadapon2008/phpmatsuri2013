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
class ArticlesTagFixture extends TestFixture {

/**
 * fields property
 *
 * @var array
 */
	public $fields = array(
		'article_id' => ['type' => 'integer', 'null' => false],
		'tag_id' => ['type' => 'integer', 'null' => false],
		'_constraints' => ['UNIQUE_TAG2' => ['type' => 'unique', 'columns' => ['article_id', 'tag_id']]]
	);

/**
 * records property
 *
 * @var array
 */
	public $records = array(
		array('article_id' => 1, 'tag_id' => 1),
		array('article_id' => 1, 'tag_id' => 2),
		array('article_id' => 2, 'tag_id' => 1),
		array('article_id' => 2, 'tag_id' => 3)
	);
}
