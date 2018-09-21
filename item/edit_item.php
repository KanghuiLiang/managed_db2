<?php
// including the database connection file
include_once("../connection.php");
 
if(isset($_POST['update']))
{    
    $itemCode = $_POST['itemCode'];
    $detail=$_POST['detail'];
    $price=$_POST['price'];
    $size=$_POST['size'];    
    
     
    // checking empty fields
    // if(empty($detail) || empty($price) || empty($size)) {            
    //     if(empty($detail)) {
    //         echo "<font color='red'>Name field is empty.</font><br/>";
    //     }
        
    //     if(empty($price)) {
    //         echo "<font color='red'>Price field is empty.</font><br/>";
    //     }
        
    //     if(empty($size)) {
    //         echo "<font color='red'>size field is empty.</font><br/>";
    //     }        
    // } else {    
        //updating the table
       
        $result ="UPDATE item SET detail='$detail',price ='$price',size='$size' WHERE itemCode='$itemCode'";
        if ($conn->query($result) === TRUE) {
        	header("Location: Stock.php");
        }else{header("Location: Stock.php");}
        //redirectig to the stock page. In our case.
        
    }
// }
?>
<?php
// getting id from url
$itemCode = $_GET['itemCode'];
 
//selecting data associated with this particular id
$sql ="SELECT * FROM item WHERE itemCode='$itemCode'";
$result = $conn->query($sql);
 
 while($row = $result -> fetch_assoc()){
 	$itemCode = $row['itemCode'];
    $detail = $row['detail'];
    $price = $row['price'];
    $size = $row['size'];
}
?>
<html>
<head>    
    <title>Edit Data</title>
</head>
 
<body>
    <a href="../pages/index.php">Home</a>
    <br/><br/>
    
    <form name="form1" method="post" action="edit_item.php">
        <table border="0">
        	 <tr> 
                <td>ItemCode</td>
                <td><input type="text" name="itemCode" value="<?php echo $itemCode;?>" readonly></td>
            </tr>
            <tr> 
                <td>Detail</td>
                <td><input type="text" name="detail" value="<?php echo $detail;?>"></td>
            </tr>
            <tr> 
                <td>price</td>
                <td><input type="text" name="price" value="<?php echo $price;?>"></td>
            </tr>
            <tr> 
                <td>Size</td>
                <td><input type="text" name="size" value="<?php echo $size;?>"></td>
            </tr>
            <tr>
                <td><input type="submit" name="update" value="Update"></td>
            </tr>
        </table>
    </form>
</body>
</html>