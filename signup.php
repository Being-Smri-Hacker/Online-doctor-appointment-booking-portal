<!DOCTYPE html>
<html>
<head>
	<title>SIGN UP</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
     <form action="signup-check.php" method="post">
     	<h2>SIGN UP</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>

          <?php if (isset($_GET['success'])) { ?>
               <p class="success"><?php echo $_GET['success']; ?></p>
          <?php } ?>

          <label>Name</label>
          <?php if (isset($_GET['name'])) { ?>
               <input type="text"
                      name="name"
                      placeholder="Name"
                      value="<?php echo $_GET['name']; ?>"><br>
          <?php }else{ ?>
               <input type="text"
                      name="name"
                      placeholder="Name"><br>
          <?php }?>

          <label>User Name</label>
          <?php if (isset($_GET['uname'])) { ?>
               <input type="text"
                      name="uname"
                      placeholder="User Name"
                      value="<?php echo $_GET['uname']; ?>"><br>
          <?php }else{ ?>
               <input type="text"
                      name="uname"
                      placeholder="User Name"><br>
          <?php }?>
          <label>Email</label>
          <?php if (isset($_GET['email'])) { ?>
               <input type="email"
                      name="email"
                      placeholder="Email"
                      value="<?php echo $_GET['email']; ?>"><br>
          <?php }else{ ?>
               <input type="email"
                      name="email"
                      placeholder="Email"><br>
          <?php }?>


     	<label>Password</label>
     	<input type="password"
                 name="password"
                 placeholder="Password"><br>

          <label>Confirm Password</label>
          <input type="password"
                 name="re_password"
                 placeholder="Confirm Password"><br>

     	<button type="submit">Sign Up</button>
          Already have an account?<a href="index.php" class="ca">Login</a>
     </form>
</body>
</html>
