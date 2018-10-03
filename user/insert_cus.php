<?php
include('../connection.php');

$name= $_POST['name'];
$number= $_POST['number'];

$sql = "INSERT INTO customer (CusName, CusPnum) VALUES ('$name','$number')";

if ($conn->query($sql) === TRUE) {
	header('Location: customer_list.php');
}else {
	echo $conn->error;
	// header('Location: customer_list.php');
}

$conn->close();
?>