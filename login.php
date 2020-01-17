<!DOCTYPE html>

<head>
    <title>log in page </title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
   <link rel="stylesheet" href=" https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="style.css"> 
</head>
<body>
<div class="col-md-9">
 <h2>Login</h2> 
  <form id="login"action ="loginValidation.php"method="POST">
     <div class="form-group">
    <label for="user">User Name</label>
   <input type ="username" name="userName" placeholder="@gmail.com " class="form-control"required>
   </div>
   <div class="form-group">
   <label for="user">Password</label>
   <input type ="password" name="password"class="form-control"required>
   </div>
    <input type="submit" Name ="Login"value="Login"class="submit btn-primary"id="loginbottom">
	<p> No Account?: <a href="registration.php">Register..</a>here</p>
	<p><a href="forgetuser.php">Forget user name</a></p>
	<a href="forgetpass.php">Forget password</a>
	  <p><a href="index.html"> Home</p>
  </form>
  </div>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</body>
</html>