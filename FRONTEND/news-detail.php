<!DOCTYPE html>
<html lang="en">
<?php
    include "includes/config.php";
    if(isset($_GET['content'])){
        $content = $_GET['content'];
    }
?>
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>EBP | News Main</title>
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
<section id="main-banner-page" class="position-relative page-header section-nav-smooth parallax blog-detail-header">
    <div class="overlay overlay-dark opacity-8 z-index-1"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <div class="page-titles whitecolor text-center padding_top padding_bottom">
                    <h2 class="font-xlight">kumpulan dari berita</h2>
                    <h2 class="font-bold">Destinasi Indonesia</h2>
                    <h2 class="font-xlight">Terbaik</h2>
                    <h3 class="font-light pt-2">dapat anda lihat disini</h3>
                </div>
            </div>
        </div>
        <div class="gradient-bg title-wrap">
            <div class="row">
                <div class="col-lg-12 col-md-12 whitecolor">
                    <h3 class="float-left">News Detail</h3>
                    <ul class="breadcrumb top10 bottom10 float-right">
                        <li class="breadcrumb-item"><a href="index-logistic.html">Home</a></li>
                        <li class="breadcrumb-item">News</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Page Header ends -->
<!-- Our Blogs -->
<?php
    $query = "select n.newshead, n.newscontent, date_format(newsdate,'%d %M %Y') as newsdate, i.file
    from news_destinasi n, image i 
    where n.destinasiid = i.destinasiid and n.news_destinasiid = '$content'
    group by news_destinasiid;";
    $query_run = mysqli_query($connection, $query);
    $data = mysqli_fetch_assoc($query_run);
?>
<section id="our-blog" class="bglight padding_top padding_bottom_half">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-7">
                <div class="news_item shadow-equal">
                    <div class="image">
                        <img src="../images/destinasi/<?php
                            echo $data['file'];
                        ?>" alt="Latest News" class="img-responsive" style="height: 400px;object-fit: cover;">
                    </div>
                    <div class="news_desc text-center text-md-left">
                        <h3 class="text-capitalize font-normal darkcolor"><a href="#."><?php
                            echo $data['newshead'];
                        ?></a></h3>
                        <ul class="meta-tags top20 bottom20">
                            <li><a href="#."><i class="fas fa-calendar-alt"></i> <?php
                                echo $data['newsdate'];
                            ?></a></li>
                            <li><a href="#."> <i class="far fa-user"></i> Edward </a></li>
                            <li><a href="#."><i class="far fa-comment-dots"></i>0</a></li>
                        </ul>
                        <p class="bottom35"><?php
                            echo nl2br($data['newscontent']);
                        ?></p>
                        <blockquote class="blockquote darkcolor heading_space">Lestarikan Budaya dengan tetap mengunjungi destinasi wisata dalam negeri</blockquote>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-5">
                <aside class="sidebar whitebox mt-5 mt-md-0">
                    <div class="widget heading_space_half shadow-equal wow fadeIn" data-wow-delay="350ms">
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
                    <div class="widget shadow-equal heading_space_half text-center text-md-left">
                        <h4 class="text-capitalize darkcolor bottom20">Categories</h4>
                        <ul class="webcats">
                            <?php
                                $query = "select kategoriid, kategorinama from kategori";
                                $query_run = mysqli_query($connection, $query);
                                while($data = mysqli_fetch_array($query_run)){
                            ?>
                                <?php
                                    $katid = $data['kategoriid'];
                                    $count = "select count(n.news_destinasiid) as count
                                    from news_destinasi n, destinasi d, kategori k 
                                    where n.destinasiid = d.destinasiid
                                    and d.kategoriid = k.kategoriid
                                    and k.kategoriid = '$katid';";
                                    $count_run = mysqli_query($connection, $count);
                                    $hasil  =mysqli_fetch_assoc($count_run);
                                ?>
                                <li><a href="#."><?php
                                    echo $data['kategorinama'];
                                ?> <span>(<?php
                                    echo $hasil['count'];
                                ?>)</span></a></li>
                            <?php
                                }
                            ?>
                        </ul>
                    </div>
                    <div class="widget shadow-equal heading_space_half text-center text-md-left">
                        <h4 class="text-capitalize darkcolor bottom20">Tags</h4>
                        <ul class="webtags">
                            <li><a href="#.">wisata</a></li>
                            <li><a href="#.">Bengkulu</a></li>
                            <li><a href="#.">alam</a></li>
                            <li><a href="#.">gunung</a></li>
                            <li><a href="#.">pantai</a></li>
                            <li><a href="#.">extrim</a></li>
                            <li><a href="#.">popular</a></li>
                            <li><a href="#.">hutan</a></li>
                            <li><a href="#.">baru</a></li>
                            <li><a href="#.">hidden</a></li>
                        </ul>
                    </div>
                </aside>
            </div>
        </div>
    </div>
</section>
<!--Our Blog Ends-->
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