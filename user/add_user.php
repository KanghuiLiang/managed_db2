 <!DOCTYPE html>
<html lang="en">

<head>
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <!-- Title Page-->
    <title>Add New User</title>

</head>

<body class="animsition">
			    <div class="page-wrapper">
			        <div class="page-content--bge5">
			            <div class="container">
			                <div class="login-wrap">
			                    <div class="login-content">
			                        <div class="login-logo">
			                            <h4>Add New Account</h4>
			                        </div>
			                        	<form action="insert_user.php" method="POST">
			                        		<div class="form-group">
		                                    <label><strong>User ID</strong></label>
		                                    <input class="au-input au-input--full" type="text" name="ID"> 
                               				</div>

                               				<div class="form-group">
		                                    <label><strong>User Password</strong></label>
		                                   	<input class="au-input au-input--full" type="password" name="Password">
                               				</div>

                               				<div class="form-group">
		                                    <label><strong>User Permission</strong></label>
		                                   	<input class="au-input au-input--full" type="text" name="Permission">
                               				</div>
                               			
												<button class="au-btn au-btn--block au-btn--blue m-b-20" type="submit">Submit</button>
			                        	</form>
			                    </div>
			                </div>
			            </div>
			        </div>

			    </div>
</body>

</html>
<!-- end document-->