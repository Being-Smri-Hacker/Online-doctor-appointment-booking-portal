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
       ">Cardiology</span>

   </div>
   <div class="row g-2">

      <div class="col-md-3">

          <div class="card p-2 py-3 text-center" style="margin:3%;">

              <div class="img mb-2">

                  <img src="../img/cardio8.jpg" width="80" class="rounded-circle">

              </div>

              <h5 class="mb-0">Patey Cruiser</h5>
              <small>MD,DM(Card.),FCSI &middot; 11yrs</small>

              <div class="ratings mt-2">

                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>

              </div>

              <div class="mt-4 apointment">

                  <a href="http://localhost/adp/slot.php?val=1040" class="btn btn-info text-uppercase" role="button">Book Appointment</a>

              </div>

          </div>

      </div>




      <div class="col-md-3">

          <div class="card p-2 py-3 text-center"  style="margin:3%;">

              <div class="img mb-2">

                  <img src="../img/cardio9.jpg" width="80" class="rounded-circle">

              </div>

              <h5 class="mb-0">Mario Speedway</h5>
              <small>MD, DNB, DM (Card) &middot; 5yrs</small>

              <div class="ratings mt-2">

                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>


              </div>

              <div class="mt-4 apointment">

                  <a href="http://localhost/adp/slot.php?val=1041" class="btn btn-info text-uppercase" role="button">Book Appointment</a>

              </div>

          </div>

      </div>




      <div class="col-md-3">

          <div class="card p-2 py-3 text-center"  style="margin:3%;">

              <div class="img mb-2">

                  <img src="../img/cardio2.jpg" width="80" class="rounded-circle">

              </div>

              <h5 class="mb-0">Viji Thomson</h5>
              <small>MD, M.Phil, FRCP &middot; 20yrs</small>

              <div class="ratings mt-2">

                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>


              </div>

              <div class="mt-4 apointment">

                  <a href="http://localhost/adp/slot.php?val=1042" class="btn btn-info text-uppercase" role="button">Book Appointment</a>

              </div>

          </div>

      </div>




      <div class="col-md-3">

          <div class="card p-2 py-3 text-center"  style="margin:3%;">

              <div class="img mb-2">

                  <img src="../img/cardio3 (1).jpg" width="80" class="rounded-circle">

              </div>

              <h5 class="mb-0">Paul Moliv</h5>
              <small>MD, DM (Card) &#183; 30 yrs</small>

              <div class="ratings mt-2">

                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>


              </div>

              <div class="mt-4 apointment">

                  <a href="http://localhost/adp/slot.php?val=1043" class="btn btn-info text-uppercase" role="button">Book Appointment</a>

              </div>

          </div>

      </div>



      <div class="col-md-3">

          <div class="card p-2 py-3 text-center"  style="margin:3%;">

              <div class="img mb-2">

                  <img src="../img/cardio4.jpg" width="80" class="rounded-circle">

              </div>

              <h5 class="mb-0">Priya Dharshini</h5>
              <small> MD, DM (Card), CCR &middot; 10yrs</small>

              <div class="ratings mt-2">

                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>

              </div>

              <div class="mt-4 apointment">

                  <a href="http://localhost/adp/slot.php?val=1044" class="btn btn-info text-uppercase" role="button">Book Appointment</a>

              </div>

          </div>

      </div>


      <div class="col-md-3">

          <div class="card p-2 py-3 text-center"  style="margin:3%;">

              <div class="img mb-2">

                  <img src="../img/cardio5.webp" width="80" class="rounded-circle">

              </div>

              <h5 class="mb-0">Sudha Forcewind</h5>
              <small>MD, DM (Card)&middot; 23yrs</small>

              <div class="ratings mt-2">

                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>

              </div>

              <div class="mt-4 apointment">

                  <a href="http://localhost/adp/slot.php?val=1045" class="btn btn-info text-uppercase" role="button">Book Appointment</a>
              </div>

          </div>

      </div>



      <div class="col-md-3">

          <div class="card p-2 py-3 text-center"  style="margin:3%;">

              <div class="img mb-2">

                  <img src="../img/cardio6.jpeg" width="80" class="rounded-circle">

              </div>

              <h5 class="mb-0">Sowmiya Devi</h5>
              <small> MD, DM &middot; 19yrs</small>

              <div class="ratings mt-2">

                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>

              </div>

              <div class="mt-4 apointment">

                <a href="http://localhost/adp/slot.php?val=1046" class="btn btn-info text-uppercase" role="button">Book Appointment</a>

              </div>

          </div>

      </div>



      <div class="col-md-3">

          <div class="card p-2 py-3 text-center"  style="margin:3%;">

              <div class="img mb-2">

                  <img src="../img/cardio7.jpg" width="80" class="rounded-circle">

              </div>

              <h5 class="mb-0">Monica Chandy</h5>
              <small> MD, DM, DNB &middot; 18yrs</small>

              <div class="ratings mt-2">

                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>

              </div>

              <div class="mt-4 apointment">

                  <a href="http://localhost/adp/slot.php?val=1047" class="btn btn-info text-uppercase" role="button">Book Appointment</a>
              </div>

          </div>

      </div>









  </div>


 </div>
 </body>
 </html>
