<!DOCTYPE html>
<html lang="en">
    <?php
        include "includes/config.php";
    ?>
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>EBP | Profile</title>
    <link href="images/favicon.ico" rel="icon">
    <link rel="stylesheet" href="vendor/css/bundle.min.css">
    <link rel="stylesheet" href="vendor/css/owl.carousel.min.css">
    <link rel="stylesheet" href="vendor/css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="vendor/css/cubeportfolio.min.css">
    <link rel="stylesheet" href="vendor/css/tooltipster.min.css">
    <link rel="stylesheet" href="vendor/css/revolution-settings.min.css">
    <link rel="stylesheet" href="app-assets/css/revolution/navigation.css">
    <link rel="stylesheet" href="app-assets/css/style.css">
</head>
<body>
<?php
    include "menu.php";
?>
<!--Page Header-->
<section id="main-banner-page" class="position-relative page-header contact-header section-nav-smooth parallax">
<div class="overlay overlay-dark opacity-6 z-index-1"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <div class="page-titles whitecolor text-center padding">
                    <h2 class="font-bold"> Profile Saya</h2>
                    <h3 class="font-light py-2">Edward Brainard Pranata (825200025).</h3>
                </div>
            </div>
        </div>
        <div class="gradient-bg title-wrap mt-n5">
            <div class="row">
                <div class="col-lg-12 col-md-12 whitecolor">
                    <h3 class="float-left">Profile</h3>
                    <ul class="breadcrumb top10 bottom10 float-right">
                        <li class="breadcrumb-item hover-light"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item hover-light">Profile</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Page Header ends -->
<!-- Contact US -->
<section id="stayconnect1" class="bglight position-relative padding_top padding_bottom_half noshadow">
    <div class="container whitebox">
        <div class="widget py-5">
            <div class="row">
                <div class="col-md-12 text-center wow fadeIn mt-n3" data-wow-delay="300ms">
                    <h2 class="heading bottom30 darkcolor font-light2 pt-1"><span class="font-normal">Profle</span> Edward Brainard Pranata
                        <span class="divider-center"></span>
                    </h2>
                    <div class="col-md-8 offset-md-2 bottom35">
                        <p>Nama : Edward Brainard Pranata <br>NPM  : 825200025</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-3">
                        <img src="app-assets/images/saya.jfif" alt="edward">
                    </div>
                    <div class="col-md-9 col-sm-9">
                        <p>nama saya edward brainard pranata umur 19 tahun. saya sering dipanggil afu oleh teman teman saya. saya sedang mengerjakan project uas untuk web development dan saya bingung mau ketik apa jadi saya ketik saja ini biar gak kosong kosong amat profilnya ya mudah mudahan text ini cukup untuk mengisi kekosongan pada bagian profil ini dan terima kasih.</p>
                    </div>
                <div class="col-md-12 col-sm-12" style="margin-bottom: 25px;">
                 
                </div>
                <div class="col-md-12 text-center wow fadeIn mt-n3" data-wow-delay="300ms">
                    <h2 class="heading bottom30 darkcolor font-light2 pt-1"><span class="font-normal">Contact</span> Me
                        <span class="divider-center"></span>
                    </h2>
                    <div class="col-md-8 offset-md-2 bottom35">
                        <p>Contact Me lewat ini yang akan masuk ke comment</p>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 order-sm-2">
                    <div class="contact-meta px-2 text-center text-md-left">
                        <div class="heading-title heading_small">
                            <span class="defaultcolor mb-3">Edward Brainard Pranata</span>
                            <h3 class="darkcolor font-normal mb-4">EBP 825200025</h3>
                        </div>
                        <p class="bottom10">Address: bengkulu</p>
                        <p class="bottom10">0812 71** ***8</p>
                        <p class="bottom10"><a href="mailto:polpo@MegaOneagency.co.uk">edwardbrainardpranata@gmail.com</a></p>
                        <ul class="social-icons mt-4 mb-4 mb-sm-0 wow fadeInUp no-border darkcolor" data-wow-delay="300ms">
                            <li><a href="javascript:void(0)" class="facebook"><i class="fab fa-facebook-f"></i> </a> </li>
                            <li><a href="javascript:void(0)" class="twitter"><i class="fab fa-twitter"></i> </a> </li>
                            <li><a href="javascript:void(0)" class="linkedin"><i class="fab fa-linkedin-in"></i> </a> </li>
                            <li><a href="javascript:void(0)" class="insta"><i class="fab fa-instagram"></i> </a> </li>
                            <li><a href="javascript:void(0)" class="whatsapp"><i class="fab fa-whatsapp"></i> </a> </li>
                            <li><a href="javascript:void(0)"><i class="far fa-envelope"></i> </a> </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6">
                    <div class="heading-title  wow fadeInUp" data-wow-delay="300ms">
                        <?php
                            if(isset($_POST['contactme'])){
                                $name = $_POST['userName'];
                                $email = $_POST['userEmail'];
                                $pesan  =$_POST['userMessage'];
                                $comment = "insert into komentar values (null, '$name', '$email', '$pesan');";
                                mysqli_query($connection, $comment);
                                header("location:#");
                            }
                        ?>
                        <form class="getin_form wow fadeInUp" data-wow-delay="400ms" id="contact-form-data" method="POST">
                            <div class="row px-2">
                                <div class="col-md-12 col-sm-12" id="result"></div>
                                <div class="col-md-12 col-sm-12">
                                    <div class="form-group">
                                        <label for="name1" class="d-none"></label>
                                        <input class="form-control" id="name1" type="text" placeholder="Name:" required  name="userName">
                                    </div>
                                </div>
                                <div class="col-md-12 col-sm-12">
                                    <div class="form-group">
                                        <label for="email1" class="d-none"></label>
                                        <input class="form-control" type="email" id="email1" placeholder="Email:" name="userEmail">
                                    </div>
                                </div>
                                <div class="col-md-12 col-sm-12">
                                    <div class="form-group">
                                        <label for="message1" class="d-none"></label>
                                        <textarea class="form-control" id="message1" placeholder="Message:" required  name="userMessage"></textarea>
                                    </div>
                                </div>
                                <div class="col-md-12 col-sm-12">
                                    <button type="button" id="submit_btn1" class="contact_btn button gradient-btn w-100" name="contactme">Send</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-3">
                <div class="widget text-center top60 w-100 p-0">
                    <div class="contact-box">
                        <span class="icon-contact bluecolor"><i class="fas fa-mobile-alt"></i></span>
                        <p class="bottom0"><a href="tel:+14046000396">0812 **** ****</a></p>
                        <p class="d-block"><a href="tel:+43720778972">**** **** ****</a></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3">
                <div class="widget text-center top60 w-100 p-0">
                    <div class="contact-box">
                        <span class="icon-contact bluecolor"><i class="fas fa-map-marker-alt"></i></span>
                        <p class="bottom0">Bengkulu </p>
                        <p class="bottom0">Curup </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3">
                <div class="widget text-center top60 w-100 p-0">
                    <div class="contact-box">
                        <span class="icon-contact bluecolor"><i class="far fa-envelope"></i></span>
                        <p class="bottom0"><a href="mailto:admin@website.com">ebp@website.com</a></p>
                        <p class="d-block"><a href="mailto:email@website.com">edward@gmail.com</a></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3">
                <div class="widget text-center top60 w-100 p-0">
                    <div class="contact-box">
                        <span class="icon-contact bluecolor"><i class="far fa-clock"></i></span>
                        <p class="bottom15">UTC+07:00 <span class="d-block">UTC+07:00</span></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Contact US ends -->
