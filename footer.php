<style>
    .footer {
        background-color: black;
    }
</style>

<!-- Footer Start -->
<div class="container-fluid footer text-white mt-5 pt-5 px-0   ">
    <div class="row mx-0 pt-5 px-sm-3 px-lg-5 mt-4">
        <div class="col-lg-3 col-md-6 mb-5">
            <h4 class="text-white text-uppercase mb-4" style="letter-spacing: 3px;">Get In Touch</h4>
            <p><i class="fa fa-map-marker-alt mr-2"></i>A-63 Ujala C.H.S, sector-1, Airoli Navi Mumbai
            </p>
            <p><i class="fa fa-phone-alt mr-2"></i>+91 8149935492 | 9321576670</p>
            <p class="m-0"><i class="fa fa-envelope mr-2"></i>Brahmandanyak019@gmail.com</p>
            <p class="m-0"><i class="fa fa-envelope mr-2"></i>Thorataniket891@gmail.com</p>
           
        </div>
        <div class="col-lg-3 col-md-6 mb-5">
            <h4 class="text-white text-uppercase mb-4" style="letter-spacing: 3px;">Quick Links</h4>

            <div class="d-flex justify-content-start">
                <div>
                <p ><a href="index.php" class="text-white">Home</a></p>
           
                <p ><a href="index.php" class="text-white">About</a></p>
         
                <p ><a href="index.php" class="text-white">Products</a></p>
                <p ><a href="index.php" class="text-white">Contact</a></p>
            </div></div>


        </div>
        <div class="col-lg-3 col-md-6 mb-5">
            <h4 class="text-white text-uppercase mb-4" style="letter-spacing: 3px;">About Us</h4>
            <p class="" style="text-align: justify;">At <b class="">Brahmandnayak Agro company Import and export</b>,we specialize in bringing you the finest quality coffee seeds and pepper products sourced from the best regions around the world. Whether you're a coffee enthusiast or a culinary aficionado, our carefully curated selection promises to elevate your experience.</p>
        </div>
        <div class="col-lg-3 col-md-6 mb-5">
            <h4 class="text-white text-uppercase mb-4" style="letter-spacing: 3px;">Follow Us</h4>

            <div class="d-flex justify-content-start">
                <a class="btn btn-lg btn-outline-light btn-lg-square mr-2" href="#"><i class="fab fa-twitter"></i></a>
                <a class="btn btn-lg btn-outline-light btn-lg-square mr-2" href="#"><i class="fab fa-facebook-f"></i></a>
                <a class="btn btn-lg btn-outline-light btn-lg-square mr-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                <a class="btn btn-lg btn-outline-light btn-lg-square" href="#"><i class="fab fa-instagram"></i></a>
            </div>
            <!-- <a href="trust.pdf" class="mt-3 mt-3 d-block "><img src="img/trust.jpg" class="rounded" height="100px" width="110px" alt="trust sheel" /></a> -->
        </div>
    </div>
    <div class="container-fluid text-center text-white border-top mt-4 py-4 px-sm-3 px-md-5" style="border-color: rgba(256, 256, 256, .1) !important;">
        <p class="mb-2 text-white">Copyright &copy; <a class="font-weight-bold " href="#"> Brahmandnayak Agro company Import and export</a>. All Rights Reserved.</a> <a href=" " class="  bg-info d-block mt-2 float-end"><img src="img/web2export.jpg" height="70px" width="200px" alt=""></a></p>
        <p class="m-0 text-white">Designed by <a class="font-weight-bold" href="https://web2export.com">Web2Export.com </a>
        </p>
    </div>
</div>
<!-- Footer End -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel"> Brahmandnayak Agro company Import and export
                </h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-12 col-md-6 my-2">
                        <input type="text" class="form-control name" value="" placeholder="Enter Your Name" />
                    </div>
                    <div class="col-12 col-md-6 my-2">
                        <input type="number" class="form-control number" value="" placeholder="Enter Your Number" />
                    </div>
                    <div class="col-12  my-2">
                        <input type="email" class="form-control email" value="" placeholder="Enter Your Email" />
                    </div>



                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" onclick="go()" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </div>
</div>
<script>
    function go() {
        var name = document.querySelector(".name").value;
        var email = document.querySelector(".email").value;
        var number = document.querySelector(".number").value;
        var url = "https://wa.me/918149935492?text=" +
            "Name: " +
            name + " " +
            "Number: " +
            number + " " +
            "Email :" + email;
        window.open(url, "_blank").focus();
    }
</script>
<script>
    function contact() {
        var na = document.querySelector(".name").value;
        var em = document.querySelector(".email").value;
        var phone = document.querySelector(".phone").value;
        var mes = document.querySelector(".message").value;
        var url1 = "https://wa.me/918149935492?text=" +
            "Name: " +
            na + " " +
            "Email: " +
            em + " " +
            "Phone :" + phone +
            "Message :" + mes;
        window.open(url1, "_blank").focus();
    }
</script>
<script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
}
</script>

<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
<!-- Back to Top -->
<a href="#" class="btn btn-lg btn-primary rounded-0 btn-lg-square back-to-top"><i
        class="fa fa-angle-double-up"></i></a>


<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<!--<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"-->
<!--    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"-->
<!--    crossorigin="anonymous"></script>-->
  <script src="bootstrap-js.js"></script>
<script src="lib/easing/easing.min.js"></script>
<script src="lib/waypoints/waypoints.min.js"></script>
<script src="lib/counterup/counterup.min.js"></script>
<script src="lib/owlcarousel/owl.carousel.min.js"></script>

<!-- Template Javascript -->
<script src="js/main.js"></script>
</body>

</html>











