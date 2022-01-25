<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<?php
    ob_start();
    session_start();
    if(!isset($_SESSION['email'])){
        header("location:login.php");
    }
    include "includes/config.php";

     // variabel yang di get dari destinasi saat klik button
     $editID = $_GET['edit'];
     // get data untuk langsung ditampilkan di form
     $get = "select newshead, newscontent, date_format(newsdate,'%d/%c/%Y') as newsdate, destinasiid
     from news_destinasi
     where news_destinasiid = '$editID';";
     $get_run = mysqli_query($connection, $get);
     $get_data = mysqli_fetch_array($get_run);

    if(isset($_POST['submit'])){
        if(empty($_POST['head'])){
            echo '<script type="text/javascript">
                window.location.assign("news_destinasi.php");
            </script>';
        } elseif ($_POST['destinasi'] == ""){
            header("location:news_destinasi.php");
        } else {
            $kode = $_POST['kode'];
            $head = $_POST['head'];
            $content = $_POST['content'];
            $tanggal = date('Y-m-d', strtotime(strtr($_POST['tanggal'], '/', '-')));
            $destinasi = $_POST['destinasi'];
            
            mysqli_query($connection, "update news_destinasi set
            newshead = '$head',
            newscontent = '$content',
            newsdate = '$tanggal',
            destinasiid = '$destinasi'
            where news_destinasiid = '$editID';");

            header("location:news_destinasi.php");
        }            
    }
    $kosong = '';
    if(isset($_POST['reset'])){
        $kosong = '';
    }
?>

<!-- BEGIN: Head-->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Materialize is a Material Design Admin Template,It's modern, responsive and based on Material Design by Google.">
    <meta name="keywords" content="materialize, admin template, dashboard template, flat admin template, responsive admin template, eCommerce dashboard, analytic dashboard">
    <meta name="author" content="ThemeSelect">
    <title>EBP - BackEnd - Table News_Destinasi</title>
    <link rel="apple-touch-icon" href="app-assets/images/favicon/apple-touch-icon-152x152.png">
    <link rel="shortcut icon" type="image/x-icon" href="app-assets/images/favicon/favicon-32x32.png">

    <link href="app-assets/css/icon.css?family=Material+Icons" rel="stylesheet">

    <!-- BEGIN: VENDOR CSS-->
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/vendors.min.css">
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/flag-icon/css/flag-icon.min.css">
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/data-tables/css/jquery.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/data-tables/extensions/responsive/css/responsive.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/data-tables/css/select.dataTables.min.css">
    <link rel="stylesheet" href="app-assets/vendors/select2/select2.min.css" type="text/css">
    <link rel="stylesheet" href="app-assets/vendors/select2/select2-materialize.css" type="text/css">
    <!-- END: VENDOR CSS-->

    <!-- BEGIN: Page Level CSS-->
    <link rel="stylesheet" type="text/css" href="app-assets/css/themes/vertical-dark-menu-template/materialize.min.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/themes/vertical-dark-menu-template/style.min.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/pages/data-tables.min.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/pages/form-select2.min.css">
    <!-- END: Page Level CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="app-assets/css/custom/custom.css">
    <!-- END: Custom CSS-->

</head>
<!-- END: Head-->
<body class="vertical-layout page-header-light vertical-menu-collapsible vertical-dark-menu preload-transitions 2-columns   " data-open="click" data-menu="vertical-dark-menu" data-col="2-columns">

    <?php
        include"menu.php";
    ?>

    <!-- BEGIN: Page Main-->
    <div id="main">
        <div class="row">
            <div class="col s12 ">
                <div class="container">

                    <div class="card">
                        <div class="card-content">
                            <h4 class="card-title">
                                Edit Tabel News_Destinasi Database A_wisata
                            </h4>
                            <p>dapat langsung melakukan Edit ke tabel a_wisata.News_destinasi dengan menggunakan form dibawah ini</p>
                        </div>
                    </div>

                    <div id="validation" class="card card card-default scrollspy">
                        <div class="card-content">
                            <h4 class="card-title">Form Edit News</h4>
                            <form method="POST">
                                <div class="row">
                                    <div class="input-field col s12">
                                        <i class="material-icons prefix">fingerprint</i>
                                        <input id="kode" type="text" name="kode" class="validate" value="<?php
                                            echo $editID;
                                        ?>" disabled>
                                        <label for="kode">News ID</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s12">
                                        <i class="material-icons prefix">person_pin</i>
                                        <input id="head" type="text" name="head" class="validate" value="<?php
                                            echo $get_data['newshead'];
                                        ?>">
                                        <label for="head">News Head</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s12">
                                        <i class="material-icons prefix">location_on</i>
                                        <textarea id="content" name="content" class="materialize-textarea validate"><?php
                                            echo $get_data['newscontent'];
                                        ?></textarea>
                                        <label for="content">News Content</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s12">
                                        <i class="material-icons prefix">date_range</i>
                                        <input id="tanggal" type="text" name="tanggal" class="datepicker validate" value="<?php
                                            echo $get_data['newsdate'];
                                        ?>">
                                        <label for="tanggal">Tanggal Provinsi Berdiri</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s12">
                                        <i class="material-icons prefix">featured_play_list</i>
                                        <select class="select2 browser-default validate" name="destinasi" id="destinasi">
                                            <?php
                                                $destinasi = mysqli_query($connection, "select destinasiid, destinasinama
                                                from destinasi;");
                                                while($row = mysqli_fetch_array($destinasi)){
                                                if($row['destinasiid'] == $get_data['destinasiid']){
                                            ?>  
                                                <option value="<?php
                                                    echo $row['destinasiid'];
                                                ?>" selected><?php
                                                    echo $row['destinasiid'] . " " . $row['destinasinama'];
                                                ?></option>
                                            <?php
                                                } else {
                                            ?>
                                                <option value="<?php
                                                    echo $row['destinasiid'];
                                                ?>"><?php
                                                    echo $row['destinasiid'] . " " . $row['destinasinama'];
                                                ?></option>
                                            <?php
                                                    }
                                                }
                                            ?>
                                        </select>
                                        <!-- <label for="kategori">Kategori</label> -->
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s12">
                                        <button class="btn cyan waves-effect waves-light right" type="submit" name="submit">Submit
                                            <i class="material-icons right">send</i>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-content">
                            <h4 class="card-title">
                                Output Tabel news_destinasi dari Database A_wisata
                            </h4>
                            <p>output dari tabel a_wisata.news_destinasi dalam bentuk tabel dan juga bisa langsung melakukan edit dan hapus data dari tabel dibawah ini.</p>
                        </div>
                    </div>

                    <div class="section section-data-tables">
                        <div class="row">
                            <div class="col s12">
                                <div class="card">
                                    <div class="card-content">
                                    <h4 class="card-title">Tabel news_destinasi</h4>
                                    <div class="row">
                                        <div class="col s12">
                                        <p>dapat melakukan search dari tempat search dibawah dan mengatur banyak output per page juga dari pilihan dibawah.</p>
        
                                        </div>
                                        <div class="col s12">
                                        <table id="page-length-option" class="display">
                                            <thead>
                                                <tr>
                                                    <th>news ID</th>
                                                    <th>news head</th>
                                                    <th>news content</th>
                                                    <th>news data</th>
                                                    <th>destinasi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                    $query = mysqli_query($connection, "select n.news_destinasiid, n.newshead, n.newscontent, date_format(n.newsdate,'%d-%b-%Y') as newsdate, d.destinasinama
                                                    from news_destinasi n, destinasi d
                                                    where n.destinasiid = d.destinasiid;");
                                                    while($row = mysqli_fetch_array($query)){
                                                ?>
                                                <tr>
                                                    <td><?php
                                                        echo $row['news_destinasiid'];
                                                    ?></td>
                                                    <td><?php
                                                        echo $row['newshead'];
                                                    ?></td>
                                                    <td><?php
                                                        $content = strlen($row['newscontent']) > 50 ? substr($row['newscontent'],0,50)." ..." : $row['newscontent'];
                                                        echo $content;
                                                    ?></td>
                                                    <td><?php
                                                        echo $row['newsdate'];
                                                    ?></td>
                                                    <td><?php
                                                        echo $row['destinasinama'];
                                                    ?></td>
                                                    <?php
                                                        }
                                                    ?>
                                                </tr>
                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <th>news ID</th>
                                                    <th>news head</th>
                                                    <th>news content</th>
                                                    <th>news data</th>
                                                    <th>destinasi</th>
                                                </tr>
                                            </tfoot>
                                        </table>
                                        </div>
                                    </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="content-overlay"></div>
            </div>
        </div>

    </div>
    <!-- END: Page Main-->


<?php
    include "footer.php";
?>

    
    <!-- BEGIN VENDOR JS-->
    <script src="app-assets/js/vendors.min.js"></script>
    <!-- BEGIN VENDOR JS-->

    <!-- BEGIN PAGE VENDOR JS-->
    <script src="app-assets/vendors/data-tables/js/jquery.dataTables.min.js"></script>
    <script src="app-assets/vendors/data-tables/extensions/responsive/js/dataTables.responsive.min.js"></script>
    <script src="app-assets/vendors/data-tables/js/dataTables.select.min.js"></script>
    <script src="app-assets/vendors/select2/select2.full.min.js"></script>
    <!-- END PAGE VENDOR JS-->

    <!-- BEGIN THEME  JS-->
    <script src="app-assets/js/plugins.min.js"></script>
    <script src="app-assets/js/search.min.js"></script>
    <script src="app-assets/js/custom/custom-script.min.js"></script>
    <script src="app-assets/js/scripts/customizer.min.js"></script>
    <!-- END THEME  JS-->

    <!-- BEGIN PAGE LEVEL JS-->
    <script src="app-assets/js/scripts/data-tables.min.js"></script>
    <script src="app-assets/js/scripts/form-select2.min.js"></script>
    <script src="app-assets/js/scripts/advance-ui-modals.min.js"></script>
    <!-- END PAGE LEVEL JS-->
    
    <script>
        $(document).ready(function(){
            $('#destinasi').select2({
                placeholder: "destinasi news",
                allowClear: true
            });
        });
    </script>
    <?php
        ob_end_flush();
    ?> 
</body>
</html>