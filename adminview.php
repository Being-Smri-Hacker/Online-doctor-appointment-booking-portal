<?php
session_start();
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://kit.fontawesome.com/3688c547c5.js" crossorigin="anonymous"></script>
  <!-- Latest compiled and minified CSS-->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

   <!--jQuery library-->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

  <!--Latest compiled JavaScript-->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="adminview.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Signika+Negative&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Jost&family=Signika+Negative&display=swap" rel="stylesheet">
  </head>
  <body>
    <div class="EC">ExpressCare</div>
    <div class="BD">BookDoc</div>
    <ul class="topnav">
      <li class="dropdown">
        <a href="javascript:void(0)" class="dropbtn"><i class="fa-solid fa-user" style="color:white;margin-right:5px;"></i><?php echo $_SESSION['admin_name']; ?></a>
        <div class="dropdown-content">
          
          <a href="logout.php">Logout</a>

        </div>
      </li>
      <li><a href="add_admin.php">Add Admin</a></li>

    </ul>
    <h1>Booked Appointment Details</h1>
  </script>
  <?php
  include "db_conn.php";
  $sql="select u.id,u.name,u.email,d.doctor_id,d.doctor_name,d.speciality,s.date_of_appt,s.time_of_appt from slots s, appt a, doctor d, users u where s.slot_id=a.slot_id and a.doctor_id=d.doctor_id and a.user_id=u.id order by date_of_appt,doctor_id,time_of_appt";
  $result= mysqli_query($conn, $sql);
echo "
          <div class='table-responsive w-100 d-block d-md-table'>
            <table id='example' style='width:100%' class='table table-striped'>";
  echo "<thead>";
  echo "<tr>
  <th>Patient Id</th>
  <th>Patient Name</th>
  <th>Patient Email</th>
  <th>Doctor ID</th>
  <th>Doctor Name</th>
  <th>Speciality</th>
  <th>Date of Appt.</th>
  <th>Time of Appt</th>
  </tr> </thead> <tbody>";
  while ($row = mysqli_fetch_array($result))
  {
    echo "<tr>";
    echo "<td>";
    echo $row["id"];
    echo "</td>";
    echo "<td>";
    echo $row["name"];
    echo "</td>";
    echo "<td>";
    echo $row["email"];
    echo "</td>";
    echo "<td>";
    echo $row["doctor_id"];
    echo "</td>";
    echo "<td>";
    echo $row["doctor_name"];
    echo "</td>";
    echo "<td>";
    echo $row["speciality"];
    echo "</td>";
    echo "<td>";
    $v1=floor($row['date_of_appt']/10000);
    $v2=floor(($row['date_of_appt']%10000)/100);
    $v3=floor(($row['date_of_appt']%10000)%100);
    if (strlen(strval($v3))==1 && strlen(strval($v2))==1){
    $formatdate="0".strval($v3)."/"."0".strval($v2)."/".strval("$v1");}
    else if (strlen(strval($v3))==1 && strlen(strval($v2))>1){
    $formatdate="0".strval($v3)."/".strval($v2)."/".strval("$v1");}
    else if (strlen(strval($v3))>1 && strlen(strval($v2))==1){
    $formatdate=strval($v3)."/"."0".strval($v2)."/".strval("$v1");}
    else if (strlen(strval($v3))>1 && strlen(strval($v2))>1){
    $formatdate=strval($v3)."/".strval($v2)."/".strval("$v1");}
    echo $formatdate;
    echo "</td>";
    echo "<td>";
    $hrs=strval(floor($row['time_of_appt']/100));
    $mins=$row['time_of_appt']%100;
    if ($mins==0)
    {
      $formattime=$hrs.":".strval($mins)."0";
    }
    else {
      $formattime=$hrs.":".strval($mins);
    }
    echo $formattime;
    echo "</td>";
    echo "</tr>";

  }
  echo "</tdata></table>";
  echo "</div>
        </div>
      </div>
    </div>
  </div>";
   ?>
   <script>
   $(function() {
  $(document).ready(function() {
    $('#example').DataTable();
  });
});
</script>
</body>
</html>
