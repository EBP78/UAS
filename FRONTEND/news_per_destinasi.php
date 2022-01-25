<!DOCTYPE html>
<html lang="en">
    <?php
        include "includes/config.php";
        if (isset($_GET['page'])){
            $page_news = $_GET['page'];
        } else{
            $page_news = 0;
        }
        if (isset($_GET['destinasi'])){
            $desID = $_GET['destinasi'];
        } else {
            $desID = "";
        }
    ?>
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>EBP | News / destinasi</title>
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
<?php
    include "menu.php";
?>
<!--Page Header-->
<section id="main-banner-page" class="position-relative page-header blog-header parallax section-nav-smooth">
    <div class="overlay overlay-dark opacity-6 z-index-1">
        
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <div class="page-titles whitecolor text-center padding_top padding_bottom">
                    <h2 class="font-xlight heading-title-small">Let's Get</h2>
                    <h2 class="font-bold">Read Latest News</h2>
                    <h2 class="font-xlight heading-title-small">With Us</h2>
                    <h4 class="font-light pt-2">The Best Destination News</h4>
                </div>
            </div>
        </div>
        <div class="gradient-bg title-wrap">
            <div class="row">
                <div class="col-lg-12 col-md-12 whitecolor">
                    <h3 class="float-left">News</h3>
                    <ul class="breadcrumb top10 bottom10 float-right">
                        <li class="breadcrumb-item hover-light"><a href="index=.php">Home</a></li>
                        <li class="breadcrumb-item hover-light">News</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Page Header ends -->
<!-- Our Blogs -->
<section id="our-blog" class="bglight padding_top padding_bottom_half">
    <div class="container">
        <div id="blog-measonry" class="cbp">
            <?php
                $get = 0 + ($page_news * 3  );
                $query = "select n.news_destinasiid, n.newshead, n.newscontent, date_format(newsdate,'%d %M %Y') as newsdate, i.file,
                (select count(*) from komentar) as komentar
                from news_destinasi n, image i 
                where n.imageid = i.imageid and n.destinasiid like '%$desID%'
                group by news_destinasiid
                limit $get,3;";
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
                            ?>" alt="Latest News" class="img-responsive" style="width:640px; height: 240px;object-fit: cover;">
                        </a>
                        <div class="news_desc">
                            <h3 class="text-capitalize font-normal darkcolor"><a href="news-detail.php?content=<?php
                                echo $data['news_destinasiid'];
                                ?>"><?php
                                $head = strlen($data['newshead']) > 45 ? substr($data['newshead'],0,45)." ..." : $data['newshead'];
                                echo $head;
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
                                $content = strlen($data['newscontent']) > 165 ? substr($data['newscontent'],0,165)." ..." : $data['newscontent'];
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
                        from news_destinasi
                        where destinasiid like '%$desID%';";
                        $query_run = mysqli_query($connection, $query);
                        $data = mysqli_fetch_assoc($query_run);
                        $jumlah = ceil($data['banyak'] / 3);
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
</section>
<!--Our Blogs Ends-->
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