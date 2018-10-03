<?php
include('../connection.php');

$item = $_POST['itemCode'];
$detail = $_POST['detail'];
$price = $_POST['price'];
$size = $_POST['size'];

$sql = "INSERT INTO item VALUES ('$item','$detail','$price','$size')";

if ($conn->query($sql) === TRUE) {
  //   echo "item: ". $item. " Detail: " .
		// $detail. " " . $price. " " .$size ."<br>";
	header('Location: Stock.php');
}else {
	echo "Error: " . $sql . "<br>" . $conn->error;
	header('Location: Stock.php');
}

$conn->close();
?>

