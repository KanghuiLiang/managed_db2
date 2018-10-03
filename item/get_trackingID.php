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
      <div class="col-md-7"><h2>Track</h2></div>
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
        <th>Tracking ID</th>
        <th>Date Recieve from Customer</th>
        <th>Date Arrived Company</th>
        <th>Send toFactory</th>
        <th>Date Return To Department</th>
        <th>Send Method</th>
        <th>Person Sent</th>
      </tr>
      </thead>
<?php
$id = $_POST['id'];

$sql = "SELECT * FROM tracking WHERE Tracking_ID = '$id'";

$result = $conn->query($sql);

    if($result -> num_rows>0){
      while($row = $result -> fetch_assoc()){
        echo '<tr>';
        echo '<td>'.$row['Tracking_ID'].'</td>';
        echo '<td>'.$row['Date_Recieve_fromCustomer'].'</td>';
        echo '<td>'.$row['Date_Arrived_Comp'].'</td>';
        echo '<td>'.$row['Sendto_Factory'].'</td>';
        echo '<td>'.$row['Date_ReturntTo_Dept'].'</td>';
        echo '<td>'.$row['SendMethod'].'</td>';
        echo '<td>'.$row['Person_Sent'].'</td>';
        echo '</tr>';
      }

    }else{
      echo $conn->error;
    }
    $conn->close();

    ?>
</table>
</div>
</div>
</html>