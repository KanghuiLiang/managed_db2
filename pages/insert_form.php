<?php
include('../connection.php');

$repairID = $_POST['RepairID'];
$FormID = $_POST['FormID'];
$store = $_POST['store'];
$CusID = $_POST['CusID'];
$date = $_POST['date'];



$sql = "INSERT INTO repairform VALUES ('$repairID','$FormID','$store','$CusID','$date')";

if ($conn->query($sql) === TRUE) {

	header('Location: report.php');
}else {
	echo "Error: " . $sql . "<br>" . $conn->error;
	// header('Location: Stock.php');
}

$conn->close();
?>
