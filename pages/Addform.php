<!DOCTYPE html>
<html lang="en">

<head>
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <!-- Title Page-->
    <title>Add Form</title>

</head>

<body class="animsition">
			    <div class="page-wrapper">
			        <div class="page-content--bge5">
			            <div class="container">
			                <div class="login-wrap">
			                    <div class="login-content">
			                        <div class="login-logo">
			                            <h3>Add New Record</h3>
			                       
			                        </div>
			                        	<form action="insert_form.php" method="POST">
			                        		<div class="form-group left">
		                                    <label><strong>Repair ID</strong></label>
		                                    <input class="form-control" type="text" name="RepairID"> 
                               				</div>

                               				<div class="form-group left">
		                                    <label><strong>Repair Form ID</strong></label>
		                                   	<input class="form-control" type="text" name="FormID">
                               				</div>

                               				<div class="form-group left">
		                                    <label><strong>Department Store</strong></label>
		                                   	<input class="form-control" type="text" name="store">
                               				</div>

                               				<div class="form-group left">
		                                    <label><strong>Customer ID</strong></label>
		                                    <input class="form-control" type="text" name="CusID">
                               				</div>
                               				
                               				<div class="form-group left">
		                                    <label><strong>Data Of Purchase</strong></label>
		                                    <input class="form-control" type="text" name="date">
                               				</div>
                               				
                               			
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