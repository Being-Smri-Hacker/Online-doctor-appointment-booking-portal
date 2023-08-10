<?php 
session_start(); 
include "db_conn.php";

if (isset($_POST['uname']) && isset($_POST['password'])
    && isset($_POST['name']) && isset($_POST['re_password']) && isset($_POST['email'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$uname = validate($_POST['uname']);
	$pass = validate($_POST['password']);

	$re_pass = validate($_POST['re_password']);
	$name = validate($_POST['name']);
	$email = validate($_POST['email']);

	$user_data = 'uname='. $uname. '&name='. $name;

	if(empty($name)){
        header("Location: signup.php?error=Name is required&$user_data");
	    exit();
	}
	else if (empty($uname)) {
		header("Location: signup.php?error=User Name is required&$user_data");
	    exit();
	}
	else if (strlen($uname)<5) {
		header("Location: signup.php?error=User Name must be 5 characters long&$user_data");
	    exit();
	}
	else if(empty($email)){
        header("Location: signup.php?error=Email is required&$user_data");
	    exit();
	}else if(empty($pass)){
        header("Location: signup.php?error=Password is required&$user_data");
	    exit();
	}
	else if(strlen($pass)<6){
        header("Location: signup.php?error=Password must be 6 characters long&$user_data");
	    exit();
	}
	else if(empty($re_pass)){
        header("Location: signup.php?error=Confirm Password is required&$user_data");
	    exit();
	}
	else if($pass !== $re_pass){
        header("Location: signup.php?error=The confirmation password  does not match&$user_data");
	    exit();
	}

	else{

		// hashing the password
        $pass = md5($pass);

	    $sql = "SELECT * FROM users WHERE email='$email' ";
		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) > 0) {
			header("Location: signup.php?error=This email is already associated with another account&$user_data");
	        exit();
		}else {
           $sql2 = "INSERT INTO users(user_name, password, name, email) VALUES('$uname', '$pass', '$name','$email')";
           $result2 = mysqli_query($conn, $sql2);
           if ($result2) {
           	 header("Location: signup.php?success=Your account has been created successfully! Login to continue");
	         exit();
           }else {
	           	header("Location: signup.php?error=unknown error occurred&$user_data");
		        exit();
           }
		}
	}
	
}else{
	header("Location: signup.php");
	exit();
}