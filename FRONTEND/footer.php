<!--Site Footer Here-->
<footer id="site-footer" class=" bgprimary padding_top">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="footer_panel padding_bottom_half bottom20">
                    <a href="index-logistic.html" class="footer_logo bottom25"><img src="app-assets/images/logo_dark.png" alt="MegaOne"></a>
                    <p class="whitecolor bottom25">Edward Brainard Pranata (825200025) seorang mahasiswa untar yang lagi kerja UASnya</p>
                    <div class="d-table w-100 address-item whitecolor bottom25">
                        <span class="d-table-cell align-middle"><i class="fas fa-mobile-alt"></i></span>
                        <p class="d-table-cell align-middle bottom0">
                            nomor telepon rahasia <a class="d-block" href="mailto:web@support.com">edwardbrainardpranata@gmail.com</a>
                        </p>
                    </div>
                    <ul class="social-icons white wow fadeInUp" data-wow-delay="300ms">
                        <li><a href="javascript:void(0)" class=""><i class="fab fa-facebook-f"></i> </a> </li>
                        <li><a href="javascript:void(0)" class=""><i class="fab fa-twitter"></i> </a> </li>
                        <li><a href="javascript:void(0)" class=""><i class="fab fa-linkedin-in"></i> </a> </li>
                        <li><a href="javascript:void(0)" class=""><i class="fab fa-instagram"></i> </a> </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="footer_panel padding_bottom_half bottom20">
                    <h3 class="whitecolor bottom25">Latest News</h3>
                    <ul class="latest_news whitecolor">
                        <?php
                            $query = "select newshead, date_format(newsdate,'%d %M %Y') as newsdate from news_destinasi order by newsdate desc limit 0,3;";
                            $query_run = mysqli_query($connection, $query);
                            while($data = mysqli_fetch_array($query_run)){
                        ?>
                            <li> <a href="#."><?php
                                $content = strlen($data['newshead']) > 30 ? substr($data['newshead'],0,30)." ..." : $data['newshead'];
                                echo $content;
                            ?></a> <span class="date defaultcolor"><?php
                                echo $data['newsdate'];
                            ?></span> </li>
                        <?php
                            }
                        ?>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="footer_panel padding_bottom_half bottom20 pl-0 pl-lg-5">
                    <h3 class="whitecolor bottom25">Our Services</h3>
                    <ul class="links">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="news.php">News</a></li>
                        <li><a href="hotel.php">Hotel</a></li>
                        <li><a href="kategori.php">Kategori</a></li>
                        <li><a href="pesawat.php">Pesawat</a></li>
                        <li><a href="mobil.php">Mobil</a></li>
                        <li><a href="destinasi_gallery.php">Destinasi</a></li>
                        <li><a href="restoran.php">Restoran</a></li>
                        <li><a href="Event.php">Event</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="footer_panel padding_bottom_half bottom20">
                    <h3 class="whitecolor bottom25">database table</h3>
                    <p class="whitecolor bottom25">banyak data dan nama table dalam database</p>
                    <ul class="hours_links whitecolor" style="height: 150px; overflow-x:hidden">
                        <?php
                            $query = mysqli_query($connection, "SELECT table_name
                            FROM INFORMATION_SCHEMA.TABLES 
                            WHERE table_schema = 'dbwisata';");
                            while($row = mysqli_fetch_array($query)){
                                $data_raw = $row['table_name'];
                                // $data_get = mysqli_query($connection, $data_raw);
                                $data_get = mysqli_query($connection, "select \"$data_raw\" as table_name, Count(*) as exact_row_count From $data_raw;");
                                $data = mysqli_fetch_assoc($data_get);
                        ?>
                            <li><span><?php
                                echo $data['table_name'];
                            ?>:</span> <span><?php
                                echo $data['exact_row_count'];
                            ?></span></li>
                        <?php
                            }
                        ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
<!--Footer ends-->