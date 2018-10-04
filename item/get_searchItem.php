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
        <th>ITEM</th>
        <th>DETAIL</th>
        <th>Price</th>
        <th>SIZE</th>
        <th>Action</th>
      </tr>
      </thead>
<?php
$id = $_POST['serachItem'];

$sql = "SELECT * FROM item where (itemCode like '%$id%' OR detail LIKE '%$id%' OR price LIKE '%$id%' OR size LIKE '%$id%')";

$result = $conn->query($sql);

    if($result -> num_rows>0){
      while($row = $result -> fetch_assoc()){
        echo '<tr>';
        echo '<td>'.$row['itemCode'].'</td>';
        echo '<td>'.$row['detail'].'</td>';
        echo '<td>'.$row['price'].'</td>';
        echo '<td>'.$row['size'].'</td>';
        echo "<td><a style='color:white' href='edit_item.php?itemCode=".$row['itemCode']."'><button type='button' class='btn btn-success'>Update</a></button></td>";
        echo "<td><a style='color:white' href='delete_item.php?itemCode=".$row['itemCode']."' onClick=\"return confirm('Are you sure you want to delete?')\"><button type='button' class='btn btn-danger'>Delete</a></button></td>";
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