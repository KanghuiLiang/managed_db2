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
        <th>Repair ID</th>
        <th>Repair Form ID</th>
        <th>Department Store</th>
        <th>Data of Purchase</th>
        <th>Customer ID</th>
        <th>Customer Name</th>
        <th>Phone Number</th>
      </tr>
      </thead>
<?php
$id = $_POST['serachform'];

// Cusfrom is a view
$sql = "SELECT * FROM db2foruml2.CusFrom where (Repair_ID like '%$id%' OR Repair_FormID LIKE '%$id%' OR Dept_Store LIKE '%$id%' OR Date_of_Purchase LIKE '%$id%'
OR Cus_ID LIKE '%$id%' OR CusName LIKE '%$id%')";

$result = $conn->query($sql);

    if($result -> num_rows>0){
      while($row = $result -> fetch_assoc()){
        echo '<tr>';
        echo '<td>'.$row['Repair_ID'].'</td>';
        echo '<td>'.$row['Repair_FormID'].'</td>';
        echo '<td>'.$row['Dept_Store'].'</td>';
        echo '<td>'.$row['Date_of_Purchase'].'</td>';
        echo '<td>'.$row['Cus_ID'].'</td>';
        echo '<td>'.$row['CusName'].'</td>';
        echo '<td>'.$row['CusPnum'].'</td>';
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