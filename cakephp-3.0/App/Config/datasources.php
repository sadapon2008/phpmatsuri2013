<?php
namespace App\Config;
use Cake\Core\Configure;

Configure::write('Datasource.default', [
	'datasource' => 'Database/Mysql',
	'persistent' => false,
	'host' => 'localhost',
	'login' => 'root',
	'password' => '',
	'database' => 'cake',
]);
