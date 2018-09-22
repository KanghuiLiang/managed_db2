<?php  //Start the Session
session_start();
 require('../connection.php');
//3. If the form is submitted or not.
//3.1 If the form is submitted
if (isset($_POST['userID']) and isset($_POST['userPassword'])){
//3.1.1 Assigning posted values to variables.
$userID = $_POST['userID'];
$userPassword = $_POST['userPassword'];
//3.1.2 Checking the values are existing in the database or not
$query = "SELECT * FROM `account` WHERE userID='$userID'and userPassword='$userPassword'";
 
$result = $conn->query($query) or die($conn->error);
$count = mysqli_num_rows($result);
//3.1.2 If the posted values are equal to the database values, then session will be created for the user.
if ($count == 1){
$_SESSION['userID'] = $userID;
}else{
//3.1.3 If the login credentials doesn't match, he will be shown with an error message.
$fmsg = "Invalid Login Credentials.";
}
}
//3.1.4 if the user is logged in Greets the user with message
if (isset($_SESSION['userID'])){
$userID= $_SESSION['userID'];
header('Location: ../pages/index.php');
echo "<a href='logout.php'>Logout</a>";
 
}else{ echo 'users doesnot exist';}
//3.2 When the user visits the page first time, simple login form will be displayed.
?>