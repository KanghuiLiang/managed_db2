<?php
include('../connection.php'); 
$CusID = $_GET['CusID'];
echo "$CusID";
$sql ="DELETE FROM customer WHERE CusID = '$CusID'";
if($conn->query($sql)){
    header ("Location: customer_list.php");
}else{
    echo "Error: " . $sql . "<br>" . $conn->error;
    // header ("Location: user_list.php");
}
$conn->close();
?>