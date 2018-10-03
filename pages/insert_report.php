<?php
include('../connection.php');

$repairNo = $_POST['RepairNo'];
$code = $_POST['Code'];
$RepairDetail = $_POST['RepairDetail'];
$productNumber = $_POST['productNumber'];
$WarrantyID = $_POST['WarrantyID'];


$sql = "INSERT INTO repair_product(Repair_no, Product_Code, Repair_Detail, Repair_Location, proNo_ProNo, waranty_Waranty_ID) VALUES ('$repairNo','$code','$RepairDetail','null','$productNumber','$WarrantyID')";

if ($conn->query($sql) === TRUE) {

	header('Location: report.php');
}else {
	echo "Error: " . $sql . "<br>" . $conn->error;
	// header('Location: Stock.php');
}

$conn->close();
?>
