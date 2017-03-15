<?php
	define('DB_SERVER', 'localhost');
	define('DB_USERNAME', 'yourusername');
	define('DB_PASSWORD', 'yourpassword');
	define('DB_DATABASE', 'xss_demo');
	$db = new mysqli(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
	$db->set_charset("utf8");
?>