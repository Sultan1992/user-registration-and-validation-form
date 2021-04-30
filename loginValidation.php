<?php
require "connection.php";

if(isset($_POST['Login'])){

    $uname = mysqli_real_escape_string($conn,$_POST['userName']);
    $password = mysqli_real_escape_string($conn,$_POST['password']);

    if ($uname != "" && $password != ""){

        $sql_query = "select count(*) as cntUser from users where Username='".$uname."' and Password='".$password."'";
        $result = mysqli_query($conn,$sql_query);
        $row = mysqli_fetch_array($result);

        $count = $row['cntUser'];

        if($count > 0){
            $_SESSION['uname'] = $uname;
			echo"loged in";
            //header('Location: Home.php');
        }else{
            echo "Invalid username and password";
        }

    }

}