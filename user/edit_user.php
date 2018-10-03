<?php
// including the database connection file
include_once("../connection.php");
 
if(isset($_POST['update']))
{    
 $id = $_POST['userID'];
 $Password= $_POST['Password'];
 $permission= $_POST['Permission'];   
    
    $result ="UPDATE account SET userPassword ='$Password',userPermission='$permission' WHERE userID='$id'";
    if ($conn->query($result) === TRUE) {
        	header("Location: user_list.php");
        }else{header("Location: user_list.php");

        }
        //redirectig to the stock page. In our case.
        
    }
// }
?>
<?php
// getting id from url
$id = $_GET['userID'];
 
//selecting data associated with this particular id
$sql ="SELECT * FROM account WHERE userID='$id'";
$result = $conn->query($sql);
 
 while($row = $result -> fetch_assoc()){
 	$id = $row['userID'];
    $Password = $row['userPassword'];
    $permission = $row['userPermission'];
}
?>
<html>
<head>    
    <title>Edit Data</title>
</head>
 
<body>
    <a href="../pages/index.php">Home</a>
    <br/><br/>
    
    <form name="form1" method="post" action="edit_user.php">
        <table border="0">
        	 <tr> 
                <td>UserID</td>
                <td><input type="text" name="userID" value="<?php echo $id;?>" readonly></td>
            </tr>
            <tr> 
                <td>User Password</td>
                <td><input type="password" name="Password" value="<?php echo $Password;?>"></td>
            </tr>
            <tr> 
                <td>User Permission</td>
                <td><input type="text" name="Permission" value="<?php echo $permission;?>"></td>
            </tr>
            <tr>
                <td><input type="submit" name="update" value="Update"></td>
            </tr>
        </table>
    </form>
</body>
</html>