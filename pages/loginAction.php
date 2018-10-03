<?php
	require_once ("../connection.php");
	

 // print_r($_POST);
	session_start();
$username = $_POST['username'];
$password = $_POST['password'];


	if($username == "" || $password =="") {

		header("location:error.php");
	} else {
		if(checkLogin($username,$password)) {
			header("location:welcome.php");

		} else {

		header("location:error.php");

		}
		$_SESSION['userID'] = $username;
	}







?>