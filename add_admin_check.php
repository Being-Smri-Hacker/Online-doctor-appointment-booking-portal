<?php
session_start();
include "db_conn.php";

if (isset($_POST['password'])
    && isset($_POST['name']) && isset($_POST['re_password']) && isset($_POST['email'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}


	$pass = validate($_POST['password']);

	$re_pass = validate($_POST['re_password']);
	$name = validate($_POST['name']);
	$email = validate($_POST['email']);

	$user_data = '&name='. $name;

	if(empty($name)){
        header("Location: add_admin.php?error=Admin Name is required&$user_data");
	    exit();
	}

	else if (strlen($name)<5) {
		header("Location: add_admin.php?error=Admin Name must be 5 characters long&$user_data");
	    exit();
	}
	else if(empty($email)){
        header("Location: add_admin.php?error=Email is required&$user_data");
	    exit();
	}else if(empty($pass)){
        header("Location: add_admin.php?error=Password is required&$user_data");
	    exit();
	}
	else if(strlen($pass)<6){
        header("Location: add_admin.php?error=Password must be 6 characters long&$user_data");
	    exit();
	}
	else if(empty($re_pass)){
        header("Location: add_admin.php?error=Confirm Password is required&$user_data");
	    exit();
	}
	else if($pass !== $re_pass){
        header("Location: add_admin.php?error=The confirmation password  does not match&$user_data");
	    exit();
	}

	else{

		// hashing the password
        $pass = md5($pass);

	    $sql = "SELECT * FROM admin WHERE email='$email' ";
		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) > 0) {
			header("Location: add_admin.php?error=This email is already associated with another admin&$user_data");
	        exit();
		}else {
          $_SESSION['new_admin']=$name;
          $_SESSION['new_admin_email']=$email;
           $sql2 = "INSERT INTO admin(password, name, email) VALUES('$pass', '$name','$email')";
           $result2 = mysqli_query($conn, $sql2);
           if ($result2) {
           	 header("Location: continue_admin.php?admin=$name&email=$email");
	         exit();
           }else {
	           	header("Location: add_admin.php?error=unknown error occurred&$user_data");
		        exit();
           }
		}
	}

}else{
	header("Location: add_admin.php");
	exit();
}
