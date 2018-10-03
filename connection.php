<?php

$servername = '35.198.248.83:3306';
$username = "hui";
$password = '1234';
$dbname = 'db2foruml2';

// create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// check connection
if ($conn -> connect_error){
	die("connection failed: " . $conn->connect_error);
}

function getUsers(){

  				global $conn;
		$query  = "SELECT * FROM account";
	  $result = $conn->query($query);
	  	  if (!$result) {
	  	die($conn->error);
	  } else {
	  	return $result->fetch_all();
	  }
	  return false;
	  session_start();

  	}


	function checkLogin($uusername, $upassword) {
		global $conn;
		$query  = "SELECT * FROM account";
	  $result = $conn->query($query);

	  if (!$result) {
	  	die($conn->error);
	  }
	  if($result->num_rows > 0){
		  while($row = mysqli_fetch_array($result)) {
		  	// print_r($row);
		  	if ($row['userID'] == $uusername && $row['userPassword'] == md5($upassword)) {
		  		return true;
		  	}
		  }
		}
	  return false;
	  $_SESSION['username'] = $username;
	}



?>