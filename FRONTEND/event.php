<!DOCTYPE html>
<html lang="en">
    <?php
        include "includes/config.php";
        if (isset($_GET['page'])){
            $page = $_GET['page'];
        } else{
            $page = 0;
        }
    ?>
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>EBP | Event</title>
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
<section id="main-banner-page" class="position-relative page-header blog2-header parallax section-nav-smooth">
    <div class="overlay overlay-dark opacity-7 z-index-1"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <div class="page-titles whitecolor text-center padding_top padding_bottom">
                    <h2 class="font-xlight">Kegiatan menarik</h2>
                    <h2 class="font-bold">Pilihan Kami</h2>
                    <h2 class="font-xlight">Untuk Anda</h2>
                </div>
            </div>
        </div>
        <div class="gradient-bg title-wrap">
            <div class="row">
                <div class="col-lg-12 col-md-12 whitecolor">
                    <h3 class="float-left">Event</h3>
                    <ul class="breadcrumb top10 bottom10 float-right">
                        <li class="breadcrumb-item hover-light"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item hover-light">Event</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Page Header ends -->
<!-- Our Blogs -->
<!--BLOG SECTION-->
<section id="ourblog" class="padding_top padding_bottom_half">
    <div class="container">
        <h2 class="d-none">Blog</h2>
        <div class="row">
            <div class="col-lg-8" id="blog">
                <?php
                    $get = 0 + ($page * 2);
                    $query = "select e.eventnama, e.eventket, date_format(e.eventmulai,'%d %M %Y') as mulai,
                    date_format(e.eventselesai,'%d %M %Y') as selesai, e.eventposter, e.eventsumber, k.kabupatennama
                    from kegiatan e, kabupaten k
                    where e.kabupatenkode = k.kabupatenid
                    limit $get,2;";
                    $query_run = mysqli_query($connection,$query);
                    while($data = mysqli_fetch_array($query_run)){
                ?>
                    <article class="blog-item heading_space wow fadeIn text-center text-md-left" data-wow-delay="300ms">
                        <div class="image"><img src="../images/event/<?php
                            echo $data['eventposter'];
                        ?>" alt="blog" class="border_radius"></div>
                        <p class="darkcolor font-weight-bold"><?php
                            echo "Sumber : " . $data['eventsumber'];
                        ?></p>
                        <h3 class="darkcolor font-bold bottom10 top30"> <a href="#"><?php
                            echo $data['eventnama'];
                        ?></a></h3>
                        <p class="font-bold"><?php
                            echo "Kabupaten     ".$data['kabupatennama'];
                        ?></p>
                        <p class="top15"><?php
                            echo $data['eventket'];
                        ?></p>
                        <p class="top15 font-weight-bold"><?php
                            echo "Kegiatan dari ". $data['mulai'] . " sampai " . $data['selesai'];
                        ?></p>
                        <a class=" button btn-yellow" href="#">Ikuti Event</a>
                    </article>
                <?php
                    }
                ?>
                
                
                <ul class="pagination justify-content-center justify-content-md-start top40 mb-4 mb-lg-0">
                    <?php
                        $query = "select count(*) as banyak
                        from kegiatan;";
                        $query_run = mysqli_query($connection, $query);
                        $data = mysqli_fetch_assoc($query_run);
                        $jumlah = ceil($data['banyak'] / 2);
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
            <div class="col-lg-4">
                <aside class="sidebar padding-bottom whitebox">
                    <div class="widget heading_space_half wow fadeIn" data-wow-delay="350ms">
                    <h4 class="text-capitalize darkcolor bottom20 text-center text-md-left">Recent Post</h4>
                        <?php
                            $query = "select n.news_destinasiid, n.newshead, date_format(n.newsdate,'%d %M %Y') as newsdate , i.file
                            from news_destinasi n, image i 
                            where n.destinasiid = i.destinasiid
                            group by n.news_destinasiid
                            order by newsdate desc 
                            limit 0,3;";
                            $query_run = mysqli_query($connection, $query);
                            while($data = mysqli_fetch_array($query_run)){
                        ?>
                            <div class="single_post d-table bottom15">
                                <a href="news-detail.php?content=<?php
                                    echo $data['news_destinasiid'];
                                ?>" class="post"><img src="../images/destinasi/<?php
                                    echo $data['file'];
                                ?>" alt="post image" style="width:50px; height:50px;object-fit: cover;"></a>
                                <div class="text">
                                    <a href="news-detail.php?content=<?php
                                    echo $data['news_destinasiid'];
                                    ?>"><?php
                                        $head = strlen($data['newshead']) > 20 ? substr($data['newshead'],0,20)." ..." : $data['newshead'];
                                        echo $head;
                                    ?></a>
                                    <span><?php
                                        echo $data['newsdate'];
                                    ?></span>
                                </div>
                            </div>
                        <?php
                            }
                        ?>
                    </div>
                    <div class="widget heading_space_half wow fadeIn text-center text-md-left" data-wow-delay="400ms">
                        <h4 class="text-capitalize darkcolor bottom20">Top Tags</h4>
                        <ul class="webtags">
                            <li><a href="#.">suban</a></li>
                            <li><a href="#.">air </a></li>
                            <li><a href="#.">gunung</a></li>
                            <li><a href="#.">keluarga</a></li>
                            <li><a href="#.">Bengkulu</a></li>
                            <li><a href="#.">modern</a></li>
                            <li><a href="#.">anak anak</a></li>
                        </ul>
                    </div>
                </aside>
            </div>
        </div>
    </div>
</section>
<!--BLOG SECTION END-->
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