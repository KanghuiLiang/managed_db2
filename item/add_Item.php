<!DOCTYPE html>
<html lang="en">

<head>
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
   <link rel="stylesheet" type="text/css" href="../CSS/add_item.css">
   <link rel="stylesheet" type="text/css" href="../CSS/Header.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <!-- Title Page-->
    <title>Stock</title>

</head>

<body class="animsition">
			    <div class="page-wrapper">
			        <div class="page-content--bge5">
			            <div class="container">
			                <div class="login-wrap">
			                    <div class="login-content">
			                        <div class="login-logo">
			                            <h3>Stock-In Hand</h3>
			                            <p>Insert the stock</p>
			                        </div>
			                        	<form action="insert_item.php" method="POST">
			                        		<div class="form-group left">
		                                    <label><strong>Item</strong></label>
		                                    <input class="form-control" type="text" name="itemCode"> 
                               				</div>

                               				<div class="form-group left">
		                                    <label><strong>Detail</strong></label>
		                                   	<input class="form-control" type="text" name="detail">
                               				</div>

                               				<div class="form-group left">
		                                    <label><strong>Price</strong></label>
		                                    <input class="form-control" type="text" name="price">
                               				</div>
                               				
                               				<div class="form-group left">
		                                    <label><strong>Size</strong></label>
		                                    <input class="form-control" type="text" name="size">
                               				</div>
												<button type="submit" class="btn btn-primary">Submit</button>
			                        	</form>
			                    </div>
			                </div>
			            </div>
			        </div>

			    </div>
</body>

</html>
<!-- end document-->