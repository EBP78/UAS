<!DOCTYPE html>
<html lang="en">
<?php
    include "includes/config.php";
    
    if (isset($_GET['page'])){
        $page_news = $_GET['page'];
    } else{
        $page_news = 0;
    }
    function rupiah($angka){
        
        $hasil_rupiah = "Rp " . number_format($angka,2,',','.');
        return $hasil_rupiah;
     
    }
?>
<head>
    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport">
    <!-- Author -->
    <meta name="author" content="Edward Brainard Pranata">
    <!-- description -->
    <meta name="description" content="Edward menbuatnya dengan hati dan juga otak">
    <!-- keywords -->
    <meta name="keywords" content="Creative, modern, clean, bootstrap responsive, html5, css3, portfolio, blog, studio, templates, multipurpose, one page, corporate, start-up, studio, branding, designer, freelancer, carousel, parallax, photography, studio, masonry, grid, faq">
    <!-- Page Title -->
    <title>EBP - FrontEnd - Index</title>
    <link href="app-assets/images/favicon.png" rel="icon">
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
<!--Main Slider-->
<section id="main-banner-area" class="position-relative">
    <div id="revo_main_wrapper" class="rev_slider_wrapper fullwidthbanner-container m-0 p-0 bg-dark" data-alias="classic4export" data-source="gallery">
        <!-- START REVOLUTION SLIDER 5.4.1 fullwidth mode -->
        <div id="rev_main" class="rev_slider fullwidthabanner white" data-version="5.4.1">
            <ul>
                <!-- SLIDE 1 -->
                <li data-index="rs-01" data-transition="fade" data-slotamount="default" data-easein="Power100.easeIn" data-easeout="Power100.easeOut" data-masterspeed="2000" data-fsmasterspeed="1500" data-param1="01">
                    <!-- MAIN IMAGE -->
                    <img src="app-assets/images/bukit_kaba.jpg"  alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina>
                    <!-- LAYER NR. 1 -->
                    <div class="overlay overlay-dark opacity-6"></div>
                    <div class="tp-caption tp-resizeme"
                         data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                         data-y="['middle','middle','middle','middle']" data-voffset="['-130','-130','-110','-80']"
                         data-width="none" data-height="none" data-type="text"
                         data-textAlign="['center','center','center','center']"
                         data-responsive_offset="on" data-start="1000"
                         data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","speed":2000,"to":"o:1;","delay":1500,"ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'>
                        <h2 class="text-capitalize font-xlight whitecolor text-center heading-title-small">Keindahan Alam</h2>
                    </div>
                    <!-- LAYER NR. 2 -->
                    <div class="tp-caption tp-resizeme"
                         data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                         data-y="['middle','middle','middle','middle']" data-voffset="['-70','-70','-50','-20']"
                         data-width="none" data-height="none" data-type="text"
                         data-textAlign="['center','center','center','center']"
                         data-responsive_offset="on" data-start="1000"
                         data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","speed":2000,"to":"o:1;","delay":1500,"ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'>
                        <h2 class="text-capitalize font-bold whitecolor text-center">Bukit Kaba</h2>
                    </div>
                    <!-- LAYER NR. 3 -->
                    <div class="tp-caption tp-resizeme"
                         data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                         data-y="['middle','middle','middle','middle']" data-voffset="['-10','-10','10','40']"
                         data-width="none" data-height="none" data-type="text"
                         data-textAlign="['center','center','center','center']"
                         data-responsive_offset="on" data-start="1500"
                         data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","speed":2000,"to":"o:1;","delay":1500,"ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'>
                        <h2 class="text-capitalize font-xlight whitecolor text-center heading-title-small">Curup, Bengkulu, Indonesia</h2>
                    </div>
                    <!-- LAYER NR. 4 -->
                    <div class="tp-caption tp-resizeme"
                         data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                         data-y="['middle','middle','middle','middle']" data-voffset="['40','40','60','90']"
                         data-width="none" data-height="none" data-whitespace="nowrap" data-type="text"
                         data-textAlign="['center','center','center','center']"
                         data-responsive_offset="on" data-start="2000"
                         data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":2000,"ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'>
                        <h4 class="whitecolor font-xlight text-center">Kawah Gunung Berapi Yang Masih Aktif</h4>
                    </div>

                </li>
                <!-- SLIDE 2 -->
                <li data-index="rs-02" data-transition="fade" data-slotamount="default" data-easein="Power3.easeInOut" data-easeout="Power3.easeInOut" data-masterspeed="2000" data-fsmasterspeed="1500" data-param1="02">
                    <!-- MAIN IMAGE -->
                    <img src="app-assets/images/pantai_panjang.jpg" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina>
                    <!-- LAYER NR. 1 -->
                    <div class="overlay overlay-dark opacity-7"></div>
                    <div class="tp-caption tp-resizeme"
                         data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                         data-y="['middle','middle','middle','middle']" data-voffset="['-130','-130','-110','-80']"
                         data-width="none" data-height="none" data-type="text"
                         data-textAlign="['center','center','center','center']"
                         data-responsive_offset="on" data-start="1000"
                         data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","speed":2000,"to":"o:1;","delay":1500,"ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'>
                        <h2 class="text-capitalize font-xlight whitecolor text-center heading-title-small">Keindahan Alam</h2>
                    </div>
                    <!-- LAYER NR. 2 -->
                    <div class="tp-caption tp-resizeme"
                         data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                         data-y="['middle','middle','middle','middle']" data-voffset="['-70','-70','-50','-20']"
                         data-width="none" data-height="none" data-type="text"
                         data-textAlign="['center','center','center','center']"
                         data-responsive_offset="on" data-start="1000"
                         data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","speed":2000,"to":"o:1;","delay":1500,"ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'>
                        <h2 class="text-capitalize font-bold whitecolor text-center">Pantai Panjang</h2>
                    </div>
                    <!-- LAYER NR. 3 -->
                    <div class="tp-caption tp-resizeme"
                         data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                         data-y="['middle','middle','middle','middle']" data-voffset="['-10','-10','10','40']"
                         data-width="none" data-height="none" data-type="text"
                         data-textAlign="['center','center','center','center']"
                         data-responsive_offset="on" data-start="1500"
                         data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","speed":2000,"to":"o:1;","delay":1500,"ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'>
                        <h2 class="text-capitalize font-xlight whitecolor text-center heading-title-small">Bengkulu, Bengkulu, Indonesia</h2>
                    </div>
                    <!-- LAYER NR. 4 -->
                    <div class="tp-caption tp-resizeme"
                         data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                         data-y="['middle','middle','middle','middle']" data-voffset="['40','40','60','90']"
                         data-width="none" data-height="none" data-whitespace="nowrap" data-type="text"
                         data-textAlign="['center','center','center','center']"
                         data-responsive_offset="on" data-start="2000"
                         data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":2000,"ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'>
                        <h4 class="whitecolor font-xlight text-center">Pantai Dengan Panjang 7 KM dan Lebar 500 M</h4>
                    </div>
                </li>
                <!-- SLIDE 3 -->
                <li data-index="rs-03" data-transition="fade" data-slotamount="default" data-easein="Power3.easeInOut" data-easeout="Power3.easeInOut" data-masterspeed="2000" data-fsmasterspeed="1500" data-param1="03">
                    <!-- MAIN IMAGE -->
                    <img src="app-assets/images/tiga.jpeg" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina>
                    <!-- LAYER NR. 1 -->
                    <div class="overlay overlay-dark opacity-7"></div>
                    <div class="tp-caption tp-resizeme"
                         data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                         data-y="['middle','middle','middle','middle']" data-voffset="['-130','-130','-110','-80']"
                         data-width="none" data-height="none" data-type="text"
                         data-textAlign="['center','center','center','center']"
                         data-responsive_offset="on" data-start="1000"
                         data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","speed":2000,"to":"o:1;","delay":1500,"ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'>
                        <h2 class="text-capitalize font-xlight whitecolor text-center heading-title-small">Keindahan Alam</h2>
                    </div>
                    <!-- LAYER NR. 2 -->
                    <div class="tp-caption tp-resizeme"
                         data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                         data-y="['middle','middle','middle','middle']" data-voffset="['-70','-70','-50','-20']"
                         data-width="none" data-height="none" data-type="text"
                         data-textAlign="['center','center','center','center']"
                         data-responsive_offset="on" data-start="1000"
                         data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","speed":2000,"to":"o:1;","delay":1500,"ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'>
                        <h2 class="text-capitalize font-bold whitecolor text-center">Suban Air Panas</h2>
                    </div>
                    <!-- LAYER NR. 3 -->
                    <div class="tp-caption tp-resizeme"
                         data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                         data-y="['middle','middle','middle','middle']" data-voffset="['-10','-10','10','40']"
                         data-width="none" data-height="none" data-type="text"
                         data-textAlign="['center','center','center','center']"
                         data-responsive_offset="on" data-start="1500"
                         data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","speed":2000,"to":"o:1;","delay":1500,"ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'>
                        <h2 class="text-capitalize font-xlight whitecolor text-center heading-title-small">Curup, Bengkulu, Indonesia</h2>
                    </div>
                    <!-- LAYER NR. 4 -->
                    <div class="tp-caption tp-resizeme"
                         data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                         data-y="['middle','middle','middle','middle']" data-voffset="['40','40','60','90']"
                         data-width="none" data-height="none" data-whitespace="nowrap" data-type="text"
                         data-textAlign="['center','center','center','center']"
                         data-responsive_offset="on" data-start="2000"
                         data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":2000,"ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'>
                        <h4 class="whitecolor font-xlight text-center">Pemandian Air Panas Alami</h4>
                    </div>
                </li>
                 <!-- SLIDE 4 -->
                 <li data-index="rs-04" data-transition="fade" data-slotamount="default" data-easein="Power3.easeInOut" data-easeout="Power3.easeInOut" data-masterspeed="2000" data-fsmasterspeed="1500" data-param1="04">
                    <!-- MAIN IMAGE -->
                    <img src="app-assets/images/kabawetan.jpg" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina>
                    <!-- LAYER NR. 1 -->
                    <div class="overlay overlay-dark opacity-7"></div>
                    <div class="tp-caption tp-resizeme"
                         data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                         data-y="['middle','middle','middle','middle']" data-voffset="['-130','-130','-110','-80']"
                         data-width="none" data-height="none" data-type="text"
                         data-textAlign="['center','center','center','center']"
                         data-responsive_offset="on" data-start="1000"
                         data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","speed":2000,"to":"o:1;","delay":1500,"ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'>
                        <h2 class="text-capitalize font-xlight whitecolor text-center heading-title-small">Keindahan Alam</h2>
                    </div>
                    <!-- LAYER NR. 2 -->
                    <div class="tp-caption tp-resizeme"
                         data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                         data-y="['middle','middle','middle','middle']" data-voffset="['-70','-70','-50','-20']"
                         data-width="none" data-height="none" data-type="text"
                         data-textAlign="['center','center','center','center']"
                         data-responsive_offset="on" data-start="1000"
                         data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","speed":2000,"to":"o:1;","delay":1500,"ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'>
                        <h2 class="text-capitalize font-bold whitecolor text-center">Kebun Teh Kabawetan</h2>
                    </div>
                    <!-- LAYER NR. 3 -->
                    <div class="tp-caption tp-resizeme"
                         data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                         data-y="['middle','middle','middle','middle']" data-voffset="['-10','-10','10','40']"
                         data-width="none" data-height="none" data-type="text"
                         data-textAlign="['center','center','center','center']"
                         data-responsive_offset="on" data-start="1500"
                         data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","speed":2000,"to":"o:1;","delay":1500,"ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'>
                        <h2 class="text-capitalize font-xlight whitecolor text-center heading-title-small">Kepahiang, Bengkulu, Indonesia</h2>
                    </div>
                    <!-- LAYER NR. 4 -->
                    <div class="tp-caption tp-resizeme"
                         data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                         data-y="['middle','middle','middle','middle']" data-voffset="['40','40','60','90']"
                         data-width="none" data-height="none" data-whitespace="nowrap" data-type="text"
                         data-textAlign="['center','center','center','center']"
                         data-responsive_offset="on" data-start="2000"
                         data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":2000,"ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'>
                        <h4 class="whitecolor font-xlight text-center">Kebun Teh Yang Luas Dan Indah</h4>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <ul class="social-icons-simple revicon white">
        <li class="d-table"><a href="javascript:void(0)" class="facebook"><i class="fab fa-facebook-f"></i></a> </li>
        <li class="d-table"><a href="javascript:void(0)" class="twitter"><i class="fab fa-twitter"></i> </a> </li>
        <li class="d-table"><a href="javascript:void(0)" class="linkedin"><i class="fab fa-linkedin-in"></i> </a> </li>
        <li class="d-table"><a href="javascript:void(0)" class="insta"><i class="fab fa-instagram"></i> </a> </li>
    </ul>
