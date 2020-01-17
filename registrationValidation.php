
  <?php
  session_start();
     require "connection.php";
	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
	$phone=$_POST['phone'];
	$user=$_POST['userName'];
	$password=$_POST['password'];
	$password2=$_POST['conPass'];

	if(empty($lname)||empty($lname)||empty($user)||empty($password)||empty($password2)){
		header("location: registration.php?error=emptyfeilds&lname=".$lname."&userName=".$user);//send back information the user already typed.
		exit();
		
	}
   else if($password!==$password2){
		echo"password does not match";
		//header("location: registration.php?");
		exit();
}
 else  {
	$sql= "select  username from users where username=? ";
	$stmt=mysqli_stmt_init($conn);
	if(!mysqli_stmt_prepare($stmt,$sql)){
		echo " sql error";
		exit();
	}

else {
	mysqli_stmt_bind_param($stmt,"s",$user);//pass information from the user. 
	mysqli_stmt_execute($stmt);
	mysqli_stmt_store_result($stmt);//get the result from and store in stmt. variable.
   $checkUser=mysqli_stmt_num_rows($stmt);
	if($checkUser>0){
		echo"User name or email already exist.";
		header("location: registration.php?");
		exit();
	}
else{
		$sql=" Insert into users(fname,lname,phone,username,password) Values (?,?,?,?,?)";
		$stmt=mysqli_stmt_init($conn);//refer to the variable we connection to connect the data base.
		if(!mysqli_stmt_prepare($stmt,$sql)){// make sure their is no problem during we insert data to the table. 
			echo"Data not inserted.";
			exit();
		}
		else{
			//encrypt password to avoid unnecessary data breach.
			$securePassword=password_hash($password,PASSWORD_DEFAULT);
			mysqli_stmt_bind_param($stmt,"sssss",$fname,$lname,$phone,$user,$securePassword);
			mysqli_stmt_execute($stmt);
			
    echo "<script type='text/javascript'>alert('Login Credentials verified')</script>";
	header( "location:login.php");
	     
		}
	}
}

 }
  
  
 
 
