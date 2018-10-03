<html>
		  <head>
		<link rel="stylesheet" href="../CSS/login.css">
		  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
		<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
		<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<!------ Include the above in your HEAD tag ---------->
		  </head>
		<body id="LoginForm">
		<div class="container">
		<br>
		<br>
		<div class="login-form">
		<div class="main-div">
   		<div class="panel">
                    <h4>Add New Account</h4>
</div>
            	<form action="insert_user.php" method="POST">
            		<div class="form-group">
                    <label><strong>User ID</strong></label>
                    <input class="form-control" type="text" name="ID"> 
       				</div>

       				<div class="form-group">
                    <label><strong>User Password</strong></label>
                   	<input class="form-control" type="password" name="Password">
       				</div>

       				<div class="form-group">
                    <label><strong>User Permission</strong></label>
                   	<input class="form-control" type="text" name="Permission">
       				</div>
       			
						<button class="btn btn-primary" type="submit">Submit</button>
            	</form>
    </div>
</div>
</div>


</body>
</html>

