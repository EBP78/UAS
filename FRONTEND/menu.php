<!--PreLoader-->
<div class="loader">
    <div class="loader-spinner"></div>
</div>
<!--PreLoader Ends-->
<!-- header -->
<header class="site-header" id="header">
    <nav class="navbar navbar-expand-lg transparent-bg static-nav">
        <div class="container">
            <a class="navbar-brand" href="index.php">
                <img src="app-assets/images/logo_dark.png" alt="logo" class="logo-default">
                <img src="app-assets/images/logo_light.png" alt="logo" class="logo-scrolled">
            </a>
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="news.php">News</a>
                    </li>
                    <li class="nav-item dropdown static">
                        <a class="nav-link dropdown-toggle" href="javascript:void(0)" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Transportasi </a>
                        <ul class="dropdown-menu megamenu">
                            <li>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-12 col-sm-12">
                                            <h5 class="dropdown-title bottom10"> Pesawat </h5>
                                            <?php
                                                $query = "select distinct p1.provinsinama as asal, p2.provinsinama as tujuan
                                                from pesawat p, provinsi p1, provinsi p2
                                                where p.provinsiasal = p1.provinsiid and p.provinsitujuan = p2.provinsiid;";
                                                $query_run = mysqli_query($connection, $query);
                                                while($data = mysqli_fetch_array($query_run)){
                                            ?>
                                            <a class="dropdown-item" href="pesawat.php"><?php
                                                echo $data['asal'] . " ke " . $data['tujuan'];
                                            ?></a>
                                            <?php
                                                }
                                            ?>
                                        </div>
                                        <div class="col-lg-6 col-md-12 col-sm-12">
                                            <h5 class="dropdown-title opacity-10"> Mobil </h5>
                                            <?php
                                                $query = "select distinct k1.kabupatennama as asal, k2.kabupatennama as tujuan
                                                from mobil m, kabupaten k1, kabupaten k2
                                                where m.kabupatenasal = k1.kabupatenid and m.kabupatentujuan = k2.kabupatenid;";
                                                $query_run = mysqli_query($connection, $query);
                                                while($data = mysqli_fetch_array($query_run)){
                                            ?>
                                            <a class="dropdown-item" href="mobil.php"><?php
                                                echo $data['asal'] . " ke " . $data['tujuan'];
                                            ?></a>
                                            <?php
                                                }
                                            ?>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown position-relative">
                        <a class="nav-link dropdown-toggle" href="javascript:void(0)" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Hotel </a>
                        <div class="dropdown-menu">
                            <?php
                                $query = "select provinsinama from provinsi;";
                                $query_run = mysqli_query($connection, $query);
                            ?>
                            <?php
                                while($data = mysqli_fetch_array($query_run)){
                            ?>
                                <a class="dropdown-item" href="hotel.php"><?php
                                    echo $data['provinsinama'];
                                ?></a>
                            <?php
                                }
                            ?>
                        </div>
                    </li>
                    <li class="nav-item dropdown position-relative">
                        <a class="nav-link dropdown-toggle" href="javascript:void(0)" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Kategori </a>
                        <div class="dropdown-menu">
                            <?php
                                $query = "select kategorinama from kategori;";
                                $query_run = mysqli_query($connection, $query);
                            ?>
                            <?php
                                while($data = mysqli_fetch_array($query_run)){
                            ?>
                                <a class="dropdown-item" href="kategori.php"><?php
                                    echo $data['kategorinama'];
                                ?></a>
                            <?php
                                }
                            ?>
                        </div>
                    </li>
                    <li class="nav-item dropdown position-relative">
                        <a class="nav-link dropdown-toggle" href="javascript:void(0)" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Destinasi </a>
                        <div class="dropdown-menu">
                            <?php
                                $query = "select provinsinama from provinsi;";
                                $query_run = mysqli_query($connection, $query);
                            ?>
                            <?php
                                while($data = mysqli_fetch_array($query_run)){
                            ?>
                                <a class="dropdown-item" href="destinasi_gallery.php"><?php
                                    echo $data['provinsinama'];
                                ?></a>
                            <?php
                                }
                            ?>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="restoran.php">Restoran</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="event.php">Event</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="profile.php">Profile</a>
                    </li>
                </ul>
            </div>
        </div>
        <!--side menu open button-->
        <a href="javascript:void(0)" class="d-inline-block sidemenu_btn" id="sidemenu_toggle">
            <span></span> <span></span> <span></span>
        </a>
    </nav>
    <!-- side menu -->
    <div class="side-menu opacity-0 bg-yellow">
        <div class="overlay"></div>
        <div class="inner-wrapper">
            <span class="btn-close" id="btn_sideNavClose"><i></i><i></i></span>
            <nav class="side-nav w-100">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="news.php">News</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link collapsePagesSideMenu" data-toggle="collapse" href="#sideNavTransportasi">
                            Transportasi <i class="fas fa-chevron-down"></i>
                        </a>
                        <div id="sideNavTransportasi" class="collapse sideNavPages">
                            <ul class="navbar-nav mt-2">
                                <li class="nav-item">
                                    <a class="nav-link collapsePagesSideMenu" data-toggle="collapse" href="#inner-pesawat">
                                        Pesawat <i class="fas fa-chevron-down"></i>
                                    </a>
                                    <div id="inner-pesawat" class="collapse sideNavPages sideNavPagesInner">
                                        <ul class="navbar-nav mt-2">
                                            <?php
                                                $query = "select distinct p1.provinsinama as asal, p2.provinsinama as tujuan
                                                from pesawat p, provinsi p1, provinsi p2
                                                where p.provinsiasal = p1.provinsiid and p.provinsitujuan = p2.provinsiid;";
                                                $query_run = mysqli_query($connection, $query);
                                                while($data = mysqli_fetch_array($query_run)){
                                            ?>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="pesawat.php"><?php
                                                        echo $data['asal'] . " ke " . $data['tujuan'];
                                                    ?></a>
                                                </li>
                                            <?php
                                                }
                                            ?>
                                        </ul>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link collapsePagesSideMenu" data-toggle="collapse" href="#inner-mobil">
                                        Mobil <i class="fas fa-chevron-down"></i>
                                    </a>
                                    <div id="inner-mobil" class="collapse sideNavPages sideNavPagesInner">
                                        <ul class="navbar-nav mt-2">
                                            <?php
                                                $query = "select distinct k1.kabupatennama as asal, k2.kabupatennama as tujuan
                                                from mobil m, kabupaten k1, kabupaten k2
                                                where m.kabupatenasal = k1.kabupatenid and m.kabupatentujuan = k2.kabupatenid;";
                                                $query_run = mysqli_query($connection, $query);
                                                while($data = mysqli_fetch_array($query_run)){
                                            ?>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="mobil.php"><?php
                                                        echo $data['asal'] . " ke " . $data['tujuan'];
                                                    ?></a>
                                                </li>
                                            <?php
                                                }
                                            ?>   
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link collapsePagesSideMenu" data-toggle="collapse" href="#sideNavhotel">
                            Hotel <i class="fas fa-chevron-down"></i>
                        </a>
                        <div id="sideNavhotel" class="collapse sideNavPages">
                            <ul class="navbar-nav">
                                <?php
                                    $query = "select provinsinama from provinsi;";
                                    $query_run = mysqli_query($connection, $query);
                                ?>
                                <?php
                                    while($data = mysqli_fetch_array($query_run)){
                                ?>
                                    <li class="nav-item">
                                        <a class="nav-link" href="hotel.php"><?php
                                            echo $data['provinsinama'];
                                        ?></a>
                                    </li>
                                <?php
                                    }
                                ?>
                                
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link collapsePagesSideMenu" data-toggle="collapse" href="#sideNavkategori">
                            Kategori <i class="fas fa-chevron-down"></i>
                        </a>
                        <div id="sideNavkategori" class="collapse sideNavPages">
                            <ul class="navbar-nav">
                                <?php
                                    $query = "select kategorinama from kategori;";
                                    $query_run = mysqli_query($connection, $query);
                                ?>
                                <?php
                                    while($data = mysqli_fetch_array($query_run)){
                                ?>
                                    <li class="nav-item">
                                        <a class="nav-link" href="kategori.php"><?php
                                            echo $data['kategorinama'];
                                        ?></a>
                                    </li>
                                <?php
                                    }
                                ?>
                                
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link collapsePagesSideMenu" data-toggle="collapse" href="#sideNavDestinasi">
                            Destinasi <i class="fas fa-chevron-down"></i>
                        </a>
                        <div id="sideNavDestinasi" class="collapse sideNavPages">
                            <ul class="navbar-nav">
                                <?php
                                    $query = "select provinsinama from provinsi;";
                                    $query_run = mysqli_query($connection, $query);
                                ?>
                                <?php
                                    while($data = mysqli_fetch_array($query_run)){
                                ?>
                                    <li class="nav-item">
                                        <a class="nav-link" href="app-assets/destinasi_gallery.php"><?php
                                            echo $data['provinsinama'];
                                        ?></a>
                                    </li>
                                <?php
                                    }
                                ?>
                                
                            </ul>
                        </div>
                    </li>   
                    <li class="nav-item">
                        <a class="nav-link" href="restoran.php">Restoran</a>
                    </li>     
                    <li class="nav-item">
                        <a class="nav-link" href="event.php">Event</a>
                    </li>              
                    <li class="nav-item">
                        <a class="nav-link" href="profile.php">Profile</a>
                    </li>
                </ul>
            </nav>
            <div class="side-footer w-100">
                <ul class="social-icons-simple white top40">
                    <li><a href="javascript:void(0)" class="facebook"><i class="fab fa-facebook-f"></i> </a> </li>
                    <li><a href="javascript:void(0)" class="twitter"><i class="fab fa-twitter"></i> </a> </li>
                    <li><a href="javascript:void(0)" class="insta"><i class="fab fa-instagram"></i> </a> </li>
                </ul>
                <p class="whitecolor">&copy; 2021 Edward Brainard Pranata</p>
            </div>
        </div>
    </div>
    <div id="close_side_menu" class="tooltip"></div>
    <!-- End side menu -->
</header>
<!-- header -->