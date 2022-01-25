<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<?php
    ob_start();
    session_start();
    if(!isset($_SESSION['email'])){
        header("location:login.php");
    }
    include "includes/config.php";
    if(isset($_POST['submit'])){
        if(empty($_POST['provasal'])){
            echo '<script type="text/javascript">
                window.location.assign("pesawat.php");
            </script>';
        } elseif ($_POST['provtujuan'] == ""){
            header("location:pesawat.php");
        } else {
            $kode = $_POST['kode'];
            $nama = $_POST['nama'];
            $jam = $_POST['jam'];
            $lama = $_POST['lama'];
            $biaya = $_POST['biaya'];
            $asal = $_POST['provasal'];
            $tujuan = $_POST['provtujuan'];
            
            mysqli_query($connection, "insert into pesawat values ('$kode ', '$nama', '$jam', '$lama', '$biaya', '$asal', '$tujuan');");

            header("location:pesawat.php");
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
    <title>EBP - BackEnd - Table Pesawat</title>
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
                                Input ke Tabel Pesawat Database A_wisata
                            </h4>
                            <p>dapat langsung melakukan input ke tabel a_wisata.pesawat dengan menggunakan form dibawah ini</p>
                        </div>
                    </div>

                    <div id="validation" class="card card card-default scrollspy">
                        <div class="card-content">
                            <h4 class="card-title">Form Input Pesawat</h4>
                            <form method="POST">
                                <div class="row">
                                    <div class="input-field col s12">
                                        <i class="material-icons prefix">fingerprint</i>
                                        <input id="kode" type="text" name="kode" class="validate">
                                        <label for="kode">Pesawat ID</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s12">
                                        <i class="material-icons prefix">person_pin</i>
                                        <input id="nama" type="text" name="nama" class="validate">
                                        <label for="nama">Nama Pesawat</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s12">
                                        <i class="material-icons prefix">access_time</i>
                                        <input id="jam" type="text" name="jam" class="validate">
                                        <label for="jam">Jam Penerbangan</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s12">
                                        <i class="material-icons prefix">timer</i>
                                        <input id="lama" type="text" name="lama" class="validate">
                                        <label for="lama">Lama Penerbangan</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s12">
                                        <i class="material-icons prefix">attach_money</i>
                                        <input id="biaya" type="text" name="biaya" class="validate">
                                        <label for="biaya">Biaya Penerbangan</label>
                                    </div>
                                </div>
                                <?php
                                    $prov = mysqli_query($connection, "select provinsiid, provinsinama from provinsi;");
                                ?>
                                <div class="row">
                                    <div class="input-field col s12">
                                        <i class="material-icons prefix">featured_play_list</i>
                                        <select class="select2 browser-default validate" name="provasal" id="provasal">
                                            <option value=""></option>
                                            <?php
                                                while($get_prov = mysqli_fetch_array($prov)){
                                            ?>
                                            <option value="<?php
                                                echo $get_prov['provinsiid'];
                                            ?>"><?php
                                            echo $get_prov['provinsiid'] . " " . $get_prov['provinsinama'];
                                            ?></option>
                                            <?php
                                                }
                                            ?>
                                        </select>
                                        <!-- <label for="kategori">Kategori</label> -->
                                    </div>
                                </div>
                                <?php
                                    $prov = mysqli_query($connection, "select provinsiid, provinsinama from provinsi;");
                                ?>
                                <div class="row">
                                    <div class="input-field col s12">
                                        <i class="material-icons prefix">featured_play_list</i>
                                        <select class="select2 browser-default validate" name="provtujuan" id="provtujuan">
                                            <option value=""></option>
                                            <?php
                                                while($get_prov = mysqli_fetch_array($prov)){
                                            ?>
                                            <option value="<?php
                                                echo $get_prov['provinsiid'];
                                            ?>"><?php
                                            echo $get_prov['provinsiid'] . " " . $get_prov['provinsinama'];
                                            ?></option>
                                            <?php
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
                                Output Tabel Pesawat dari Database A_wisata
                            </h4>
                            <p>output dari tabel a_wisata.pesawat dalam bentuk tabel dan juga bisa langsung melakukan edit dan hapus data dari tabel dibawah ini.</p>
                        </div>
                    </div>

                    <div class="section section-data-tables">
                        <div class="row">
                            <div class="col s12">
                                <div class="card">
                                    <div class="card-content">
                                    <h4 class="card-title">Tabel Pesawat</h4>
                                    <div class="row">
                                        <div class="col s12">
                                        <p>dapat melakukan search dari tempat search dibawah dan mengatur banyak output per page juga dari pilihan dibawah.</p>
        
                                        </div>
                                        <div class="col s12">
                                        <table id="page-length-option" class="display">
                                            <thead>
                                                <tr>
                                                    <th>Pesawat ID</th>
                                                    <th>Pesawat Nama</th>
                                                    <th>Jam Penerbangan</th>
                                                    <th>Lama Penerbangan</th>
                                                    <th>Biaya Penerbangan</th>
                                                    <th>Provinsi Asal</th>
                                                    <th>Provinsi Tujuan</th>
                                                    <th>Action</th>
                                                    <th> </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                    $query = mysqli_query($connection, "select pe.pesawatid, pe.pesawatnama, pe.jampenerbangan, pe.lamapenerbangan, pe.biaya, pr1.provinsinama as provinsiasal, pr2.provinsinama as provinsitujuan
                                                    from pesawat pe, provinsi pr1, provinsi pr2
                                                    where pe.provinsiasal = pr1.provinsiid and pe.provinsitujuan = pr2.provinsiid;");
                                                    while($row = mysqli_fetch_array($query)){
                                                ?>
                                                <tr>
                                                    <td><?php
                                                        echo $row['pesawatid'];
                                                    ?></td>
                                                    <td><?php
                                                        echo $row['pesawatnama'];
                                                    ?></td>
                                                    <td><?php
                                                        echo $row['jampenerbangan'];
                                                    ?></td>
                                                    <td><?php
                                                        echo $row['lamapenerbangan'];
                                                    ?></td>
                                                    <td><?php
                                                        echo $row['biaya'];
                                                    ?></td>
                                                    <td><?php
                                                        echo $row['provinsiasal'];
                                                    ?></td>
                                                    <td><?php
                                                        echo $row['provinsitujuan'];
                                                    ?></td>
                                                    <td>
                                                        <a href="edit_pesawat.php?edit=<?php
                                                        echo $row['pesawatid'];
                                                    ?>" class="waves-effect waves-light btn-small teal accent-3" title="Edit">
                                                            <i class="material-icons">edit</i>
                                                        </a>
                                                    </td>
                                                    <td>
                                                        <a href="#modal<?php
                                                            echo $row['pesawatid'];
                                                        ?>" class="waves-effect waves-light btn-small red darken-1 modal-trigger" title="Delete">
                                                            <i class="material-icons">delete</i>
                                                        </a>
                                                    </td>
                                                    <?php
                                                        }
                                                    ?>
                                                </tr>
                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <th>Pesawat ID</th>
                                                    <th>Pesawat Nama</th>
                                                    <th>Jam Penerbangan</th>
                                                    <th>Lama Penerbangan</th>
                                                    <th>Biaya Penerbangan</th>
                                                    <th>Provinsi Asal</th>
                                                    <th>Provinsi Tujuan</th>
                                                    <th>Action</th>
                                                    <th> </th>
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
                    <!-- loop modal delete -->
                    <?php
                        $query = mysqli_query($connection, "select pe.pesawatid, pe.pesawatnama, pe.jampenerbangan, pe.lamapenerbangan, pe.biaya, pr1.provinsinama as provinsiasal, pr2.provinsinama as provinsitujuan
                        from pesawat pe, provinsi pr1, provinsi pr2
                        where pe.provinsiasal = pr1.provinsiid and pe.provinsitujuan = pr2.provinsiid;");
                        while($row = mysqli_fetch_array($query)){
                    ?>
                        <!-- Modal Structure -->
                        <div id="modal<?php
                            echo $row['pesawatid'];
                            ?>" class="modal modal-fixed-footer">
                            <div class="modal-content">
                                <p class="modal-header right modal-close">
                                    Close
                                    <span class="right">
                                        <i class="material-icons right-align">clear</i>
                                    </span>
                                </p>
                                <h2>Delete Confirmation</h2>
                                <h6>Apakah anda yakin ingin menghapus data Pesawat </h6>
                                <table>
                                    <thead>
                                        <tr>
                                            <th>Pesawat ID</th>
                                            <th>Pesawat Nama</th>
                                            <th>Jam Penerbangan</th>
                                            <th>Lama Penerbangan</th>
                                            <th>Biaya Penerbangan</th>
                                            <th>Provinsi Asal</th>
                                            <th>Provinsi Tujuan</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><?php
                                                echo $row['pesawatid'];
                                            ?></td>
                                            <td><?php
                                                echo $row['pesawatnama'];
                                            ?></td>
                                            <td><?php
                                                echo $row['jampenerbangan'];
                                            ?></td>
                                            <td><?php
                                                echo $row['lamapenerbangan'];
                                            ?></td>
                                            <td><?php
                                                echo $row['biaya'];
                                            ?></td>
                                            <td><?php
                                                echo $row['provinsiasal'];
                                            ?></td>
                                            <td><?php
                                                echo $row['provinsitujuan'];
                                            ?></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="modal-footer">
                                <a href="#" class="modal-close waves-effect waves-green btn-flat">Tidak</a>
                                <a href="delete.php?delete=<?php
                                    echo $row['pesawatid'];
                                ?>&table=pesawat" class="modal-close waves-effect waves-green btn-flat">Ya</a>
                            </div>
                        </div>
                    <?php
                        }
                    ?>
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
            $('#provasal').select2({
                placeholder: "Provinsi Asal",
                allowClear: true
            });
        });

        $(document).ready(function(){
            $('#provtujuan').select2({
                placeholder: "Provinsi Tujuan",
                allowClear: true
            });
        });
    </script>
    <?php
        ob_end_flush();
    ?> 
</body>
</html>