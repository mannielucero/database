<?php
error_reporting(0);
date_default_timezone_set('America/Chicago');

define('_PS_MAGIC_QUOTES_GPC_',         get_magic_quotes_gpc());
define('_PS_MYSQL_REAL_ESCAPE_STRING_', function_exists('mysql_real_escape_string'));
/*
 * dev - uses the test databases
 * live - uses the live databases
 * 
 */
define('_ENVIRONMENT_', 'live');


define('__PS_BASE_URI__', '/');
define('_DB_SERVER_', 'localhost');
define('_DB_USER_', 'root');
define('_DB_PASSWD_', '');
define('_DB_TYPE_', 'MySQL');

if (_ENVIRONMENT_ == 'live') {
	
	define('_DB_CMAX_NAME_', 'collectionsmax');
	define('_DB_NAME_', 'shortsales');
	define('_DB_CREPORT_NAME_', 'cmax_reports');

} else if (_ENVIRONMENT_ == 'dev') {	
	
	define('_DB_CMAX_NAME_', 'collectionsmax');
	define('_DB_NAME_', 'shortsales');
	define('_DB_CREPORT_NAME_', 'cmax_reports');
}

