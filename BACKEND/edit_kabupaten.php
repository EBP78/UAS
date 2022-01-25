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
    $get = "select kabupatennama, kabupatenluas, provinsiid
    from kabupaten
    where kabupatenid = '$editID';";
    $get_run = mysqli_query($connection, $get);
    $get_data = mysqli_fetch_array($get_run);

    if(isset($_POST['submit'])){
        if(empty($_POST['provinsi'])){
            echo '<script type="text/javascript">
                window.location.assign("kabupaten.php");
            </script>';
        } elseif ($_POST['luas'] == ""){
            header("location:kabupaten.php");
        } else {
            $nama = $_POST['nama'];
            $luas = $_POST['luas'];
            $provinsi = $_POST['provinsi'];
            
            mysqli_query($connection, "update kabupaten set
            kabupatennama = '$nama',
            kabupatenluas = $luas,
            provinsiid = '$provinsi'
            where kabupatenid = '$editID';");
            header("location:kabupaten.php");
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
    <title>EBP - BackEnd - Edit Table Kabupaten</title>
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
                                Edit Tabel Kabupaten Database A_wisata
                            </h4>
                            <p>dapat langsung melakukan input ke tabel a_wisata.destinasi dengan menggunakan form dibawah ini</p>
                        </div>
                    </div>

                    <div id="validation" class="card card card-default scrollspy">
                        <div class="card-content">
                            <h4 class="card-title">Form with validation</h4>
                            <form method="POST">
                                <div class="row">
                                    <div class="input-field col s12">
                                        <i class="material-icons prefix">fingerprint</i>
                                        <input id="kode" type="text" name="kode" class="validate" value="<?php
                                            echo $editID;
                                        ?>" disabled>
                                        <label for="kode">Kabupaten ID</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s12">
                                        <i class="material-icons prefix">person_pin</i>
                                        <input id="nama" type="text" name="nama" class="validate" value="<?php
                                            echo $get_data['kabupatennama'];
                                        ?>">
                                        <label for="nama">Nama Kabupaten</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s12">
                                        <i class="material-icons prefix">location_on</i>
                                        <textarea id="luas" name="luas" class="materialize-textarea validate"><?php
                                            echo $get_data['kabupatenluas'];
                                        ?></textarea>
                                        <label for="luas">Luas Kabupaten (km2)</label>
                                    </div>
                                </div>
                                <?php
                                    $prov = mysqli_query($connection, "select provinsiid, provinsinama
                                    from provinsi;");
                                ?>
                                <div class="row">
                                    <div class="input-field col s12">
                                        <i class="material-icons prefix">featured_play_list</i>
                                        <select class="select2 browser-default validate" name="provinsi" id="provinsi">
                                            <?php
                                                $provinsi = mysqli_query($connection, "select provinsiid, provinsinama
                                                from provinsi;");
                                                while($row = mysqli_fetch_array($provinsi)){
                                                if($row['provinsiid'] == $get_data['provinsiid']){
                                            ?>  
                                                <option value="<?php
                                                    echo $row['provinsiid'];
                                                ?>" selected><?php
                                                    echo $row['provinsiid'] . " " . $row['provinsinama'];
                                                ?></option>
                                            <?php
                                                } else {
                                            ?>
                                                <option value="<?php
                                                    echo $row['provinsiid'];
                                                ?>"><?php
                                                    echo $row['provinsiid'] . " " . $row['provinsinama'];
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
                                Output Tabel Kabupaten dari Database A_wisata
                            </h4>
                            <p>output dari tabel a_wisata.kabupaten dalam bentuk tabel dan juga bisa langsung melakukan edit dan hapus data dari tabel dibawah ini.</p>
                        </div>
                    </div>

                    <div class="section section-data-tables">
                        <div class="row">
                            <div class="col s12">
                                <div class="card">
                                    <div class="card-content">
                                    <h4 class="card-title">Tabel Destinasi</h4>
                                    <div class="row">
                                        <div class="col s12">
                                        <p>dapat melakukan search dari tempat search dibawah dan mengatur banyak output per page juga dari pilihan dibawah.</p>
        
                                        </div>
                                        <div class="col s12">
                                        <table id="page-length-option" class="display">
                                            <thead>
                                                <tr>
                                                    <th>Kabupaten ID</th>
                                                    <th>Kabupaten Nama</th>
                                                    <th>Kabupaten Luas (KM2)</th>
                                                    <th>Provinsi Nama</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                    $query = mysqli_query($connection, "select k.kabupatenid, k.kabupatennama, k.kabupatenluas, p.provinsinama
                                                    from kabupaten k, provinsi p
                                                    where k.provinsiid = p.provinsiid;");
                                                    while($row = mysqli_fetch_array($query)){
                                                ?>
                                                <tr>
                                                    <td><?php
                                                        echo $row['kabupatenid'];
                                                    ?></td>
                                                    <td><?php
                                                        echo $row['kabupatennama'];
                                                    ?></td>
                                                    <td><?php
                                                        echo $row['kabupatenluas'];
                                                    ?></td>
                                                    <td><?php
                                                        echo $row['provinsinama'];
                                                    ?></td>
                                                    <?php
                                                        }
                                                    ?>
                                                </tr>
                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <th>Kabupaten ID</th>
                                                    <th>Kabupaten Nama</th>
                                                    <th>Kabupaten Luas</th>
                                                    <th>Provinsi Nama</th>
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
            $('#provinsi').select2({
                placeholder: "provinsi kabupaten",
                allowClear: true
            });
        });
    </script>
    <?php
        ob_end_flush();
    ?> 
</body>
</html>