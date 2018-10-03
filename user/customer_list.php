  <?php
    include_once('../pages/index.php');
    include('../connection.php');
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Customer</title>
  <meta charset="utf-8">
</head>
<body>
    <div class="main">
      <div class="row">
      <div class="col-md-9">
  <h2>Customer Record</h2>
</div>
  <div class="col-md-3">
<h2> <button> <i class="fas fa-plus-square"></i><a href="add_cus.php">Add</a></button></h2>
</div>
  </div>
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Customer ID</th>
        <th>Customer Name</th>
        <th>Phone</th>
      </tr>
      </thead>
  <?php
    $sql = "SELECT * FROM customer";
    $result = $conn->query($sql);

    if($result -> num_rows>0){
      while($row = $result -> fetch_assoc()){
        echo '<tr>';
        echo '<td>'.$row['CusID'].'</td>';
        echo '<td>'.$row['CusName'].'</td>';
        echo '<td>'.$row['CusPnum'].'</td>';
        echo "<td><a style='color:white' href='edit_cus.php?CusID=".$row['CusID']."'><button type='button' class='btn btn-success'>Update</a></button></td>";
        echo "<td><a style='color:white' href='delete_cus.php?CusID=".$row['CusID']."' onClick=\"return confirm('Are you sure you want to delete?')\"><button type='button' class='btn btn-danger'>Delete</a></button></td>";
        echo '</tr>';
      }

    }else{
      echo $conn->error;
    }

    $conn->close();
  ?>
    </tbody>
  </table>

</div>

</body>
</html>
