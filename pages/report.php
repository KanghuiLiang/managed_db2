  <?php
    include_once('../pages/index.php');
    ?>
<head>
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
   <link rel="stylesheet" type="text/css" href="..CSS/Header.php">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
<div class="main">
<!-- insert repair form first -->
	<div class="row">
      <div class="col-md-1"></div>
      <div class="col-md-7"><h2>Repair Form</h2></div>
  <div class="col-md-3">
<h2><button class="btn btn-color"><a class="color" href="../pages/Addform.php">Add</a></button></h2>
</div>
<div class="row">
    <div class="col-md-12">
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
 include_once("../connection.php");
    $sql = "SELECT Repair_ID, Repair_FormID, Dept_Store,  Date_of_Purchase,Cus_ID, CusName, CusPnum FROM db2foruml2.repairform left join db2foruml2.customer on Cus_ID = CusID;";
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
      echo $conn->error;
    }
  ?>
</table>

<!-- Insert report secord -->
<div class="row">
      <div class="col-md-1"></div>
      <div class="col-md-7"><h2>Follow Up Report</h2></div>
  <div class="col-md-3">
<h2><button class="btn btn-color"><a class="color" href="../pages/AddReport.php">Add</a></button></h2>
</div>
<div class="row">
    <div class="col-md-12">
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
 include_once("../connection.php");
    $sql = "SELECT Repair_no, Product_Code, Repair_Detail, trackingNo_Tracking_ID, proNo_ProNo, W_Status,W_Payneeded, detail
     FROM db2foruml2.repair_product 
     left join db2foruml2.waranty 
     on waranty_Waranty_ID = Waranty_ID 
     left join db2foruml2.item on
      Product_Code=itemCode order by Repair_no;";
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
      echo $conn->error;
    }
  ?>
</table>
</div>
</div>
</div>
</div>
</body>
</html>