 <!-- Topbar Start -->
 <div class="container-fluid bg-dark">
     <div class="row py-2 px-lg-5">
         <div class="col-lg-6 text-center text-lg-left mb-2 mb-lg-0">
             <div class="d-inline-flex align-items-center text-white">
                 <small><i class="fa fa-phone-alt mr-2"></i>+91 8149935492</small>
                 <small class="px-3">|</small>
                 <small><i class="fa fa-envelope mr-2"></i>Brahmandanyak019@gmail.com</small>
             </div>
         </div>
         <div class="col-lg-6 text-center text-lg-right">
             <div class="d-inline-flex align-items-center">
                 <a class="text-white px-2" href="">
                     <i class="fab fa-facebook-f"></i>
                 </a>
                 <a class="text-white px-2" href="">
                     <i class="fab fa-twitter"></i>
                 </a>
                 <a class="text-white px-2" href="">
                     <i class="fab fa-linkedin-in"></i>
                 </a>
                 <a class="text-white px-2" href="">
                     <i class="fab fa-instagram"></i>
                 </a>
                 <a class="text-white pl-2" href="">
                     <i class="fab fa-youtube"></i>
                 </a>
             </div>
         </div>
     </div>
 </div>
 <!-- Topbar End -->

 <!-- Navbar Start -->
 <div class="container-fluid p-0">
     <nav class="navbar navbar-expand-lg bg-white navbar-light py-3 py-lg-0 px-lg-5">
         <a href="index.php" class="navbar-brand ml-lg-3">
             <!-- <img src="img/logo.jpg" height="100px" width="100px" alt=""> -->
             <h1>LOGO</h1>
         </a>
         <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
             <span class="navbar-toggler-icon"></span>
         </button>
         <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
             <div class="navbar-nav ml-auto ">
                 <a href="index.php" class="nav-item nav-link  ">Home</a>
                 <a href="about.php" class="nav-item nav-link">About</a>

                 <div class="nav-item dropdown">
                     <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Products</a>
                     <div class="dropdown-menu text-capitalize">
                         <?php

                            include "config.php";
                            $sel = "SELECT * FROM `category`  ";
                            $q = mysqli_query($con, $sel);
                            while ($row = mysqli_fetch_array($q)) {
                            ?>
                             <a href="single.php?cat_name=<?php echo $row['cat_name'] ?>" class="dropdown-item"><?php echo $row['cat_name'] ?></a>
                         <?php } ?>
                     </div>
                 </div>
                 <a href="contact.php" class="nav-item nav-link">Contact</a>

             </div>
         </div>
     </nav>
 </div>
 <!-- <div id="google_translate_element"></div> -->
 <!-- Navbar End -->













 