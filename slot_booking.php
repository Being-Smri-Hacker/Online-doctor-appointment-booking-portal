<style>
* {
  padding: 0;
  margin: 0;
  box-sizing: border-box;
  font-family: 'Poppins', sans-serif;
}

body {
  min-height: 100vh;
  width: 100%;
  display: flex;
  justify-content: center;
  align-items: center;
  background-image: url(../img/docthumbs.jpg);
  background-size: cover;
  background-position: center;
  position: relative;
}

body::after {
  content: "";
  position: absolute;
  top: 0;
  left: 0;
  height: 100%;
  width: 100%;
  background-color: rgba(81, 34, 70, 0.8);
}

section {
  position: relative;
  z-index: 3;
  padding-top: 50px;
  padding-bottom: 50px;
  color:white;
}

.container {
  max-width: 1080px;
  margin-left: 10%;
  margin-right: 10%;
  padding-left: 20px;
  padding-right: 20px;
}

.section-header {
  margin-bottom: 50px;
  text-align: center;
}

.section-header h2 {
  color: #FFF;
  font-weight: bold;
  font-size: 3em;
  margin-bottom: 20px;
}

.section-header p {
  color: #FFF;
}

.row  {
  display: flex;
  flex-wrap: wrap;
  align-items: center;
  justify-content: space-between;
}

.contact-info {
  width: 100%;
  align-items:center;
  text-align:center;
  line-height:30px;

}
a:hover
{
  background-color:rgba(81, 34, 70, 0.8)	;
}
a:link
{
  border:1px solid grey;
  color:white;
  text-decoration:none;
  padding:10px;
  margin-top:30px;
  border-radius:5px;
}

</style>
<?php
session_start();
include "db_conn.php";
if(isset($_GET['val'])){

    $docid = $_GET['val'];

}
$uid=$_SESSION['id'];
$name=$_SESSION['name'];
if(isset($_GET['time'])){

    $slot = $_GET['time'];
}
$date=$_SESSION['slot_date'];
$sql = "select appt_id from appt order by appt_id desc";
$result = mysqli_query($conn, $sql);
$row=mysqli_fetch_array($result);
$id=$row['appt_id']+1;
$sql2= "select slot_id from slots where date_of_appt='$date' and time_of_appt='$slot'";
$result2 = mysqli_query($conn, $sql2);
$row2=mysqli_fetch_array($result2);
$slotid=$row2['slot_id'];
$sql1="insert into appt (appt_id,doctor_id,slot_id,user_id) values ('$id','$docid','$slotid','$uid')";
$result1 = mysqli_query($conn, $sql1);
$sql3= "select doctor_name from Doctor where doctor_id='$docid'";
$result3 = mysqli_query($conn, $sql3);
$row3=mysqli_fetch_array($result3);
$docname=$row3['doctor_name'];
if ($result1) {?>
<section>
<div class="section-header">
<div class="container">
<h1>Your appointment has been booked successfully</h1>
</div>
</div>
<?php } else{ ?>
<h1>Your appointment failed</h1>
<?php }
if ($result1){?>
<div class="container">
<div class="row">
<div class="contact-info">
<p>Appointment Details</p>
</div>
<div class="contact-info">
<p>Appointment ID:<?php echo $id;?></p>
</div>
<div class="contact-info">
<p>Patient Name:<?php echo $name;?></p>
</div>
<div class="contact-info">
<p>Doctor Name:<?php echo $docname;?></p>
</div>
<?php
$hrs=strval(floor($slot/100));
$mins=$slot%100;
if ($mins==0)
{
  $formattime=$hrs.":".strval($mins)."0";
}
else {
  $formattime=$hrs.":".strval($mins);
}

$v1=floor($date/10000);
$v2=floor(($date%10000)/100);
$v3=floor(($date%10000)%100);
if (strlen(strval($v3))==1 && strlen(strval($v2))==1){
$formatdate="0".strval($v3)."/"."0".strval($v2)."/".strval("$v1");}
else if (strlen(strval($v3))==1 && strlen(strval($v2))>1){
$formatdate="0".strval($v3)."/".strval($v2)."/".strval("$v1");}
else if (strlen(strval($v3))>1 && strlen(strval($v2))==1){
$formatdate=strval($v3)."/"."0".strval($v2)."/".strval("$v1");}
else if (strlen(strval($v3))>1 && strlen(strval($v2))>1){
$formatdate=strval($v3)."/".strval($v2)."/".strval("$v1");}
?>
<div class="contact-info">
<p>Date:<?php echo $formatdate;?></p>
</div>
<div class="contact-info">
<p>Time:<?php echo $formattime;?></p><?php }?>
</div>
<div class="contact-info" style="margin-top:15px;">
<a href="main.php" style="color:white;">Return to Main Page</a>
</div>
</div>
</div>
</section>
