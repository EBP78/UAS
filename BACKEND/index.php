<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<?php
    ob_start();
    session_start();
    if(!isset($_SESSION['pass'])){
        header("location:login.php");
    }
    include "includes/config.php";
    if(isset($_POST['submit'])){
        if(empty($_POST['kat'])){
            echo '<script type="text/javascript">
                window.location.assign("destinasi.php");
            </script>';
        } elseif ($_POST['area'] == ""){
            header("location:pertemuan-5.php");
        } else {
            $DestinasiKode = $_POST['kode'];
            $DestinasiNama = $_POST['nama'];
            $DestinasiAlm = $_POST['alamat'];
            $DestinasiKat = $_POST['kat'];
            $DestinasiArea = $_POST['area'];
            
            mysqli_query($connection, "insert into destinasi values ('$DestinasiKode ', '$DestinasiNama', '$DestinasiAlm', '$DestinasiKat', '$DestinasiArea');");

            header("location:destinasi.php");
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
    <title>EBP - BackEnd - Index</title>

    <link rel="apple-touch-icon" href="app-assets/images/favicon/apple-touch-icon-152x152.png">
    <link rel="shortcut icon" type="image/x-icon" href="app-assets/images/favicon/favicon-32x32.png">

    <link href="app-assets/css/icon.css?family=Material+Icons" rel="stylesheet">
    <!-- BEGIN: VENDOR CSS-->
    <!-- <link rel="stylesheet" type="text/css" href="app-assets/vendors/vendors.min.css"> -->
    <!-- END: VENDOR CSS-->
    <!-- BEGIN: Page Level CSS-->
    <link rel="stylesheet" type="text/css" href="app-assets/css/themes/vertical-dark-menu-template/materialize.min.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/themes/vertical-dark-menu-template/style.min.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/pages/advance-ui-media.min.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/pages/dashboard.min.css">
    <!-- END: Page Level CSS-->
    <!-- BEGIN: Custom CSS-->
    <!-- <link rel="stylesheet" type="text/css" href="app-assets/css/custom/custom.css"> -->
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
                            <h1 class="card-title">
                                Selamat Datang pada Dashboard Project UAS Edward Brainard Pranata (825200025)
                            </h1>
                            <p>ini coba coba isinya</p>
                            <img src="app-assets/images/avatar/saya.jfif" width="300" class="materialboxed">
                        </div>
                    </div>
                </div>
                <div class="content-overlay">

                </div>
            </div>
        </div>
        <div id="chart-dashboard">
            <div class="row">
                <div class="col s12 m12 l12">
                    <div class="card animate fadeUp">
                    <div class="card-content">
                        <h1 class="card-title">
                            Banyak Data Yang Ada Di Dalam Database
                        </h1>
                        <a class="btn-floating btn-move-up waves-effect waves-light red accent-2 z-depth-4 right">
                            <i class="material-icons activator">filter_list</i>
                        </a>                        
                        <div class="col s12 m10 l12">
                            <div class="trending-bar-chart-wrapper"><canvas id="trending-bar-chart-mine" height="90"></canvas></div>
                        </div>
                    </div>
                    <div class="card-reveal">
                        <span class="card-title grey-text text-darken-4">Revenue by Month <i class="material-icons right">close</i>
                        </span>
                        <table class="responsive-table">
                            <thead>
                                <tr>
                                    <th data-field="id">ID</th>
                                    <th data-field="table-name">Table Name</th>
                                    <th data-field="count">banyak data</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    $number = 1;
                                    $query = mysqli_query($connection, "SELECT table_name
                                        FROM INFORMATION_SCHEMA.TABLES 
                                        WHERE table_schema = 'a_wisata';");
                                    while($row = mysqli_fetch_array($query)){
                                        $data_raw = $row['table_name'];
                                        // $data_get = mysqli_query($connection, $data_raw);
                                        $data_get = mysqli_query($connection, "select \"$data_raw\" as table_name, Count(*) as exact_row_count From $data_raw;");
                                        $data = mysqli_fetch_assoc($data_get);
                                ?>
                                <tr>
                                    <td><?php
                                        echo $number;
                                    ?></td>
                                    <td><?php
                                        echo $data['table_name'];
                                    ?></td>
                                    <td><?php
                                        echo $data['exact_row_count'];
                                    ?></td>
                                    <?php
                                        $number = $number + 1;
                                        }
                                    ?>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    </div>
                </div>
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
    <script src="app-assets/vendors/chartjs/chart.min.js"></script>
    <script src="app-assets/vendors/sparkline/jquery.sparkline.min.js"></script>
    <!-- END PAGE VENDOR JS-->

    <!-- BEGIN THEME  JS-->
    <script src="app-assets/js/plugins.min.js"></script>
    <script src="app-assets/js/search.min.js"></script>
    <script src="app-assets/js/custom/custom-script.min.js"></script>
    <script src="app-assets/js/scripts/customizer.min.js"></script>
    <!-- END THEME  JS-->

    <!-- BEGIN PAGE LEVEL JS-->
    <script src="app-assets/js/scripts/dashboard-ecommerce.min.js"></script>
    <script src="app-assets/js/scripts/advance-ui-modals.min.js"></script>
    <script src="app-assets/js/scripts/advance-ui-media.min.js"></script>
    <script src="app-assets/js/scripts/dashboard-analytics.min.js"></script>
    <!-- END PAGE LEVEL JS-->
    <script>
        <?php
            $number = 1;
            $query = mysqli_query($connection, "SELECT table_name
                FROM INFORMATION_SCHEMA.TABLES 
                WHERE table_schema = 'dbwisata';");
            $xvalues = "";
            $yvalues = "";
            while($row = mysqli_fetch_array($query)){
                $data_raw = $row['table_name'];
                // $data_get = mysqli_query($connection, $data_raw);
                $data_get = mysqli_query($connection, "select \"$data_raw\" as table_name, Count(*) as exact_row_count From $data_raw;");
                $data = mysqli_fetch_assoc($data_get);
                $nama = $data['table_name'];
                $banyak = $data['exact_row_count'];
                $xvalues = $xvalues . ",\"$nama\"";
                $yvalues  =$yvalues . ",\"$banyak\"";
            }
            $xvalues = substr($xvalues, 1);
            $yvalues = substr($yvalues, 1);
        ?>
        var xValues = [<?php
            echo $xvalues;
        ?>,""];
        var yValues = [<?php
            echo $yvalues;
        ?>,0];
        var barColors = ["#ffdd59", "#ff3f34","#3c40c6","#0be881","#8854d0", "#1e3799","#7bed9f","#eccc68","#574b90","#3dc1d3", "#3c40c6","#ff3f34","#3c40c6","#8854d0","#eccc68"];

        new Chart("trending-bar-chart-mine", {
        type: "bar",
        data: {
            labels: xValues,
            datasets: [{
            backgroundColor: barColors,
            data: yValues
            }]
        },
        options: {
            legend: {display: false},
        }
        });
    </script>
    <?php
        ob_end_flush();
    ?>        
</body>
</html>