</section>
<!--Main Slider ends -->

<!--Some Services-->
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div id="services-slider" class="owl-carousel">
                <div class="item">
                    <div class="service-box">
                        <span class="bottom25"><i class="fas fa-bed"></i></span>
                        <h4 class="bottom10 text-nowrap"><a href="javascript:void(0)">Hotel Terbaik</a></h4>
                        <p>Menyediakan Hotel - hotel terbaik untuk menikmati alam dari alam indonesia yang indah.</p>
                    </div>
                </div>
                <div class="item">
                    <div class="service-box">
                        <span class="bottom25"><i class="fas fa-plane"></i></span>
                        <h4 class="bottom10"><a href="javascript:void(0)">Transportasi</a></h4>
                        <p>Di Web ini telah disediakan list dari transportasi yang dapat digunakan untuk mencapai destinasi pilihan anda.</p>
                    </div>
                </div>
                <div class="item">
                    <div class="service-box">
                        <span class="bottom25"><i class="fas fa-map-marked-alt"></i></span>
                        <h4 class="bottom10"><a href="javascript:void(0)">Destinasi Wisata</a></h4>
                        <p>menyediakan berbagai destinasi wisata indonesia yang indah untuk dinikmati siapapun kapanpun dan dimanapun.</p>
                    </div>
                </div>
                <div class="item">
                    <div class="service-box">
                        <span class="bottom25"><i class="fa fa-globe"></i></span>
                        <h4 class="bottom10"><a href="javascript:void(0)">World Wide</a></h4>
                        <p>Web dapat diakses oleh siapapun dimanapun dan kapanpun melalui internet untuk melihat alam indonesia.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--Some Services ends-->
