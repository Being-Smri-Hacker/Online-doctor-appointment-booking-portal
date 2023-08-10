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
        header("Location: update_profile.php?error=Name is required&$user_data");
	    exit();
	}
	else if (empty($uname)) {
		header("Location: update_profile.php?error=User Name is required&$user_data");
	    exit();
	}
	else if (strlen($uname)<5) {
		header("Location: update_profile.php?error=User Name must be 5 characters long&$user_data");
	    exit();
	}
	else if(empty($email)){
        header("Location: update_profile.php?error=Email is required&$user_data");
	    exit();
	}else if(empty($pass)){
        header("Location: update_profile.php?error=Password is required&$user_data");
	    exit();
	}
	else if(strlen($pass)<6){
        header("Location: update_profile.php?error=Password must be 6 characters long&$user_data");
	    exit();
	}
	else if(empty($re_pass)){
        header("Location: update_profile.php?error=Confirm Password is required&$user_data");
	    exit();
	}
	else if($pass !== $re_pass){
        header("Location: update_profile.php?error=The confirmation password  does not match&$user_data");
	    exit();
	}

	else{

		// hashing the password
        $pass = md5($pass);

	    $sql = "SELECT * FROM users WHERE email='$email' ";
		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) > 0) {
			header("Location: update_profile.php?error=This email is already associated with another account&$user_data");
	        exit();
		}else {
            $curremail=$_SESSION["email"];
           $sql2 = "UPDATE users set user_name='$uname', password='$pass', name='$name', email='$email' where email='$curremail'";
           $result2 = mysqli_query($conn, $sql2);
           if ($result2) {
             $_SESSION['user_name'] = $uname;
             $_SESSION['name'] = $name;
       $_SESSION['email'] = $email;
           	 header("Location: update_success.php");
	         exit();
           }else {
	           	header("Location: update_profile.php?error=unknown error occurred&$user_data");
		        exit();
           }
		}
	}

}else{
	header("Location: update_profile.php");
	exit();
}
