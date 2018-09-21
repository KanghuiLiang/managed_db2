<?php
include('../connection.php'); 
$userID = $_GET['userID'];
echo "$userID";
$sql ="DELETE FROM account WHERE userID = '$userID'";
if($conn->query($sql)){
    header ("Location: user_list.php");
}else{
    // echo "Error: " . $sql . "<br>" . $conn->error;
    header ("Location: user_list.php");
}
$conn->close();
?>