<!--Some News -->
<section id="about" class="single-feature padding mt-n5">
    <div class="container">
        <div class="row d-flex align-items-top">
            <div class="col-lg-6 text-sm-left text-center wow fadeInLeft" data-wow-delay="300ms">
                <div class="heading-title mb-4">
                    <h2 class="darkcolor font-normal bottom30">Here's Some <span class="defaultcolor">News</span> For You</h2>
                </div>
                <p class="bottom35">beberapa News dari berbagai destinasi wisata indonesia yang indah dan menarik. </p>
                <div id="blog-measonry" class="cbp">
                    <?php
                        $get = 0 + ($page_news * 2);
                        $query = "select n.news_destinasiid, n.newshead, n.newscontent,date_format(n.newsdate,'%d %M %Y') as newsdate, i.file,
                        (select count(*) from komentar) as komentar
                        from news_destinasi n, image i 
                        where n.imageid = i.imageid
                        group by news_destinasiid
                        limit $get,2;";
                        $query_run = mysqli_query($connection, $query); 
                        while($data = mysqli_fetch_array($query_run)){
                    ?>
                        <div class="cbp-item">
                            <div class="news_item shadow text-center text-md-left">
                                <a class="image" href="news-detail.php?content=<?php
                                        echo $data['news_destinasiid'];
                                    ?>">
                                    <img src="../images/destinasi/<?php
                                        echo $data['file'];
                                    ?>" alt="Latest News" class="img-responsive">
                                </a>
                                <div class="news_desc">
                                    <h3 class="text-capitalize font-normal darkcolor"><a href="news-detail.php?content=<?php
                                        echo $data['news_destinasiid'];
                                        ?>"><?php
                                        echo $data['newshead'];
                                    ?></a></h3>
                                    <ul class="meta-tags top20 bottom20">
                                        <li><a href="#."><i class="fas fa-calendar-alt"></i><?php
                                            echo $data['newsdate'];
                                        ?></a></li>
                                        <li><a href="#."> <i class="far fa-user"></i> Edward </a></li>
                                        <li><a href="#."><i class="far fa-comment-dots"></i><?php
                                            echo $data['komentar'];
                                        ?></a></li>
                                    </ul>
                                    <p class="bottom35"><?php
                                        $content = strlen($data['newscontent']) > 180 ? substr($data['newscontent'],0,180)." ..." : $data['newscontent'];
                                        // nl2br untuk buat paragraph
                                        echo nl2br($content);
                                    ?></p>
                                    <a href="news-detail.php?content=<?php
                                        echo $data['news_destinasiid'];
                                    ?>" class="button btn-secondary">Read more</a>
                                </div>
                            </div>
                        </div>
                    <?php
                        }
                    ?>
                    
                    
                </div>  
                <div class="row">
                    <div class="col-sm-12">
                        <!--Pagination-->
                        <ul class="pagination justify-content-center top55 mb-4 mb-md-0 mb-sm-3">
                            <?php
                                $query = "select count(*) as banyak
                                from news_destinasi;";
                                $query_run = mysqli_query($connection, $query);
                                $data = mysqli_fetch_assoc($query_run);
                                $jumlah = ceil($data['banyak'] / 2);
                                if ($page_news == 0){
                            ?>
                                <li class="page-item"><a class="page-link disabled" href="#."><i class="fa fa-angle-left"></i></a></li>
                            <?php
                                } else{
                            ?>
                                <li class="page-item"><a class="page-link" href="?page=<?php
                                    echo $page_news - 1;
                                ?>"><i class="fa fa-angle-left"></i></a></li>
                            <?php
                                }
                                for($i = 0; $i < $jumlah ;$i++){
                            ?>
                                <?php
                                    if($i == $page_news){
                                ?>
                                    <li class="page-item active"><a class="page-link" href="?page=<?php
                                    echo $i;
                                    ?>#about"><?php
                                        echo $i + 1;
                                    ?></a></li>
                                <?php
                                    } else {
                                ?>
                                    <li class="page-item"><a class="page-link" href="?page=<?php
                                    echo $i;
                                    ?>#about"><?php
                                        echo $i + 1;
                                    ?></a></li>
                                <?php
                                    }
                                ?>
                            <?php
                                }
                                if ($jumlah == ($page_news + 1)){
                            ?>
                                <li class="page-item"><a class="page-link disabled" href="#."><i class="fa fa-angle-right"></i></a></li>
                            <?php
                                } else{
                            ?>
                                <li class="page-item"><a class="page-link" href="?page=<?php
                                    echo $page_news + 1;
                                ?>"><i class="fa fa-angle-right"></i></a></li>
                            <?php
                                }
                            ?>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 wow fadeInRight" data-wow-delay="300ms">
                <div class="heading-title mb-4">
                    <h2 class="darkcolor font-normal bottom30">Edward Brainard Pranata<br> <span class="defaultcolor">825200025</span></h2>
                </div>
                <div class="image"><img alt="SEO" src="app-assets/images/saya.jfif"></div>
                <p class="bottom35"><br>Ini merupakan web index untuk UAS WEBDEV saya yang sudah saya buat dan persiapkan. </p>
                <a href="profile.php" class="button gradient-btn mb-sm-0 mb-4">Learn More about ME</a>
            </div>
        </div>
    </div>
