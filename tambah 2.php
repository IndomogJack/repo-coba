<?php
$db_username 	= 'root';
$db_password 	= '';
$db_name 		= 'filter';
$db_host 		= 'localhost';
$conn = mysql_connect($db_host, $db_username, $db_password) or die ('Error connecting to mysql');
mysql_select_db($db_name) or die ('Unable to select  database!');
$mysqli = new mysqli($db_host, $db_username, $db_password,$db_name);

?>