 


 <!DOCTYPE HTML>  
<html>
<head>
<title>form validation</title>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
 <link rel="stylesheet" href=" https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="style.css">
</head>
<body> 
<div class="container">
    <div class="row">
	<div class="col-sm-6">
   <h1>Sign up</h1>
  <form class="singup"action ="registrationValidation.php"method="POST">
   <div class="form-group">
   <label for ="fname">First Name</label>
   <input type ="text" name="fname"class="form-control"required>
   </div>
   <div class="form-group">
     <label for ="lname">last Name</label>
   <input type ="text" name="lname"class="form-control"required>
   </div>
   <div class="form-group">
     <label for ="phone"> Phone Number</label>
   <input type ="Phone" name="phone"class="form-control"placeholder="Optional">
   </div>
   <div class="form-group">
     <label for ="user">User Name</label>
   <input type ="username" name="userName" placeholder="@gmail.com "class="form-control"required >
   </div>
   <div class="form-group">
   <input type ="password" name="password"class="form-control"required>
   </div>
   <div class="form-group">
     <label for ="p2">confirm password</label>
   <input type ="password" name="conPass"class="form-control"required>
   </div>
   <div class="form-group">
     <div class="custom-control-custom-checkbox">
     <input type ="checkbox" name="remember"class="custom-control-custom-input" id="customControlInline">
	 <label for="customControlInline">Remember me</label>
   </div>
   </div>
   <input type="submit" Name ="Sign"value="Sign up"class="sub btn-primary"id="singup">
   <p>Already Registered<a href="login.php"> login.</a>here</p>
   <p><a href="index.html"> Home</p>
  </form>
  </div>
  </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</body>
</html>
