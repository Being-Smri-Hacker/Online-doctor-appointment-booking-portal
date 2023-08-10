<?php
session_start();


 ?>
 <head>
   <title>Doctors Section</title>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <script src="https://kit.fontawesome.com/3688c547c5.js" crossorigin="anonymous"></script>
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <link rel="stylesheet" href="generalmed.css">
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
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
       <a href="javascript:void(0)" class="dropbtn"><i class="fa-solid fa-user" style="color:white;margin-right:5px;font-size:1em;"></i><?php echo $_SESSION['name']; ?></a>
       <div class="dropdown-content">
         <a href="update_profile.php">Update Profile</a>
         <a href="logout.php">Logout</a>

       </div>
     </li>
     <li><a href="contactus.php">Contact Us</a></li>
     <li ><a href="../adp/adp_home.html">Home</a></li>
   </ul>
 <div class="container mt-5 mb-5">
   <div class="d-flex justify-content-between mb-3" style=" width:100%;
   text-align:center;">

       <span style="font-family:'Jost', sans-serif;

       font-size:3vw;
       width:100%;
       text-align:center;
       margin-top:50px;
       margin-bottom:50px;
       ">Orthopaedics</span>

   </div>
   <div class="row g-2">

       <div class="col-md-3">

           <div class="card p-2 py-3 text-center" style="margin:3%;">

               <div class="img mb-2">

                   <img src="../img/pedia1.jpg" width="80" class="rounded-circle">

               </div>

               <h5 class="mb-0">Raveena Tandon</h5>
               <small>MBBS, MS (Ortho) &middot; 20yrs</small>

               <div class="ratings mt-2">

                   <i class="fa fa-star"></i>
                   <i class="fa fa-star"></i>
                   <i class="fa fa-star"></i>
                   <i class="fa fa-star"></i>

               </div>

               <div class="mt-4 apointment">

                   <a href="http://localhost/adp/slot.php?val=1056" class="btn btn-info text-uppercase" role="button">Book Appointment</a>

               </div>

           </div>

       </div>




       <div class="col-md-3">

           <div class="card p-2 py-3 text-center"  style="margin:3%;">

               <div class="img mb-2">

                   <img src="../img/Cardio7.jpg" width="80" class="rounded-circle">

               </div>

               <h5 class="mb-0">Rosy Hazlewood</h5>
               <small>MBBS, D'Ortho &middot; 12yrs</small>

               <div class="ratings mt-2">

                   <i class="fa fa-star"></i>
                   <i class="fa fa-star"></i>
                   <i class="fa fa-star"></i>
                   <i class="fa fa-star"></i>


               </div>

               <div class="mt-4 apointment">

                   <a href="http://localhost/adp/slot.php?val=1057" class="btn btn-info text-uppercase" role="button">Book Appointment</a>
               </div>

           </div>

       </div>




       <div class="col-md-3">

           <div class="card p-2 py-3 text-center"  style="margin:3%;">

               <div class="img mb-2">

                   <img src="../img/Rani.jpg" width="80" class="rounded-circle">

               </div>

               <h5 class="mb-0">TamilSelvi</h5>
               <small> MBBS, MS (Ortho) &middot; 35yrs</small>

               <div class="ratings mt-2">

                   <i class="fa fa-star"></i>
                   <i class="fa fa-star"></i>
                   <i class="fa fa-star"></i>
                   <i class="fa fa-star"></i>
                   <i class="fa fa-star"></i>


               </div>

               <div class="mt-4 apointment">

                   <a href="http://localhost/adp/slot.php?val=1058" class="btn btn-info text-uppercase" role="button">Book Appointment</a>
               </div>

           </div>

       </div>




       <div class="col-md-3">

           <div class="card p-2 py-3 text-center"  style="margin:3%;">

               <div class="img mb-2">

                   <img src="../img/diab4.jpg" width="80" class="rounded-circle">

               </div>

               <h5 class="mb-0">Ashwini Kumar</h5>
               <small>MBBS, MS (Ortho)&#183; 10 yrs</small>

               <div class="ratings mt-2">

                   <i class="fa fa-star"></i>
                   <i class="fa fa-star"></i>
                   <i class="fa fa-star"></i>


               </div>

               <div class="mt-4 apointment">

                   <a href="http://localhost/adp/slot.php?val=1059" class="btn btn-info text-uppercase" role="button">Book Appointment</a>
               </div>

           </div>

       </div>



       <div class="col-md-3">

           <div class="card p-2 py-3 text-center"  style="margin:3%;">

               <div class="img mb-2">

                   <img src="../img/pedia7.jpg" width="80" class="rounded-circle">

               </div>

               <h5 class="mb-0">Ramika Sen</h5>
               <small> MBBS, DNB (Orthopaedic) &middot; 18yrs</small>

               <div class="ratings mt-2">

                   <i class="fa fa-star"></i>
                   <i class="fa fa-star"></i>
                   <i class="fa fa-star"></i>
                   <i class="fa fa-star"></i>

               </div>

               <div class="mt-4 apointment">

                   <a href="http://localhost/adp/slot.php?val=1060" class="btn btn-info text-uppercase" role="button">Book Appointment</a>
               </div>

           </div>

       </div>


       <div class="col-md-3">

           <div class="card p-2 py-3 text-center"  style="margin:3%;">

               <div class="img mb-2">

                   <img src="../img/Padma.jpg" width="80" class="rounded-circle">

               </div>

               <h5 class="mb-0">Priyadharshini</h5>
               <small>MBBS, MS (Ortho) &middot; 23yrs</small>

               <div class="ratings mt-2">

                   <i class="fa fa-star"></i>
                   <i class="fa fa-star"></i>
                   <i class="fa fa-star"></i>
                   <i class="fa fa-star"></i>

               </div>

               <div class="mt-4 apointment">

                   <a href="http://localhost/adp/slot.php?val=1061" class="btn btn-info text-uppercase" role="button">Book Appointment</a>
               </div>

           </div>

       </div>



       <div class="col-md-3">

           <div class="card p-2 py-3 text-center"  style="margin:3%;">

               <div class="img mb-2">

                   <img src="../img/Rajasri.jpg" width="80" class="rounded-circle">

               </div>

               <h5 class="mb-0">Ananya Prathap</h5>
               <small> MBBS, MS (Ortho) &middot; 22yrs</small>

               <div class="ratings mt-2">

                   <i class="fa fa-star"></i>
                   <i class="fa fa-star"></i>
                   <i class="fa fa-star"></i>
                   <i class="fa fa-star"></i>


               </div>

               <div class="mt-4 apointment">

                   <a href="http://localhost/adp/slot.php?val=1062" class="btn btn-info text-uppercase" role="button">Book Appointment</a>
               </div>

           </div>

       </div>



       <div class="col-md-3">

           <div class="card p-2 py-3 text-center"  style="margin:3%;">

               <div class="img mb-2">

                   <img src="../img/prem.jpg" width="80" class="rounded-circle">

               </div>

               <h5 class="mb-0">Prajan Kumar</h5>
               <small> MBBS, DNB (Orthopaedic) &middot; 30yrs</small>

               <div class="ratings mt-2">

                   <i class="fa fa-star"></i>
                   <i class="fa fa-star"></i>
                   <i class="fa fa-star"></i>
                   <i class="fa fa-star"></i>

               </div>

               <div class="mt-4 apointment">

                   <a href="http://localhost/adp/slot.php?val=1063" class="btn btn-info text-uppercase" role="button">Book Appointment</a>
               </div>

           </div>

       </div>









   </div>


  </div>
  </body>
