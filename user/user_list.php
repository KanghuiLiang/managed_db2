  <?php
    include_once('../pages/index.php');
    include('../connection.php');
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>User</title>
  <meta charset="utf-8">
</head>
<body>
    <div class="main">
      <div class="row">
      <div class="col-md-9">
  <h2>Employee</h2>
</div>
  <div class="col-md-3">
<h2> <button> <i class="fas fa-plus-square"></i><a href="add_user.php">Add</a></button></h2>
</div>
  </div>
  <table class="table table-striped">
    <thead>
      <tr>
        <th>User ID</th>
        <th>User Permission</th>
        <th>Action</th>
      </tr>
      </thead>
  <?php
    $sql = "SELECT userID, userPermission FROM account";
    $result = $conn->query($sql);

    if($result -> num_rows>0){
      while($row = $result -> fetch_assoc()){
        echo '<tr>';
        echo '<td>'.$row['userID'].'</td>';
        echo '<td>'.$row['userPermission'].'</td>';
        echo "<td><a href='edit_user.php?userID=".$row['userID']."'><i class='fas fa-pen'></i>Update</a></td>";
        echo "<td><a href='delete_user.php?userID=".$row['userID']."'><i class='fas fa-trash-alt'></i>Delete</a></td>";
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
