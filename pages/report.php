
<head>
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<div class="row">
      <div class="col-md-1"></div>
      <div class="col-md-7"><h2>Follow Up Report</h2></div>
  <div class="col-md-3">
<h2> <button><a href="../index.php">Back to Home</a></button></h2>
</div>
<div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8">
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Product Code</th>
        <th>Detailed Description</th>
        <th>Waranty</th>
        <th>Department Store</th>
        <th>Customer Name</th>
        <th>Total</th>
      </tr>
      </thead>
<?php
 include_once("../connection.php");
    $sql = "SELECT R.Product_Code AS 'Product Code', R.Repair_Detail As 'Detailed description' , W.W_Status AS Waranty,
 F.Dept_Store As 'Department Store',C.CusName AS 'Customer Name'
FROM db2foruml.repair_product As R
left Join
waranty As W
on R.waranty_Waranty_ID = W.Waranty_ID
left Join 
repairform as F 
on R.Repair_no =F.Repair_ID
left join 
customer As C
on C.CusID = F.Cus_ID";
    $result = $conn->query($sql);

    if($result -> num_rows>0){
      while($row = $result -> fetch_assoc()){
        echo '<tr>';
        echo '<td>'.$row['Product Code'].'</td>';
        echo '<td>'.$row['Detailed description'].'</td>';
        echo '<td>'.$row['Waranty'].'</td>';
        echo '<td>'.$row['Department Store'].'</td>';
        echo '<td>'.$row['Customer Name'].'</td>';
        echo '</tr>';
      }
      
    }else{
      echo $conn->error;
    }
  ?>
</table>
</div>
</div>
</div>