<?php

if(stristr($_SERVER['HTTP_HOST'], "yoobee.net.nz")){

	//production
	ini_set('display_errors', false);
	ini_set('log_errors', 1);
	ini_set('error_log', getcwd()."/php_error.log");

	define('MAILGUN_KEY', '.......');
	define('MAILGUN_DOMAIN', '.......');

	define("DB_HOST", 'localhost');
	define("DB_NAME", 'alecbach_we03');
	define("DB_USER", 'alecbach_admin');
	define("DB_PASSWORD", '~K4U8*o5=~wh');

} else {

	//development
	ini_set('display_errors', true);
	ini_set('log_errors', 1);
	ini_set('error_log', getcwd()."/php_error.log");

	define('MAILGUN_KEY', '.......');
	define('MAILGUN_DOMAIN', '.......');

	define("DB_HOST", 'localhost');
	define("DB_NAME", 'we03_bach');
	define("DB_USER", 'root');
	define("DB_PASSWORD", '');

}