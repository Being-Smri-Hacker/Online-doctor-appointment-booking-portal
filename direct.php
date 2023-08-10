<?php
session_start();
if (((isset($_SESSION['loggedin'])))&& $_SESSION['loggedin']==true)
{
  header("location:main.php");
  exit();
}
else
{
header("location:index.php");
exit();
}
?>
