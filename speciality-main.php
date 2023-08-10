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
<link rel="stylesheet" href="speciality-main.css">
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
      <a href="javascript:void(0)" class="dropbtn"><i class="fa-solid fa-user" style="color:white;margin-right:5px;"></i><?php echo $_SESSION['name']; ?></a>
      <div class="dropdown-content">
        <a href="update_profile.php">Update Profile</a>
        <a href="logout.php">Logout</a>

      </div>
    </li>
    <li><a href="contactus.php">Contact Us</a></li>
    <li ><a href="../adp/adp_home.html">Home</a></li>
  </ul>

<div class="spec" style="text-align:center;margin-top:70px;margin-bottom:70px;font-size:3vw;">Select Speciality</div>

         <div class="row g-0">

           <a href="http://localhost/adp/generalmed.php"><div class="col-md-4 border-right">
                <div class="cards">


                <div class="first bg-white p-4 text-center">
                    <img src="../img/gen.png" class="card-img-top img-fluid" />

                    <h4><strong>General Medicine</strong></h4>
                <p class="line1">Manage acute medical condition</p>
                <p class="line2">Typhoid, Abdominal Pain, Migraine, Infections</p>


                </div>

                 </div>

           </div></a>



        <a href="http://localhost/adp/covids.php"><div class="col-md-4 border-right">
            <div class="cards">
           <div class=" second bg-white p-4 text-center">
                    <img src="../img/covid.jpg" class="card-img-top img-fluid"/ >

                    <h4><strong>Covid Consultation</strong></h4>
                    <p class="line1">Treatment of COVID-19</p>
                    <p class="line2">Cough, Fever, Breathlessness </p>

                </div>
            </div>

        </div></a>




        <a href="http://localhost/adp/gynaecology.php"><div class="col-md-4">

            <div class="cards">
            <div class=" third bg-white p-4 text-center">
                     <img src="../img/gynaec.jpg" class="card-img-top img-fluid"/>
                    <h4><strong>Gynaecology</strong></h4>
                    <p class="line1">For women health issues and surgery</p>
                    <p class="line2">Pregnancy, PCOD/PCOS</p>
                </div>
                </div>



        </div></a>

     </div>

     <div class="row g-0">

       <a href="http://localhost/adp/Pediatrics.php"><div class="col-md-4 border-right">
            <div class="cards">


            <div class="first bg-white p-4 text-center">
                <img src="../img/ped.jpg" class="card-img-top img-fluid" />

                <h4><strong>Pediatrics</strong></h4>
            <p class="line1">Specialists to care and treat children</p>
            <p class="line2">Constipation, Puberty, Nutrition, Autism</p>

            </div>

             </div>

       </div></a>



    <a href="http://localhost/adp/cardiology.php"><div class="col-md-4 border-right">
        <div class="cards">
       <div class=" second bg-white p-4 text-center">
                <img src="../img/heart.jpg" class="card-img-top img-fluid"/>

                <h4><strong>Cardiology</strong></h4>
                <p class="line1">For heart and blood pressure problems</p>
                <p class="line2">Chest pain, Heart Failure, Cholestrol</p>

            </div>
        </div>

    </div></a>




  <a href="http://localhost/adp/Diabetology.php"><div class="col-md-4">

        <div class="cards">
        <div class=" third bg-white p-4 text-center">
                 <img src="../img/diabetes.jpg" class="card-img-top img-fluid"/>
                <h4><strong>Diabetology</strong></h4>
                <p class="line1">Managing all kinds of diabetes</p>
                <p class="line2">Type 1 & Type 2 diabetes, Obesity, Anemia</p>
            </div>
            </div>



    </div></a>

 </div>

 <div class="row g-0">

   <a href="http://localhost/adp/Neurology.php"><div class="col-md-4 border-right">
        <div class="cards">


        <div class="first bg-white p-4 text-center">
            <img src="../img/neuro.jpg" class="card-img-top img-fluid" />

            <h4><strong>Neurology</strong></h4>
        <p class="line1">Managing issues of the nervous system,brain</p>
        <p class="line2">Stroke, Dementia, Epilepsy, Movement issues</p>

        </div>

         </div>

   </div></a>



<a href="http://localhost/adp/Orthopaedics.php"><div class="col-md-4 border-right">
    <div class="cards">
   <div class=" second bg-white p-4 text-center">
            <img src="../img/ort.jpg" class="card-img-top img-fluid"/>

            <h4><strong>Orthopaedics</strong></h4>
            <p class="line1">Managing issues of bones,joints,knees</p>
            <p class="line2">Knee Pain, Shoulder Pain, Bone deformity</p>

        </div>
    </div>

</div></a>




<a href="http://localhost/adp/Gastro.php"><div class="col-md-4">

    <div class="cards">
    <div class=" third bg-white p-4 text-center">
             <img src="../img/gas.jpg" class="card-img-top img-fluid"/>
            <h4><strong>Gastroenterology</strong></h4>
            <p class="line1">Managing digestive health</p>
            <p class="line2">Vomiting, Acidity, Stomach Ulcers, Swallowing</p>
        </div>
        </div>



</div></a>

</div>
</body>
</html>
