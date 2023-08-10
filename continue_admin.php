<?php
session_start();
if (isset($_GET['admin']))
{
	$ad=$_GET['admin'];
}
if (isset($_GET['email']))
{
	$adem=$_GET['email'];
}
?>
<!DOCTYPE html>
<html>
<head>
<style>
body {
	background-color: #c9a0dc;
	display: flex;
	justify-content: center;
	align-items: center;
	height: 100vh;
	flex-direction: column;
	color:white;
	font-family: sans-serif;
}
</style>
</head>
<body>
<h1>New Admin was created Successfully!</h1>
<h2>Admin name:<?php echo $ad?></h2>
<h2>Admin Email:<?php echo $adem?></h2>
<a href="adminview.php"><button>ok</button></a>
</body>
</html>
