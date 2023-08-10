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
       ">General Medicine</span>

   </div>
   <div class="row g-2">

       <div class="col-md-3">

           <div class="card p-2 py-3 text-center" style="margin:3%;">

               <div class="img mb-2">

                   <img src="../img/Nisha.jpg" width="80" class="rounded-circle">

               </div>

               <h5 class="mb-0">Nisha Jain</h5>
               <small>MBBS, MD,PGD (Diabetology) &middot; 7yrs</small>

               <div class="ratings mt-2">

                   <i class="fa fa-star"></i>
                   <i class="fa fa-star"></i>
                   <i class="fa fa-star"></i>

               </div>

               <div class="mt-4 apointment">

                   <a href="http://localhost/adp/slot.php?val=1008" class="btn btn-info text-uppercase" role="button">Book Appointment</a>

               </div>

           </div>

       </div>




       <div class="col-md-3">

           <div class="card p-2 py-3 text-center"  style="margin:3%;">

               <div class="img mb-2">

                   <img src="../img/sridhar.jpg" width="80" class="rounded-circle">

               </div>

               <h5 class="mb-0">Sridhar Prasad</h5>
               <small>MBBS, DNB (Family Med) &middot; 15yrs</small>

               <div class="ratings mt-2">

                   <i class="fa fa-star"></i>
                   <i class="fa fa-star"></i>
                   <i class="fa fa-star"></i>
                   <i class="fa fa-star"></i>
                   <i class="fa fa-star"></i>

               </div>

               <div class="mt-4 apointment">

                   <a href="http://localhost/adp/slot.php?val=1009" class="btn btn-info text-uppercase" role="button">Book Appointment</a>
               </div>

           </div>

       </div>




       <div class="col-md-3">

           <div class="card p-2 py-3 text-center"  style="margin:3%;">

               <div class="img mb-2">

                   <img src="../img/gupta.jpg" width="80" class="rounded-circle">

               </div>

               <h5 class="mb-0">Jaisri Gupta</h5>
               <small>MBBS, MD (Internal Medicine) &middot; 20yrs</small>

               <div class="ratings mt-2">

                   <i class="fa fa-star"></i>
                   <i class="fa fa-star"></i>
                   <i class="fa fa-star"></i>


               </div>

               <div class="mt-4 apointment">

                   <a href="http://localhost/adp/slot.php?val=1010" class="btn btn-info text-uppercase" role="button">Book Appointment</a>
               </div>

           </div>

       </div>




       <div class="col-md-3">

           <div class="card p-2 py-3 text-center"  style="margin:3%;">

               <div class="img mb-2">

                   <img src="../img/sushant.jpg" width="80" class="rounded-circle">

               </div>

               <h5 class="mb-0">Sushant Raj</h5>
               <small>MBBS, MD &#183; 10 yrs</small>

               <div class="ratings mt-2">

                   <i class="fa fa-star"></i>
                   <i class="fa fa-star"></i>
                   <i class="fa fa-star"></i>


               </div>

               <div class="mt-4 apointment">

                   <a href="http://localhost/adp/slot.php?val=1011" class="btn btn-info text-uppercase" role="button">Book Appointment</a>

               </div>

           </div>

       </div>



       <div class="col-md-3">

           <div class="card p-2 py-3 text-center"  style="margin:3%;">

               <div class="img mb-2">

                   <img src="../img/Narmada.jpg" width="80" class="rounded-circle">

               </div>

               <h5 class="mb-0">Narmada Srinivas</h5>
               <small> MD (Internal Medicine) &middot; 25yrs</small>

               <div class="ratings mt-2">

                   <i class="fa fa-star"></i>
                   <i class="fa fa-star"></i>
                   <i class="fa fa-star"></i>
                   <i class="fa fa-star"></i>

               </div>

               <div class="mt-4 apointment">

                   <a href="http://localhost/adp/slot.php?val=1012" class="btn btn-info text-uppercase" role="button">Book Appointment</a>

               </div>

           </div>

       </div>


       <div class="col-md-3">

           <div class="card p-2 py-3 text-center"  style="margin:3%;">

               <div class="img mb-2">

                   <img src="../img/santhosh.jpg" width="80" class="rounded-circle">

               </div>

               <h5 class="mb-0">Santhosh Raja</h5>
               <small>MBBS, MD &middot; 23yrs</small>

               <div class="ratings mt-2">

                   <i class="fa fa-star"></i>
                   <i class="fa fa-star"></i>
                   <i class="fa fa-star"></i>
                   <i class="fa fa-star"></i>

               </div>

               <div class="mt-4 apointment">

                   <a href="http://localhost/adp/slot.php?val=1013" class="btn btn-info text-uppercase" role="button">Book Appointment</a>

               </div>

           </div>

       </div>



       <div class="col-md-3">

           <div class="card p-2 py-3 text-center"  style="margin:3%;">

               <div class="img mb-2">

                   <img src="../img/Amit.jpg" width="80" class="rounded-circle">

               </div>

               <h5 class="mb-0">Amit Mishra</h5>
               <small> MBBS &middot; 15yrs</small>

               <div class="ratings mt-2">

                   <i class="fa fa-star"></i>
                   <i class="fa fa-star"></i>
                   <i class="fa fa-star"></i>


               </div>

               <div class="mt-4 apointment">

                   <a href="http://localhost/adp/slot.php?val=1014" class="btn btn-info text-uppercase" role="button">Book Appointment</a>

               </div>

           </div>

       </div>



       <div class="col-md-3">

           <div class="card p-2 py-3 text-center"  style="margin:3%;">

               <div class="img mb-2">

                   <img src="../img/vineetha.jpg" width="80" class="rounded-circle">

               </div>

               <h5 class="mb-0">Vineetha Agarwal</h5>
               <small> MBBS, MD &middot; 12yrs</small>

               <div class="ratings mt-2">

                   <i class="fa fa-star"></i>
                   <i class="fa fa-star"></i>
                   <i class="fa fa-star"></i>
                   <i class="fa fa-star"></i>

               </div>

               <div class="mt-4 apointment">

                   <a href="http://localhost/adp/slot.php?val=1015" class="btn btn-info text-uppercase" role="button">Book Appointment</a>

               </div>

           </div>

       </div>









   </div>


  </div>
  </body>