<?php
    include "comment.php";
    include "footer.php";
?>
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="vendor/js/bundle.min.js"></script>
<!--to view items on reach-->
<script src="vendor/js/jquery.appear.js"></script>
<!--Owl Slider-->
<script src="vendor/js/owl.carousel.min.js"></script>
<!--Parallax Background-->
<script src="vendor/js/parallaxie.min.js"></script>
<!--Cubefolio Gallery-->
<script src="vendor/js/jquery.cubeportfolio.min.js"></script>
<!--Fancybox js-->
<script src="vendor/js/jquery.fancybox.min.js"></script>
<!--wow js-->
<script src="vendor/js/wow.min.js"></script>
<!--number counters-->
<script src="vendor/js/jquery-countTo.js"></script>
<!--tooltip js-->
<script src="vendor/js/tooltipster.min.js"></script>
<!--Revolution SLider-->
<script src="vendor/js/jquery.themepunch.tools.min.js"></script>
<script src="vendor/js/jquery.themepunch.revolution.min.js"></script>
<!-- SLIDER REVOLUTION 5.0 EXTENSIONS -->
<script src="vendor/js/extensions/revolution.extension.actions.min.js"></script>
<script src="vendor/js/extensions/revolution.extension.carousel.min.js"></script>
<script src="vendor/js/extensions/revolution.extension.kenburn.min.js"></script>
<script src="vendor/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script src="vendor/js/extensions/revolution.extension.migration.min.js"></script>
<script src="vendor/js/extensions/revolution.extension.navigation.min.js"></script>
<script src="vendor/js/extensions/revolution.extension.parallax.min.js"></script>
<script src="vendor/js/extensions/revolution.extension.slideanims.min.js"></script>
<script src="vendor/js/extensions/revolution.extension.video.min.js"></script>

<!--contact form-->
<script src="vendor/js/contact_us.js"></script>

<!--custom functions and script-->
<script src="app-assets/js/functions.js"></script>
</body>
</html>