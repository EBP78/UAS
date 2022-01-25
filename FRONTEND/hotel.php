<!DOCTYPE html>
<html lang="en">
    <?php
        include "includes/config.php";
        if (isset($_GET['page'])){
            $page = $_GET['page'];
        } else{
            $page = 0;
        }
        function rupiah($angka){
        
            $hasil_rupiah = "Rp " . number_format($angka,2,',','.');
            return $hasil_rupiah;
         
        }
    ?>
<head>
   <!-- Required meta tags -->
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <title>EBP | Hotel</title>
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
<section id="main-banner-page" class="position-relative page-header shop-header section-nav-smooth parallax">
   <div class="overlay overlay-dark opacity-6 z-index-1"></div>
   <div class="container">
      <div class="row">
         <div class="col-lg-8 offset-lg-2">
            <div class="page-titles whitecolor text-center padding_top padding_bottom">
               <h2 class="font-xlight">Menginap di</h2>
               <h2 class="font-bold">Hotel Terbaik</h2>
               <h2 class="font-xlight">pilihan Kami</h2>
            </div>
         </div>
      </div>
      <div class="gradient-bg title-wrap">
         <div class="row">
            <div class="col-lg-12 col-md-12 whitecolor">
               <h3 class="float-left">Hotel</h3>
               <ul class="breadcrumb top10 bottom10 float-right">
                  <li class="breadcrumb-item hover-light"><a href="index.php">Home</a></li>
                  <li class="breadcrumb-item hover-light">Hotel</li>
               </ul>
            </div>
         </div>
      </div>
   </div>
</section>
<!--Page Header ends -->
<!--Shopping-->
<section id="our-shop" class="padding_top padding_bottom_half">
   <div class="container">
      <div class="row">
         <div class="col-md-12 text-center wow fadeIn" data-wow-delay="300ms">
            <h2 class="heading bottom30 darkcolor font-light2">Best <span class="font-normal">Hotel</span>
               <span class="divider-center"></span>
            </h2>
            <div class="col-md-8 offset-md-2 heading_space">
               <p>Tempat menginap pilihan kami</p>
            </div>
         </div>
         <?php
            $get = 0 + ($page * 3);
            $query = "select h.hotelname, h.hotelharga, h.wifi, h.ac, h.restoran, h.kolamrenang, h.lift, h.parkir, kc.kecamatannama, kb.kabupatennama, p.provinsinama, h.link
            from hotel h, kecamatan kc, kabupaten kb, provinsi p
            where h.kecamatanid = kc.kecamatanid
            and kc.kabupatenid = kb.kabupatenid
            and kb.provinsiid = p.provinsiid
            limit $get,3;";
             $query_run = mysqli_query($connection,$query);
            while($data = mysqli_fetch_array($query_run)){
         ?>
            <div class="col-lg-4 col-md-6 col-sm-6 wow fadeIn" data-wow-delay="300ms">
                <div class="shopping-box bottom30">
                <div class="image sale" data-sale="30">
                    <img src="app-assets/images/hotel.jpg" alt="hotel">
                    <div class="overlay overlay-blue center-block">
                        <a class="opens" href="<?php
                            echo $data['link'];
                        ?>" title="Add To Cart" target="_blank"><i class="fa fa-bed"></i></a>
                    </div>
                </div>
                <div class="shop-content text-center">
                    <h4 class="darkcolor pb-2"><a href="<?php
                            echo $data['link'];
                        ?>" target="_blank"><?php
                        echo $data['hotelname'];
                    ?></a></h4>
                    <p><?php
                        echo $data['kecamatannama'] . ", " . $data['kabupatennama'] . ", " . $data['provinsinama'];
                    ?></p>
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
                    <h4 class="price-product"><?php
                        echo rupiah($data['hotelharga']);
                    ?></h4>
                </div>
                </div>
            </div>
         <?php
            }
         ?>
         <div class="col-lg-12 col-md-12">
            <ul class="pagination justify-content-center top20 wow fadeInUp" data-wow-delay="400ms">
                <?php
                    $query = "select count(*) as banyak
                    from hotel;";
                    $query_run = mysqli_query($connection, $query);
                    $data = mysqli_fetch_assoc($query_run);
                    $jumlah = ceil($data['banyak'] / 3);
                    if ($page == 0){
                ?>
                    <li class="page-item"><a class="page-link disabled" href="#."><i class="fa fa-angle-left"></i></a></li>
                <?php
                    } else{
                ?>
                    <li class="page-item"><a class="page-link" href="?page=<?php
                        echo $page - 1;
                    ?>"><i class="fa fa-angle-left"></i></a></li>
                <?php
                    }
                    for($i = 0; $i < $jumlah ;$i++){
                ?>
                    <?php
                        if($i == $page){
                    ?>
                        <li class="page-item active"><a class="page-link" href="?page=<?php
                        echo $i;
                        ?>"><?php
                            echo $i + 1;
                        ?></a></li>
                    <?php
                        } else {
                    ?>
                        <li class="page-item"><a class="page-link" href="?page=<?php
                        echo $i;
                        ?>"><?php
                            echo $i + 1;
                        ?></a></li>
                    <?php
                        }
                    ?>
                <?php
                    }
                    if ($jumlah == ($page + 1)){
                ?>
                    <li class="page-item"><a class="page-link disabled" href="#."><i class="fa fa-angle-right"></i></a></li>
                <?php
                    } else{
                ?>
                    <li class="page-item"><a class="page-link" href="?page=<?php
                        echo $page + 1;
                    ?>"><i class="fa fa-angle-right"></i></a></li>
                <?php
                    }
                ?>
            </ul>
         </div>
      </div>
   </div>
</section>
<!--Shopping ends-->
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