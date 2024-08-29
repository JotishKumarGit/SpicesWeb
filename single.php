<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Brahmandnayak Agro company Import and export</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <!--<meta content="Free HTML Templates" name="keywords">-->
    <!--<meta content="Free HTML Templates" name="description">-->
 <!-- Favicon -->
 <link href="img/image/b-logo.jpeg" rel="icon">
    <link rel="shortcut icon" href="https://hameediyafarms.com/img/image/b-logo.jpeg" />
    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link
        href="https://fonts.googleapis.com/css2?family=Jost:wght@500;600;700&family=Open+Sans:wght@400;600&display=swap"
        rel="stylesheet">
    <!-- <link rel="shortcut icon" href="https://hameediyafarms.com/img/logo.png" /> -->
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
</head>

<body>
    <?php include_once "navbar.php"; ?>

    <!-- Header Start -->
    <div class="jumbotron jumbotron-fluid     "
        style="margin-bottom: 90px;background-image: linear-gradient(rgba(0, 0, 0, 0.432),rgba(0, 0, 0, 0.603)),url(img/banner/green-beeg.jpg);background-position: bottom; ">
        <div class="container text-center py-5">
            <h1 class="text-white display-4">Product Details </h1>


        </div>
    </div>

    <!-- Header End -->


    <!-- About Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <!-- <div class="section-title">
                    <h4 class="text-primary text-uppercase" style="letter-spacing: 5px;"><?php //echo $row['name'] 
                                                                                            ?></h4>
                </div> -->
        </div>
        <div class="container">
            <div class="row">
                <?php
                $slug = $_GET['cat_name'];
                include "config.php";
                $sel = "SELECT * FROM `pro` where `cat_name`='$slug'";
                $q = mysqli_query($con, $sel);
                while ($row = mysqli_fetch_array($q)) {
                ?>
                    <div class="col-12 col-lg-3">
                        <div class="shadow-lg" style="border: 1px solid black; border-radius: 10px;">
                            <img src="<?php echo $row['image'] ?>" class=" " height="200px" width="100%" style="object-fit: cover; border: 1px solid black;" alt="Rice">
                            <h4 class="text-primary text-uppercase text-center py-3" style="letter-spacing: 5px;"><?php echo $row['name'] ?></h4>
                            <div class="text-center pb-2"><button class="py-2 px-4 text-white bg-dark" style="border-radius: 100px;"><a href="" data-bs-toggle="modal" data-bs-target="#exampleModal" class="text-white text-decoration-none ">Enquiry</a></button></div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
    <!-- About End -->


    <?php include_once "footer.php"; ?>