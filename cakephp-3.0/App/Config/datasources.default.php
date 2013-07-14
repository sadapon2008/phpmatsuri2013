<?php
/**
 * This is core configuration file.
 *
 * Use it to configure core behaviour of Cake.
 *
 * PHP 5
 *
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Config
 * @since         CakePHP(tm) v 0.2.9
 */

/**
 * Database configuration class.
 * You can specify multiple configurations for production, development and testing.
 *
 * datasource => The name of a supported datasource; valid options are as follows:
 *
 *  Cake\Datasource\Driver\Mysql      - MySQL 4 & 5,
 *  Cake\Datasource\Driver\Sqlite     - SQLite (PHP5 only),
 *  Cake\Datasource\Driver\Postgres   - PostgreSQL 7 and higher,
 *  Cake\Datasource\Driver\Sqlserver  - Microsoft SQL Server 2005 and higher
 *
 * You can add custom database datasources (or override existing datasources) by adding the
 * appropriate file to app/Model/Datasource/Database. Datasources should be named 'MyDatasource.php',
 *
 * persistent => true / false
 * Determines whether or not the database should use a persistent connection
 *
 * host =>
 * the host you connect to the database. To add a socket or port number, use 'port' => #
 *
 * prefix =>
 * Uses the given prefix for all the tables in this database. This setting can be overridden
 * on a per-table basis with the Model::$tablePrefix property.
 *
 * schema =>
 * For Postgres/Sqlserver specifies which schema you would like to use the tables in. Postgres defaults to 'public'. For Sqlserver, it defaults to empty and use
 * the connected user's default schema (typically 'dbo').
 *
 * encoding =>
 * For MySQL, Postgres specifies the character encoding to use when connecting to the
 * database. Uses database default not specified.
 *
 * unix_socket =>
 * For MySQL to connect via socket specify the `unix_socket` parameter instead of `host` and `port`
 */

/**
 * Create the default connection, this is the conventional default connection used
 * by all models.
 */
Configure::write('Datasource.default', [
	'datasource' => 'Cake\Datasource\Driver\Mysql',
	'persistent' => false,
	'host' => 'localhost',
	'login' => 'user',
	'password' => 'password',
	'database' => 'database_name',
	'prefix' => '',
	//'encoding' => 'utf8',
]);

/**
 * Create a test connection.  This connection is used
 * while running unit and integration tests.
 */
Configure::write('Datasource.test', [
	'datasource' => 'Cake\Datasource\Driver\Mysql',
	'persistent' => false,
	'host' => 'localhost',
	'login' => 'user',
	'password' => 'password',
	'database' => 'test_database_name',
	'prefix' => '',
	//'encoding' => 'utf8',
]);
