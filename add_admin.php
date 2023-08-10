<!DOCTYPE html>
<html>
<head>
	<title>SIGN UP</title>
	<link rel="stylesheet" type="text/css" href="style1.css">
</head>
<body>
     <form action="add_admin_check.php" method="post">
     	<h2>CREATE ADMIN</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>

          <?php if (isset($_GET['success'])) { ?>
               <p class="success"><?php echo $_GET['success']; ?></p>
          <?php } ?>

          <label>Admin Name</label>
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


          <label>Admin Email</label>
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

     	<button type="submit">Create New Admin</button>

     </form>
</body>
</html>