</section>
<!--Some News ends-->
<!-- WOrk Process-->
<section id="our-process" class="padding bgprimary">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 text-center">
                <div class="heading-title whitecolor wow fadeInUp" data-wow-delay="300ms">
                    <span>Tahapan untuk Menikmati Destinasi Luar Biasa</span>
                    <h2 class="font-normal">Step To Enjoy Life</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <ul class="process-wrapp">
                <li class="whitecolor wow fadeIn" data-wow-delay="300ms">
                    <span class="pro-step bottom20">01</span>
                    <p class="fontbold bottom20">Pilih Destinasi</p>
                    <p class="mt-n2 mt-sm-0">memilih destinasi yang memikat hari dari sekian banyak pilihan.</p>
                </li>
                <li class="whitecolor wow fadeIn" data-wow-delay="400ms">
                    <span class="pro-step bottom20">02</span>
                    <p class="fontbold bottom20">Memilih Hotel</p>
                    <p class="mt-n2 mt-sm-0">mencari hotel / penginapan yang cocok untuk anda.</p>
                </li>
                <li class="whitecolor wow fadeIn" data-wow-delay="500ms">
                    <span class="pro-step bottom20">03</span>
                    <p class="fontbold bottom20">Penerbangan</p>
                    <p class="mt-n2 mt-sm-0">Mencari pesawat untuk penerbangan ke destinasi</p>
                </li>
                <li class="whitecolor wow fadeIn active" data-wow-delay="600ms">
                    <span class="pro-step bottom20">04</span>
                    <p class="fontbold bottom20">Mobil</p>
                    <p class="mt-n2 mt-sm-0">mencari kendaraan lokal untuk pergi ke destinasi.</p>
                </li>
                <li class="whitecolor wow fadeIn" data-wow-delay="700ms">
                    <span class="pro-step bottom20">05</span>
                    <p class="fontbold bottom20">Nimmati Hidup</p>
                    <p class="mt-n2 mt-sm-0">Nikmati liburan di destinasi terbaik untuk anda.</p>
                </li>
                
            </ul>
        </div>
    </div>
