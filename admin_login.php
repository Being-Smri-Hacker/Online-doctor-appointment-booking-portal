<?php
session_start();
include "db_conn.php";

if (isset($_POST['email']) && isset($_POST['password'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$email= validate($_POST['email']);
	$pass = validate($_POST['password']);

	if (empty($email)) {
		header("Location: admin_index.php?error=Email Id is required");
	    exit();
	}else if(empty($pass)){
        header("Location: admin_index.php?error=Password is required");
	    exit();
	}else{
		// hashing the password
        $pass = md5($pass);


		$sql = "SELECT * FROM admin WHERE email='$email' AND password='$pass'";

		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) == 1) {
			$row = mysqli_fetch_assoc($result);
            if ($row['email'] == $email && $row['password'] == $pass) {
							$_SESSION['loggedin']=true;
            	$_SESSION['admin_uname'] = $row['admin_uname'];
            	$_SESSION['admin_name'] = $row['name'];
            	$_SESSION['admin_id'] = $row['admin_id'];
				$_SESSION['email'] = $row['email'];
            	header("Location: adminview.php");
		        exit();
            }else{
				header("Location: admin_index.php?error=Incorect Email Id or password");
		        exit();
			}
		}else{
			header("Location: admin_index.php?error=Incorect Email Id or password");
	        exit();
		}
	}

}else{
	header("Location: admin_index.php");
	exit();
}
