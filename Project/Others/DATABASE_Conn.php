<?php

$host= "localhost";
$dbusername= "root";
$dbpassword = "";
$db_name = "ctdb";

$conn = new mysqli($host, $dbusername, $dbpassword, $db_name);

if (!$conn) {
	echo "Connection failed!";
}
?>