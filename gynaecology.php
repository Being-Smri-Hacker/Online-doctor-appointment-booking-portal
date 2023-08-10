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
       ">Gynaecology</span>

   </div>
   <div class="row g-2">

       <div class="col-md-3">

           <div class="card p-2 py-3 text-center" style="margin:3%;">

               <div class="img mb-2">

                   <img src="../img/Nandy.jpg" width="80" class="rounded-circle">

               </div>

               <h5 class="mb-0">Nandhini Rajan</h5>
               <small>MBBS, DGO &middot; 7yrs</small>

               <div class="ratings mt-2">

                   <i class="fa fa-star"></i>
                   <i class="fa fa-star"></i>
                   <i class="fa fa-star"></i>

               </div>

               <div class="mt-4 apointment">

                   <a href="http://localhost/adp/slot.php?val=1024" class="btn btn-info text-uppercase" role="button">Book Appointment</a>

               </div>

           </div>

       </div>




       <div class="col-md-3">

           <div class="card p-2 py-3 text-center"  style="margin:3%;">

               <div class="img mb-2">

                   <img src="../img/Shwetha.jpg" width="80" class="rounded-circle">

               </div>

               <h5 class="mb-0">Shwetha Srinath</h5>
               <small>MBBS, DGO &middot; 15yrs</small>

               <div class="ratings mt-2">

                   <i class="fa fa-star"></i>
                   <i class="fa fa-star"></i>
                   <i class="fa fa-star"></i>
                   <i class="fa fa-star"></i>
                   <i class="fa fa-star"></i>

               </div>

               <div class="mt-4 apointment">

                   <a href="http://localhost/adp/slot.php?val=1025" class="btn btn-info text-uppercase" role="button">Book Appointment</a>
               </div>

           </div>

       </div>




       <div class="col-md-3">

           <div class="card p-2 py-3 text-center"  style="margin:3%;">

               <div class="img mb-2">

                   <img src="../img/Thean.jpg" width="80" class="rounded-circle">

               </div>

               <h5 class="mb-0">Thaenmozhi Selvam</h5>
               <small>MBBS, MS (Gyn) &middot; 30yrs</small>

               <div class="ratings mt-2">

                   <i class="fa fa-star"></i>
                   <i class="fa fa-star"></i>
                   <i class="fa fa-star"></i>


               </div>

               <div class="mt-4 apointment">

                   <a href="http://localhost/adp/slot.php?val=1026" class="btn btn-info text-uppercase" role="button">Book Appointment</a>
               </div>

           </div>

       </div>




       <div class="col-md-3">

           <div class="card p-2 py-3 text-center"  style="margin:3%;">

               <div class="img mb-2">

                   <img src="../img/Rani.jpg" width="80" class="rounded-circle">

               </div>

               <h5 class="mb-0">Rani Singh</h5>
               <small>MBBS, DGO &#183; 10 yrs</small>

               <div class="ratings mt-2">

                   <i class="fa fa-star"></i>
                   <i class="fa fa-star"></i>
                   <i class="fa fa-star"></i>


               </div>

               <div class="mt-4 apointment">

                   <a href="http://localhost/adp/slot.php?val=1027" class="btn btn-info text-uppercase" role="button">Book Appointment</a>

               </div>

           </div>

       </div>



       <div class="col-md-3">

           <div class="card p-2 py-3 text-center"  style="margin:3%;">

               <div class="img mb-2">

                   <img src="../img/preetha.jpg" width="80" class="rounded-circle">

               </div>

               <h5 class="mb-0">S Preetha</h5>
               <small> MBBS, MS (Gyn) &middot; 25yrs</small>

               <div class="ratings mt-2">

                   <i class="fa fa-star"></i>
                   <i class="fa fa-star"></i>
                   <i class="fa fa-star"></i>
                   <i class="fa fa-star"></i>

               </div>

               <div class="mt-4 apointment">

                   <a href="http://localhost/adp/slot.php?val=1028" class="btn btn-info text-uppercase" role="button">Book Appointment</a>

               </div>

           </div>

       </div>


       <div class="col-md-3">

           <div class="card p-2 py-3 text-center"  style="margin:3%;">

               <div class="img mb-2">

                   <img src="../img/Rajasri.jpg" width="80" class="rounded-circle">

               </div>

               <h5 class="mb-0">Rajasri Venugopal</h5>
               <small>MBBS, MRCOG &middot; 23yrs</small>

               <div class="ratings mt-2">

                   <i class="fa fa-star"></i>
                   <i class="fa fa-star"></i>
                   <i class="fa fa-star"></i>
                   <i class="fa fa-star"></i>

               </div>

               <div class="mt-4 apointment">

                   <a href="http://localhost/adp/slot.php?val=1029" class="btn btn-info text-uppercase" role="button">Book Appointment</a>

               </div>

           </div>

       </div>



       <div class="col-md-3">

           <div class="card p-2 py-3 text-center"  style="margin:3%;">

               <div class="img mb-2">

                   <img src="../img/Padma.jpg" width="80" class="rounded-circle">

               </div>

               <h5 class="mb-0">Padmavathy Thilak</h5>
               <small> MBBS, DGO &middot; 15yrs</small>

               <div class="ratings mt-2">

                   <i class="fa fa-star"></i>
                   <i class="fa fa-star"></i>
                   <i class="fa fa-star"></i>
                   <i class="fa fa-star"></i>


               </div>

               <div class="mt-4 apointment">

                   <a href="http://localhost/adp/slot.php?val=1030" class="btn btn-info text-uppercase" role="button">Book Appointment</a>

               </div>

           </div>

       </div>



       <div class="col-md-3">

           <div class="card p-2 py-3 text-center"  style="margin:3%;">

               <div class="img mb-2">

                   <img src="../img/Rubina.jpg" width="80" class="rounded-circle">

               </div>

               <h5 class="mb-0">Rubina Zameer</h5>
               <small> MBBS, MD, FOGSI &middot; 12yrs</small>

               <div class="ratings mt-2">

                   <i class="fa fa-star"></i>
                   <i class="fa fa-star"></i>
                   <i class="fa fa-star"></i>
                   <i class="fa fa-star"></i>

               </div>

               <div class="mt-4 apointment">

                   <a href="http://localhost/adp/slot.php?val=1031" class="btn btn-info text-uppercase" role="button">Book Appointment</a>
               </div>

           </div>

       </div>









   </div>


  </div>
  </body>
