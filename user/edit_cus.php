<?php
// including the database connection file
include_once("../connection.php");
 
if(isset($_POST['update']))
{    
 $id = $_POST['CusID'];
 $Name= $_POST['CusName'];
 $Pnum= $_POST['CusPnum'];   
    
    $result ="UPDATE customer SET CusName ='$Name', CusPnum='$Pnum' WHERE CusID='$id'";
    if ($conn->query($result) === TRUE) {
        	header("Location: customer_list.php");
        }else{header("Location: customer_list.php");

        }
        //redirectig to the stock page. In our case.
        
    }
// }
?>
<?php
// getting id from url
$id = $_GET['CusID'];
 
//selecting data associated with this particular id
$sql ="SELECT * FROM customer WHERE CusID='$id'";
$result = $conn->query($sql);
 
 while($row = $result -> fetch_assoc()){
 	$id = $row['CusID'];
 $Name= $row['CusName'];
 $Pnum= $row['CusPnum']; 
}
?>
<html>
<head>    
    <title>Edit Data</title>
</head>
 
<body>
    <a href="../pages/index.php">Home</a>
    <br/><br/>
    <form name="form1" method="post" action="edit_cus.php">
        <table border="0">
        	 <tr> 
                <td>Customer ID</td>
                <td><input type="text" name="CusID" value="<?php echo $id;?>" readonly></td>
            </tr>
            <tr> 
                <td>Customer Name</td>
                <td><input type="text" name="CusName" value="<?php echo $Name;?>"></td>
            </tr>
            <tr> 
                <td>Phone Number</td>
                <td><input type="text" name="CusPnum" value="<?php echo $Pnum;?>"></td>
            </tr>
            <tr>
                <td><input type="submit" name="update" value="Update"></td>
            </tr>
        </table>
    </form>
</body>
</html>