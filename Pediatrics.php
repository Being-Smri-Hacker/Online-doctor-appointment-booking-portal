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
       ">Pediatrics</span>

   </div>
   <div class="row g-2">

        <div class="col-md-3">

            <div class="card p-2 py-3 text-center" style="margin:3%;">

                <div class="img mb-2">

                    <img src="../img/pedia8.jpg" width="80" class="rounded-circle">

                </div>

                <h5 class="mb-0">Abhisheik</h5>
                <small>MD (Paed) &middot; 11yrs</small>

                <div class="ratings mt-2">

                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>

                </div>

                <div class="mt-4 apointment">

                    <a href="http://localhost/adp/slot.php?val=1032" class="btn btn-info text-uppercase" role="button">Book Appointment</a>

                </div>

            </div>

        </div>




        <div class="col-md-3">

            <div class="card p-2 py-3 text-center"  style="margin:3%;">

                <div class="img mb-2">

                    <img src="../img/pedia1.jpg" width="80" class="rounded-circle">

                </div>

                <h5 class="mb-0">Maria Jessy</h5>
                <small>MD DVL &middot; 25yrs</small>

                <div class="ratings mt-2">

                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>


                </div>

                <div class="mt-4 apointment">

                    <a href="http://localhost/adp/slot.php?val=1033" class="btn btn-info text-uppercase" role="button">Book Appointment</a>
                </div>

            </div>

        </div>




        <div class="col-md-3">

            <div class="card p-2 py-3 text-center"  style="margin:3%;">

                <div class="img mb-2">

                    <img src="../img/pedia2.jpeg" width="80" class="rounded-circle">

                </div>

                <h5 class="mb-0">Jackie Thomson</h5>
                <small> MD, DNB(Paed) &middot; 20yrs</small>

                <div class="ratings mt-2">

                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>


                </div>

                <div class="mt-4 apointment">

                    <a href="http://localhost/adp/slot.php?val=1034" class="btn btn-info text-uppercase" role="button">Book Appointment</a>

                </div>

            </div>

        </div>




        <div class="col-md-3">

            <div class="card p-2 py-3 text-center"  style="margin:3%;">

                <div class="img mb-2">

                    <img src="../img/pedia3.jpg" width="80" class="rounded-circle">

                </div>

                <h5 class="mb-0">Paul Moliv</h5>
                <small> MD (Paed) &#183; 18yrs</small>

                <div class="ratings mt-2">

                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>


                </div>

                <div class="mt-4 apointment">

                    <a href="http://localhost/adp/slot.php?val=1035" class="btn btn-info text-uppercase" role="button">Book Appointment</a>

                </div>

            </div>

        </div>



        <div class="col-md-3">

            <div class="card p-2 py-3 text-center"  style="margin:3%;">

                <div class="img mb-2">

                    <img src="../img/pedia4.jpg" width="80" class="rounded-circle">

                </div>

                <h5 class="mb-0">Ramanujan</h5>
                <small> MD, DM (Paed) &middot; 18yrs</small>

                <div class="ratings mt-2">

                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>

                </div>

                <div class="mt-4 apointment">

                    <a href="http://localhost/adp/slot.php?val=1036" class="btn btn-info text-uppercase" role="button">Book Appointment</a>

                </div>

            </div>

        </div>


        <div class="col-md-3">

            <div class="card p-2 py-3 text-center"  style="margin:3%;">

                <div class="img mb-2">

                    <img src="../img/pedia5.jpg" width="80" class="rounded-circle">

                </div>

                <h5 class="mb-0">Sudhakaran </h5>
                <small>MS, PDF(Ped.ENT)&middot; 8yrs</small>

                <div class="ratings mt-2">

                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>

                </div>

                <div class="mt-4 apointment">

                    <a href="http://localhost/adp/slot.php?val=1037" class="btn btn-info text-uppercase" role="button">Book Appointment</a>

                </div>

            </div>

        </div>



        <div class="col-md-3">

            <div class="card p-2 py-3 text-center"  style="margin:3%;">

                <div class="img mb-2">

                    <img src="../img/pedia6.jpg" width="80" class="rounded-circle">

                </div>

                <h5 class="mb-0">Rachel Green</h5>
                <small> MD, DM &middot; 7yrs</small>

                <div class="ratings mt-2">

                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>

                </div>

                <div class="mt-4 apointment">

                    <a href="http://localhost/adp/slot.php?val=1038" class="btn btn-info text-uppercase" role="button">Book Appointment</a>

                </div>

            </div>

        </div>



        <div class="col-md-3">

            <div class="card p-2 py-3 text-center"  style="margin:3%;">

                <div class="img mb-2">

                    <img src="../img/pedia7.jpg" width="80" class="rounded-circle">

                </div>

                <h5 class="mb-0">Monica Singh</h5>
                <small>DLO DNB, PhD &middot; 8yrs</small>

                <div class="ratings mt-2">

                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>


                </div>

                <div class="mt-4 apointment">

                    <a href="http://localhost/adp/slot.php?val=1039" class="btn btn-info text-uppercase" role="button">Book Appointment</a>
                </div>

            </div>

        </div>









    </div>


   </div>
   </body>
