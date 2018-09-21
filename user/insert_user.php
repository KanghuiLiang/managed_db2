<?php
include('../connection.php');

$id = $_POST['ID'];
$Password= $_POST['Password'];
$permission= $_POST['Permission'];

$sql = "INSERT INTO account (userID, userPassword, userPermission) VALUES ('$id','$Password','$permission')";

if ($conn->query($sql) === TRUE) {
	header('Location: user_list.php');
}else {
	header('Location: user_list.php');
}

$conn->close();
?>