</section>
<!--WOrk Process ends-->
<!-- Our Team-->
<section id="our-team" class="padding_top half-section-alt teams-border">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="heading-title wow fadeInLeft" data-wow-delay="200ms">
                    <span class="defaultcolor text-center text-md-left">slide gambar untuk melihat destinasi lain</span>
                    <h2 class="darkcolor font-normal bottom30 text-center text-md-left">Destinasi Pilihan Indonesia</h2>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 wow fadeInRight" data-wow-delay="200ms">
                <p class="heading_space mt-n3 mt-sm-0 text-center text-md-left">Sangat banyak destinasi wisata yang ada di indonesia dan semuanya sangat menabajubkan sehingga kami akan menampilkan beberapa pilihan destinasi yang menurut kami menarik.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div id="ourteam-slider" class="owl-carousel">
                <?php
                        $query = "select d.destinasinama, k.kategorinama, a.areanama, i.file
                        from destinasi d, kategori k, area a, image i
                        where d.destinasiid = i.destinasiid
                        and d.areaid = a.areaid
                        and d.kategoriid = k.kategoriid
                        group by d.destinasiid;";
                        $query_run = mysqli_query($connection, $query);
                        $number = 0;
                        while($data = mysqli_fetch_array($query_run)){
                    ?>
                        <div class="item">
                            <div class="team-box wow fadeInUp" data-wow-delay="<?php
                                $speed = 150 + ($number * 50);
                                echo $speed . "ms";
                            ?>">
                                <div class="image">
                                    <a href="#."><img src="../images/destinasi/<?php
                                        echo $data['file'];
                                    ?>" alt="" style="width: 290px; height:290px; object-fit: cover;"></a>
                                </div>
                                <div class="team-content">
                                    <a href="#."><h4 class="darkcolor"><?php
                                        echo $data['destinasinama'];
                                    ?></h4></a>
                                    <p><?php
                                        echo $data['kategorinama'] . " - " . $data['areanama'];
                                    ?></p>
                                    <ul class="social-icons-simple">
                                        <li><a class="facebook" href="javascript:void(0)"><i class="fab fa-facebook-f"></i> </a> </li>
                                        <li><a class="twitter" href="javascript:void(0)"><i class="fab fa-twitter"></i> </a> </li>
                                        <li><a class="insta" href="javascript:void(0)"><i class="fab fa-instagram"></i> </a> </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    <?php
                        $number = $number + 1;
                        }
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Our Team ends-->
<!--Hotel Slide Start-->
<section id="pricing" class="padding bglight">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 text-center">
                <div class="heading-title darkcolor wow fadeInUp" data-wow-delay="300ms">
                    <span class="defaultcolor">penawaran spesial hotel dari kami </span>
                    <h2 class="font-normal heading_space_half"> Hotel Offers </h2>
                </div>
            </div>
        </div>
        <div class="owl-carousel owl-theme no-dots" id="price-slider">
            <?php
                $query = "select h.hotelname, h.hotelharga, h.wifi, h.ac, h.restoran, h.kolamrenang, h.lift, h.parkir, kc.kecamatannama, kb.kabupatennama, p.provinsinama 
                from hotel h, kecamatan kc, kabupaten kb, provinsi p
                where h.kecamatanid = kc.kecamatanid
                and kc.kabupatenid = kb.kabupatenid
                and kb.provinsiid = p.provinsiid;";
                $query_run = mysqli_query($connection,$query);
                while($data = mysqli_fetch_array($query_run)){
            ?>
                <div class="item">
                    <div class="col-md-12">
                        <div class="pricing-item wow fadeInUp animated sale" data-wow-delay="300ms" data-sale="30">
                            <h3 class="font-light darkcolor"><?php
                                echo $data['hotelname']
                            ?></h3>
                            <p class="bottom30"><?php
                                echo $data['kecamatannama'] . ", " . $data['kabupatennama'] . ", " . $data['provinsinama'];
                            ?></p>
                            <div class="pricing-price darkcolor"><span class="pricing-currency"><?php
                                $harga = $data['hotelharga'];
                                echo rupiah($harga);
                            ?></span> /<span class="pricing-duration">room</span></div>
                            <ul class="pricing-list">
                                <?php
                                    if($data['wifi'] == "N"){
                                ?>
                                    <li class="price-not">WI-FI</li>
                                <?php
                                    } else {
                                ?>
                                    <li>WI-FI</li>
                                <?php
                                    } 
                                    if($data['ac'] == "N"){
                                ?>
                                    <li class="price-not">AC</li>
                                <?php
                                    } else {
                                ?>
                                    <li>AC</li>
                                <?php
                                    } 
                                    if($data['restoran'] == "N"){
                                ?>
                                    <li class="price-not">Restoran</li>
                                <?php
                                    } else {
                                ?>
                                    <li>Restoran</li>
                                <?php
                                    } 
                                    if($data['kolamrenang'] == "N"){
                                ?>
                                    <li class="price-not">Kolam Renang</li>
                                <?php
                                    } else {
                                ?>
                                    <li>Kolam Renang</li>
                                <?php
                                    } 
                                    if($data['lift'] == "N"){
                                ?>
                                    <li class="price-not">Lift</li>
                                <?php
                                    } else {
                                ?>
                                    <li>Lift</li>
                                <?php
                                    } 
                                    if($data['parkir'] == "N"){
                                ?>    <li class="price-not">Parkir</li>
                                <?php
                                    } else {
                                ?>
                                    <li>Parkir</li>
                                <?php
                                    }
                                ?>
                                
                            </ul>
                            <a class="button" href="javascript:void(0)">Choose Hotel</a>
                        </div>
                    </div>
                </div>
            <?php
                }
            ?>
        </div>
    </div>
