<?php
include('../connection.php'); 
$item = $_GET['itemCode'];
$sql ="DELETE FROM item WHERE itemCode = '$item'";
if($conn->query($sql)){
	// echo "$item is deleted.";
    header ("Location: Stock.php");
}else{
    // echo "Error: " . $sql . "<br>" . $conn->error;
    header ("Location: Stock.php");
}
$conn->close();
?>