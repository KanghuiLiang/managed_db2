<!DOCTYPE html>
<html lang="en">

<head>
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <!-- Title Page-->
    <title>Add Report</title>

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
			                        	<form action="insert_report.php" method="POST">
			                        		<div class="form-group left">
		                                    <label><strong>Repair No</strong></label>
		                                    <input class="form-control" type="text" name="RepairNo"> 
                               				</div>

                               				<div class="form-group left">
		                                    <label><strong>Product Code</strong></label>
		                                   	<input class="form-control" type="text" name="Code">
                               				</div>

                               				<div class="form-group left">
		                                    <label><strong>Repair Detail</strong></label>
		                                    <input class="form-control" type="text" name="RepairDetail">
                               				</div>
                               				
                               				<div class="form-group left">
		                                    <label><strong>Product Number</strong></label>
		                                    <input class="form-control" type="text" name="productNumber">
                               				</div>
                               				<div class="form-group left">
		                                    <label><strong>Warranty ID</strong></label>
		                                    <input class="form-control" type="text" name="WarrantyID">
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