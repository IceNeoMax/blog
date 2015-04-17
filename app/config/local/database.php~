<?php

return array(

	/*
	|--------------------------------------------------------------------------
	| Database Connections
	|--------------------------------------------------------------------------
	|
	| Here are each of the database connections setup for your application.
	| Of course, examples of configuring each database platform that is
	| supported by Laravel is shown below to make development simple.
	|
	|
	| All database work in Laravel is done through the PHP PDO facilities
	| so make sure you have the driver for your particular database of
	| choice installed on your machine before you begin development.
	|
	*/

	'connections' => array(

		'mysql' => array(
			'driver'    => 'mysql',
			'host'      => getenv('OPENSHIFT_MYSQL_DB_HOST')==''?'localhost':getenv('OPENSHIFT_MYSQL_DB_HOST'),
			'database'  => 'meduza',
			'username'  => getenv('OPENSHIFT_MYSQL_DB_USERNAME')==''?'admin':getenv('OPENSHIFT_MYSQL_DB_USERNAME'),
			'password'  => getenv('OPENSHIFT_MYSQL_DB_PASSWORD')==''?'admin':getenv('OPENSHIFT_MYSQL_DB_PASSWORD'),
			'charset'   => 'utf8',
			'collation' => 'utf8_unicode_ci',
			'prefix'    => '',
		),
		'mongodb'=>array(
			'driver'   => 'mongodb',
			'host'     => 'ds059661.mongolab.com',
           		'port'     =>  59661,
            		'username' => 'admin',
            		'password' => 'admin',
            		'database' => 'medusa'
		),
		'pgsql' => array(
			'driver'   => 'pgsql',
			'host'     => 'localhost',
			'database' => 'blog_demo',
			'username' => 'admin',
			'password' => 'admin',
			'charset'  => 'utf8',
			'prefix'   => '',
			'schema'   => 'public',
		),
	),

);
