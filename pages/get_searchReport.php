<?php
include('../connection.php'); 
?>
<html>
<head>
	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<div class="row">
      <div class="col-md-1"></div>
      <div class="col-md-7"><h2>Search result</h2></div>
  <div class="col-md-3">
<h2> <button><a href="../pages/index.php">Back to Home</a></button></h2>
</div>
  </div>
  <div class="row">
  	<div class="col-md-1"></div>
  	<div class="col-md-10">
  <table class="table table-striped">
    <thead>
      <tr>
       <th>Repair No</th>
        <th>Product Code</th>
        <th>Repair Detail</th>
        <th>Tracking ID</th>
        <th>Product Number</th>
        <th>Warranty status</th>
        <th>Pay Needed</th>
        <th>Detail</th>
      </tr>
      </thead>
<?php
$id = $_POST['serachReport'];

// FUreport is a view
$sql = "SELECT * FROM db2foruml2.FUreport where (Repair_no like '%$id%' OR Product_Code LIKE '%$id%' OR Repair_Detail LIKE '%$id%' OR trackingNo_Tracking_ID = '$id'
OR proNo_ProNo LIKE '%$id%' OR W_Status = '$id' OR W_Payneeded = '$id' OR detail Like '$id')";

$result = $conn->query($sql);

    if($result -> num_rows>0){
      while($row = $result -> fetch_assoc()){
        echo '<tr>';
        echo '<td>'.$row['Repair_no'].'</td>';
        echo '<td>'.$row['Product_Code'].'</td>';
        echo '<td>'.$row['Repair_Detail'].'</td>';
        echo '<td>'.$row['trackingNo_Tracking_ID'].'</td>';
        echo '<td>'.$row['proNo_ProNo'].'</td>';
        echo '<td>'.$row['W_Status'].'</td>';
        echo '<td>'.$row['W_Payneeded'].'</td>';
        echo '<td>'.$row['detail'].'</td>';
        echo '</tr>';
      }

    }else{
      echo '0 RESULT';
    }
    $conn->close();

    ?>
</table>
</div>
</div>
</html>