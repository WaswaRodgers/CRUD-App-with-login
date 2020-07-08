<?php 
	error_reporting(0); 
	define('HOST_NAME', 'localhost');
	define('USER', 'root');
	define('PASSWORD', '');
	define('DATABASE', 'mycv');

	$db_connection = mysqli_connect(HOST_NAME, USER, PASSWORD, DATABASE) or die("Unable to connect due to ".mysqli_connect_error());
?>