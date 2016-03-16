<?php

/**
 * Database Configuration
 *
 * All of your system's database configuration settings go in here.
 * You can see a list of the default settings in craft/app/etc/config/defaults/db.php
 */

return array(

	/**
	 * The database server name or IP address. Usually 'localhost' or '127.0.0.1'.
	 */
	'server' => 'localhost',

	/**
	 * The database username to connect with.
	 */
	'user' => 'craftcms',

	/**
	 * The database password to connect with.
	 */
	'password' => 'roundandroundandround',

	/**
	 * The name of the database to select.
	 */
	'database' => 'craft',

	/**
	 * The prefix to use when naming tables. This can be no more than 5 characters.
	 */
	'tablePrefix' => 'craft',

	/**
	 * The charset to use when creating tables.
	 */
	'charset' => 'utf8',

	/**
	 * The collation to use when creating tables.
	 */
	'collation' => 'utf8_unicode_ci',

	/**
	 * If this is set, then the CLI connection string (used for yiic) will
	 * connect to the Unix socket, instead of the server and port. If this is
	 * specified, then 'server' and 'port' settings are ignored.
	 */
	'unixSocket' => '',
);