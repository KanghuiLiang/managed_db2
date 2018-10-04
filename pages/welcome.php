 <?php
    include_once('index.php');
    ?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
    	<meta charset="UTF-8">
    	<title>Home</title>


<link rel="icon" href="database.png" type="image/png" />
    </head>
    <body>
    	<div class="main">

            <div class="row">
                <div class="col-md-7"></div>
                <div class="col-md-5">
            <div class="form">
            <form action="get_searchform.php" method="post">
             Search: <input type="id" name="serachform">
            <button><i class="fas fa-search"></i></button>
            </form>
      </div></div>
            </div>
    		<!-- insert repair form first -->
    <div class="row">
      <div class="col-md-1"></div>
      <div class="col-md-5">
        <h2>Repair Form</h2>
  </div>
  <div class="col-md-1">
<h2><button class="btn btn-color"><a class="color" href="../pages/Addform.php">Add</a></button></h2>
</div>
<div class="col-md-5">
    
  </div>
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
    	</div>
    </body>
    </html>