</section>
<!--Hotel Slide ends-->
<!-- Testimonials -->
<section id="our-testimonial" class="bglight padding_bottom">
    <div class="parallax page-header testimonial-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-6 col-md-12 text-center text-lg-right">
                    <div class="heading-title wow fadeInUp padding_testi" data-wow-delay="300ms">
                        <span class="blackcolor">Restoran pilihan dengan makanan yang enak.</span>
                        <h2 class="blackcolor font-normal">Restoran Pilihan</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="owl-carousel" id="testimonial-slider">
            <!--item 1-->
            <?php
                $query = "select r.restorannama, r.restoranrating, r.restorandeskripsi, k.kecamatannama, i.file
                from restoran r, kecamatan k, image_kuliner i
                where r.kecamatanid = k.kecamatanid
                and i.restoranid = r.restoranid
                group by r.restoranid;";
                $query_run = mysqli_query($connection, $query);
                while($data = mysqli_fetch_array($query_run)){
            ?>
                <div class="item testi-box">
                    <div class="row align-items-center">
                        <div class="col-lg-4 col-md-12 text-center">
                            <div class="testimonial-round d-inline-block">
                                <img src="../images/kuliner/<?php
                                    echo $data['file'];
                                ?>" alt="" style="object-fit:cover; height:200px;">
                            </div>
                            <h4 class="defaultcolor font-light top15"><a href="#."><?php
                                echo $data['restorannama'];
                            ?></a></h4>
                            <p><?php
                                echo $data['kecamatannama'];
                            ?></p>
                        </div>
                        <div class="col-lg-6 offset-lg-2 col-md-10 offset-md-1 text-lg-left text-center">
                            <p class="bottom15 top90"><?php
                                $content = strlen($data['restorandeskripsi']) > 180 ? substr($data['restorandeskripsi'],0,180)." ..." : $data['restorandeskripsi'];
                                echo $content;
                            ?></p>
                            <span class="d-inline-block test-star">
                                <?php
                                    for($i = 0; $i < $data['restoranrating']; $i++){
                                ?>
                                <i class="fas fa-star"></i>
                                <?php
                                    }
                                ?>
                                <?php
                                    for($i = 0; $i < 5-$data['restoranrating']; $i++){
                                ?>
                                <i class="far fa-star"></i>
                                <?php
                                    }
                                ?>
                            </span>
                        </div>
                    </div>
                </div>
            <?php
                }
            ?>
        </div>
    </div>
</section>
<!--testimonials end-->
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
<!--custom functions and script-->
<script src="app-assets/js/functions.js"></script>
</body>
</html>