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
                <div class="col-md-7"></div>
                <div class="col-md-5">
            <div class="form">
            <form action="get_searchUser.php" method="post">
             Search: <input type="id" name="serachUser">
            <button><i class="fas fa-search"></i></button>
            </form>
      </div>
            </div>
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
        echo "<td><a style='color:white' href='edit_user.php?userID=".$row['userID']."'><button type='button' class='btn btn-success'>Update</a></button></td>";
        echo "<td><a style='color:white' href='delete_user.php?userID=".$row['userID']."' onClick=\"return confirm('Are you sure you want to delete?')\"><button type='button' class='btn btn-danger'>Delete</a></button></td>";
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
