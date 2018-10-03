<?php

$servername = '35.198.248.83:3306';
$username = "hui";
$password = '1234';
$dbname = 'db2foruml';

// create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// check connection
if ($conn -> connect_error){
	die("connection failed: " . $conn->connect_error);
}

?>