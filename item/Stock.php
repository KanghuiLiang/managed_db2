  <?php
    include_once('../pages/index.php');
    include('../connection.php');
    ?>
  
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Stock</title>
  <meta charset="utf-8">
</head>

<body>

  <section class="position">
      <div class="main">
         <div class="row">
                <div class="col-md-7"></div>
                <div class="col-md-5">
            <div class="form">
            <form action="get_searchItem.php" method="post">
             Search: <input type="id" name="serachItem">
            <button><i class="fas fa-search"></i></button>
            </form>
      </div>
            </div>
      <div class="row">
      <div class="col-md-9">
  <h2>Stock on Hand</h2>
</div>
  <div class="col-md-3">
<h2> <button> <i class="fas fa-plus-square"></i><a href="../item/add_Item.php">Add Item</a></button></h2>
</div>
  </div>
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
    $sql = "SELECT * FROM item";
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
    }

    $conn->close();
  ?>
<!-- <a onclick="return confirm('Are you sure?')"  href="Delete_Vendor.php?ID=$row[ID]"> Delete </a> -->

</table>
</section>


</body>

</html>
