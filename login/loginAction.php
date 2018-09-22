<?php
session_start(); // Starting Session
$error=''; // Variable To Store Error Message
if (isset($_POST['submit'])) {
if (empty($_POST['userID']) || empty($_POST['userPassword'])) {
$error = "Username or Password is invalid";
}
else
{
// Define $username and $password
$userID=$_POST['userID'];
$userPassword=$_POST['userPassword'];
// Establishing Connection with Server by passing server_name, user_id and password as a parameter
$connection = mysql_connect("35.198.248.83:3306", "hui", "1234");
// To protect MySQL injection for Security purpose
$userID = stripslashes($userID);
$userPassword = stripslashes($userPassword);
$userID = mysql_real_escape_string($userID);
$userPassword = mysql_real_escape_string($userPassword);
// Selecting Database
$db = mysql_select_db("db2foruml", $connection);
// SQL query to fetch information of registerd users and finds user match.
$query = mysql_query("select * from account where userPassword='$userPassword' AND userID='$userID'", $connection);
$rows = mysql_num_rows($query);
if ($rows == 1) {
$_SESSION['login_user']=$userID; // Initializing Session
header("location: ../pages/welcome.php"); // Redirecting To Other Page
} else {
$error = "Username or Password is invalid";
}
mysql_close($connection); // Closing Connection
}
}
?>