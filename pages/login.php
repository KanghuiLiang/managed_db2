


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

   <h2>Admin Login</h2>
   <p>Please enter User Name and password</p>
   </div>
    <form action="loginAction.php" method="post" id="Login" >

        <div class="form-group">


            <input type="text" class="form-control" id="userID" placeholder="User ID" name="username">

        </div>

        <div class="form-group">

            <input type="password" class="form-control" id="Password" placeholder="Password" name="password">

        </div>
        <div class="forgot">
        <a href="reset.html">Forgot password?</a>
</div>
        <button type="submit" class="btn btn-primary">Login</button>
    </form>
    </div>
</div>
</div>

</body>
</html>
