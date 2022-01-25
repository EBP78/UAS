<!DOCTYPE html>
<html lang="en">
    <?php
        include "includes/config.php";
    ?>
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>EBP | Kategori</title>
    <link href="app-assets/images/favicon.ico" rel="icon">
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
<!--PreLoader-->
<div class="loader">
    <div class="loader-spinner"></div>
</div>
<!--PreLoader Ends-->
<?php
    include "menu.php";
?>
<!--Page Header-->
<section id="main-banner-page" class="position-relative page-header service-header section-nav-smooth parallax">
    <div class="overlay overlay-dark opacity-7 z-index-1"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <div class="page-titles whitecolor text-center padding_top padding_bottom">
                    <h2 class="font-xlight pt-3">We Provide The</h2>
                    <h2 class="font-bold">Best Destination</h2>
                    <h2 class="font-xlight">To You All</h2>
                    <h3 class="font-light pb-4 pt-2">So Enjoy Your Vacation With us</h3>
                </div>
            </div>
        </div>
        <div class="gradient-bg title-wrap mt-n5">
            <div class="row">
                <div class="col-lg-12 col-md-12 whitecolor">
                    <h3 class="float-left">Kategori</h3>
                    <ul class="breadcrumb top10 bottom10 float-right">
                        <li class="breadcrumb-item hover-light"><a href="index-logistic.html">Home</a></li>
                        <li class="breadcrumb-item hover-light">Destination_gallery</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Page Header ends -->
<!-- Services us -->
<section id="our-services" class="padding bglight">
    <div class="container">
        <div class="col-md-12 text-center heading_space wow fadeIn" data-wow-delay="300ms">
            <h2 class="heading bottom30 darkcolor font-light2">The <span class="font-weight-normal">Best Destination</span> 
                <span class="divider-center"></span>
            </h2>
            <div class="col-md-8 offset-md-2">
                <p class="mb-n3">silahkan memilih tab untuk melihat kategori tertentu dan kemi menyediakan beberapa ketegori: </p>
                <br>
            </div>
            <div class="col-md-10 offset-md-1">
                <?php
                    $query = "select kategorinama, kategoriketerangan, kategorireferensi from kategori;";
                    $query_run  = mysqli_query($connection, $query);
                    while($data = mysqli_fetch_array($query_run)){
                ?>
                    <p class="mb-n3"><?php
                        echo "Kategori " . $data['kategorinama'] . " yang menyajikan " . $data['kategoriketerangan'] . " yang bereferensi dari " . $data['kategorireferensi'];
                    ?></p>
                    <br>
                <?php
                    }
                ?>
            </div>
        </div>
        <div id="services-filter" class="cbp-l-filters dark bottom40 wow fadeIn d-table mx-auto" data-wow-delay="350ms">
            <div data-filter="*" class="cbp-filter-item">
                <span>All</span>
            </div>
            <?php
                $query = "select kategorinama from kategori;";
                $query_run = mysqli_query($connection, $query);
                while($data = mysqli_fetch_array($query_run)){
            ?>
                <div data-filter=".<?php
                    echo $data['kategorinama'];
                ?>" class="cbp-filter-item">
                    <span><?php
                        echo $data['kategorinama'];
                    ?></span>
                </div>
            <?php
                }
            ?>
        </div>
        <div id="services-measonry" class="cbp">
            <?php
                $query = "select d.destinasiid, d.destinasialamat, d.destinasinama, p.provinsinama, i.file, k.kategorinama
                from destinasi d, provinsi p, image i, area a, kategori k
                where d.destinasiid = i.destinasiid
                and d.kategoriid = k.kategoriid
                and d.areaid = a.areaid
                and a.provinsiid = p.provinsiid
                group by d.destinasiid;";
                $query_run = mysqli_query($connection, $query);
                while($data = mysqli_fetch_array($query_run)){
            ?>
                <div class="cbp-item <?php
                    echo $data['kategorinama'];
                ?> design">
                    <div class="services-main">
                        <div class="image bottom10">
                            <div class="image"><img alt="SEO" src="../images/destinasi/<?php
                                echo $data['file'];
                            ?>" style="height: 260px; object-fit:cover;"></div>
                            <div class="overlay">
                                <a href="#" class="overlay_center border_radius"><i class="fa fa-eye"></i></a>
                            </div>
                        </div>
                        <div class="services-content brand text-center text-md-left">
                            <h3 class="bottom10 darkcolor"><a href="services-detail.html"><?php
                                echo $data['destinasinama'];
                            ?></a></h3>
                            <p class="bottom15"><?php
                                $content = strlen($data['destinasialamat']) > 70 ? substr($data['destinasialamat'],0,70)." ..." : $data['destinasialamat'];
                                echo $content;
                            ?>
                            </p>
                            <a href="news_per_destinasi.php?destinasi=<?php
                                echo $data['destinasiid'];
                            ?>" class="button-readmore">See More <span class="darkcolor font-weight-bold"><?php
                                $countID = $data['destinasiid'];
                                $count = "select count(*) as banyak from news_destinasi where destinasiid = '$countID';";
                                $count_run = mysqli_query($connection, $count);
                                $count_data = mysqli_fetch_assoc($count_run);
                                echo " (" . $count_data['banyak'] . " News)";
                            ?></span></a>
                        </div>
                    </div>
                </div>
            <?php
                }
            ?>
        </div>
    </div>
</section>
<!-- Services us ends -->
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