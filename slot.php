<?php error_reporting (E_ALL ^ E_NOTICE);
session_start();
if(isset($_GET['val'])){
  $docid=$_GET['val'];
}
$_SESSION["slot_date"]=0;
include "db_conn.php";
$sql2="select doctor_name from doctor where doctor_id='$docid'";
$result2=mysqli_query($conn, $sql2);
$row1= mysqli_fetch_array($result2);
$doctorname=$row1["doctor_name"];

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
  <link rel="stylesheet" href="slot.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Signika+Negative&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Jost&family=Signika+Negative&display=swap" rel="stylesheet">
  <style>
  .enabled
  {
    appearance: none;
  background-color: transparent;
  border: 2px solid #c9a0dc;
  border-radius: 15px;
  box-sizing: border-box;
  color: black;
  cursor: pointer;
  display: inline-block;
  font-family: Roobert,-apple-system,BlinkMacSystemFont,"Segoe UI",Helvetica,Arial,sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol";
  font-size: 16px;
  font-weight: 600;
  line-height: normal;
  margin: 0;
  min-height: 60px;
  min-width: 0;
  outline: none;
  padding: 16px 24px;
  text-align: center;
  text-decoration: none;
  transition: all 300ms cubic-bezier(.23, 1, 0.32, 1);
  user-select: none;
  -webkit-user-select: none;
  touch-action: manipulation;
  width: 100%;
  will-change: transform;
  }
  .slots
  {
    appearance: none;
  background-color: transparent;
  border: 2px solid #c9a0dc;
  border-radius: 15px;
  box-sizing: border-box;
  color: black;
  cursor: pointer;
  display: inline-block;
  font-family: Roobert,-apple-system,BlinkMacSystemFont,"Segoe UI",Helvetica,Arial,sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol";
  font-size: 16px;
  font-weight: 600;
  line-height: normal;
  margin: 0;
  min-height: 60px;
  min-width: 0;
  outline: none;
  padding: 16px 24px;
  text-align: center;
  text-decoration: none;
  transition: all 300ms cubic-bezier(.23, 1, 0.32, 1);
  user-select: none;
  -webkit-user-select: none;
  touch-action: manipulation;
  width: 200px;
  will-change: transform;
  }
  .slots:hover
  {
    background-color:#c9a0dc;
    border:none;
    color:white;
  }
  .enabled:hover {
  color: rgb(6, 5, 5);
  background-color:white;
  box-shadow: rgba(176, 75, 137, 0.25) 0 8px 15px;
  transform: translateY(-2px);
}
.enabled:active
{
  box-shadow: none;
  transform: translateY(0);
}
body{
  background-color:#c9a0dc ; /* For browsers that do not support gradients */
  background-image: linear-gradient(230deg, #c9a0dc, white,#c9a0dc);
  width:100%;
  background-attachment:fixed;

}

  .flex
  {
    display:flex;
    justify-content:center;
    align-items:center;
    column-gap:5%;
    margin-right:8%;
    margin-left:12%;
  }


</style>
  </head>
  <body>
    <div class="EC">ExpressCare</div>
    <div class="BD">BookDoc</div>
    <ul class="topnav">
      <li class="dropdown">
        <a href="javascript:void(0)" class="dropbtn"><i class="fa-solid fa-user" style="color:white;margin-right:5px;"></i><?php echo $_SESSION['name']; ?></a>
        <div class="dropdown-content">
          <a href="update_profile.php">Update Profile</a>
          <a href="logout.php">Logout</a>

        </div>
      </li>
      <li><a href="contactus.php">Contact Us</a></li>
      <li ><a href="../adp/adp_home.html">Home</a></li>
    </ul>
    <h4 style="text-align:center;margin-top:20px;font-size:2vw;">Book an Appointment with Dr.<?php echo $doctorname;?>!</h2>
    <form action="#" method="post" style="display:block;margin-top:50px;text-align:center;" onsubmit="window.alert('Now click view slots!');">
    <div id="list" style="display:block;margin-top:50px;text-align:center;"></div>
    <input type="submit" name="submit" id="submit" onclick="return validate()" style="margin-top:100px;" value="Search time Slots" class="slots">
    <!--<button onclick="display_buttons()" type="submit">button</button>-->
    </form>
    <div style="display:block;margin-top:50px;text-align:center;">
    <button id="view" onclick="display_buttons()" class="slots">View Time Slots</button>
  </div>
    <!--<button onclick="display_buttons()" type="submit">button</button>-->
    <!--<button onclick="display_buttons()">button</button>-->
    <div id="slots" style="visibility:hidden;margin-top:50px;text-align:center;">
    <div class="flex" width="100%">
    <a href="slot_booking.php?val=<?php echo $docid?>&time=1800"><button id="s1" value='1800' class="enabled" onclick="slot_booking.php">18:00</button></a>
    <a href="slot_booking.php?val=<?php echo $docid?>&time=1830"><button id="s2" value='1830' class="enabled">18:30</button></a>
    <a href="slot_booking.php?val=<?php echo $docid?>&time=1900"><button id="s3" value='1900' class="enabled">19:00</button></a>
    <a href="slot_booking.php?val=<?php echo $docid?>&time=1930"><button id="s4" value='1930' class="enabled">19:30</button></a>
    <a href="slot_booking.php?val=<?php echo $docid?>&time=2000"><button id="s5" value='2000' class="enabled">20:00</button></a>
    <a href="slot_booking.php?val=<?php echo $docid?>&time=2030"><button id="s6" value='2030' class="enabled">20:30</button></a>
  </div>
</div>


  <script>
var arr=[];
var valarr=[];
var today=new Date();
var todday = today.getDate();
var todmonth = today.getMonth() + 1;
var todyear = today.getFullYear();
var finaltoday=todday + "/" + todmonth + "/" + todyear;
valarr[0]=todyear*10000+todmonth*100+todday;
arr[0]=finaltoday;

var tom = new Date(today.getTime() + 24 * 60 * 60 * 1000);
var tomday = tom.getDate();
var tommonth = tom.getMonth() + 1;
var tomyear = tom.getFullYear();
var finaltom=tomday + "/" + tommonth + "/" + tomyear;
valarr[1]=tomyear*10000+tommonth*100+tomday;
arr[1]=finaltom;

var dat = new Date(today.getTime() +24 * 60 * 60 * 1000+24 * 60 * 60 * 1000);
var datday = dat.getDate();
var datmonth = dat.getMonth() + 1;
var datyear = dat.getFullYear();
var finaldat=datday + "/" + datmonth + "/" + datyear;
valarr[2]=datyear*10000+datmonth*100+datday;
arr[2]=finaldat;
var select = document.createElement("select");
 select.name = "arr";
 select.id = "arr";
 var optn = "Select";
 var el = document.createElement("option");
 el.textContent = optn;
 el.value = "";
 select.appendChild(el);
for (var i = 0; i < 3; i++) {
				var optn = arr[i];
				var el = document.createElement("option");
				el.textContent = optn;
				el.value = valarr[i];
				select.appendChild(el);
			}
      var label = document.createElement("label");
label.innerHTML = "Select Date: "
label.htmlFor = "arr";
document.getElementById("list").appendChild(label).appendChild(select);

</script>
<?php error_reporting (E_ALL ^ E_NOTICE);

if(isset($_GET['val'])){

    $docid = $_GET['val'];


}
if(isset($_POST['submit'])){
if(!empty($_POST['arr'])) {
    $selected = $_POST['arr'];

  }}

include "db_conn.php";

$uid=$_SESSION['id'];
$_SESSION['slot_date']=$selected;

    $sql = "select s.slot_id,a.doctor_id,a.user_id,s.time_of_appt from slots s, appt a where s.slot_id=a.slot_id and a.doctor_id='$docid' and s.date_of_appt='$selected'";
    $sql1="select slot_id,time_of_appt from slots where date_of_appt='$selected'";

    $result1=mysqli_query($conn, $sql1);
    $result = mysqli_query($conn, $sql);
    $i=0;
    $all_time_slots=array();
    $all_slots_id=array();
    while ($row = mysqli_fetch_array($result1)) {
      $all_time_slots[$i]=$row['time_of_appt'];
      $all_slots_id[$i]=$row['slot_id'];
      $i++;
    }
    $j=0;
    $booked_time_slots=array();
    $booked_slots_id=array();

    while ($row = mysqli_fetch_array($result)) {
      $booked_time_slots[$j]=$row['time_of_appt'];
      $booked_slots_id[$j]=$row['slot_id'];
      $j++;
    }
?>

<script>
var passedArray = <?php echo json_encode($all_time_slots); ?>;
var passedArray1 = <?php echo json_encode($all_slots_id); ?>;
var passedArray2 = <?php echo json_encode($booked_time_slots); ?>;
var passedArray3 = <?php echo json_encode($booked_slots_id); ?>;
var seldate = <?php echo json_encode($selected); ?>;
/*document.getElementById("selected_date").value=seldate;
console.log(document.getElementById("selected_date").value)*/
function validate()
{
  if(document.getElementsByTagName("select")[0].value=="")
  {
    window.alert("Please fill a date");
    return false;
  }
}

function display_buttons()
{
//document.getElementById("list").style.visibility="hidden";
console.log(passedArray3.length);
  document.getElementById("slots").style.visibility="";

  var x=document.getElementsByClassName("enabled");
  console.log(x.length);
  for (let i=0;i<x.length;i++)
  {
    var flag=0;
    console.log("pp");
    for (let j=0;j<passedArray2.length;j++)
    {
      console.log("aaa");
      if (x[i].value==passedArray2[j])
      {
        x[i].disabled="true";
        x[i].style.color="grey";
        x[i].style.borderColor="grey";
        x[i].style.boxShadow="none";
        x[i].style.transform="translateY(0)";
        x[i].style.backgroundColor="transparent";

      }
    }

  }
}


</script>

</body>
</html>
