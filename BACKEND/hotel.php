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
        if(empty($_POST['kode'])){
            echo '<script type="text/javascript">
                window.location.assign("hotel.php");
            </script>';
        } elseif ($_POST['kecamatan'] == ""){
            header("location:hotel.php");
        } else {
            $kode = $_POST['kode'];
            $nama = $_POST['nama'];
            $alamat = $_POST['alamat'];
            $biaya = $_POST['biaya'];
            $wifi = $_POST['wifi'];
            $ac = $_POST['ac'];
            $restoran = $_POST['restoran'];
            $kolam = $_POST['kolam'];
            $lift = $_POST['lift'];
            $parkir = $_POST['parkir'];
            $link = $_POST['link'];
            $kecamatan = $_POST['kecamatan'];
            
            mysqli_query($connection, "insert into hotel values ('$kode ', '$nama', '$alamat', '$biaya', '$wifi', '$ac', '$restoran', '$kolam', '$lift', '$parkir', '$link', '$kecamatan');");

            header("location:hotel.php");
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
    <title>EBP - BackEnd - Table hotel</title>
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
                                Input ke Tabel Hotel Database A_wisata
                            </h4>
                            <p>dapat langsung melakukan input ke tabel a_wisata.hotel dengan menggunakan form dibawah ini</p>
                        </div>
                    </div>

                    <div id="validation" class="card card card-default scrollspy">
                        <div class="card-content">
                            <h4 class="card-title">Form input Hotel</h4>
                            <form method="POST">
                                <div class="row">
                                    <div class="input-field col s12">
                                        <i class="material-icons prefix">fingerprint</i>
                                        <input id="kode" type="text" name="kode" class="validate">
                                        <label for="kode">Hotel ID</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s12">
                                        <i class="material-icons prefix">person_pin</i>
                                        <input id="nama" type="text" name="nama" class="validate">
                                        <label for="nama">Nama Hotel</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s12">
                                        <i class="material-icons prefix">location_on</i>
                                        <textarea id="alamat" name="alamat" class="materialize-textarea validate"></textarea>
                                        <label for="alamat">Alamat hotel</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s12">
                                        <i class="material-icons prefix">attach_money</i>
                                        <input id="biaya" type="text" name="biaya" class="validate">
                                        <label for="biaya">Biaya Hotel</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s12">
                                        <select class="select2 browser-default validate" name="wifi" id="wifi">
                                            <option value=""></option>
                                            <option value="Y">yes</option>
                                            <option value="N">No</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s12">
                                        <select class="select2 browser-default validate" name="ac" id="ac">
                                            <option value=""></option>
                                            <option value="Y">yes</option>
                                            <option value="N">No</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s12">
                                        <select class="select2 browser-default validate" name="restoran" id="restoran">
                                            <option value=""></option>
                                            <option value="Y">yes</option>
                                            <option value="N">No</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s12">
                                        <select class="select2 browser-default validate" name="kolam" id="kolam">
                                            <option value=""></option>
                                            <option value="Y">yes</option>
                                            <option value="N">No</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s12">
                                        <select class="select2 browser-default validate" name="lift" id="lift">
                                            <option value=""></option>
                                            <option value="Y">yes</option>
                                            <option value="N">No</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s12">
                                        <select class="select2 browser-default validate" name="parkir" id="parkir">
                                            <option value=""></option>
                                            <option value="Y">yes</option>
                                            <option value="N">No</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s12">
                                        <i class="material-icons prefix">link</i>
                                        <input id="link" type="text" name="link" class="validate">
                                        <label for="link">Link</label>
                                    </div>
                                </div>
                                <?php
                                    $kec = mysqli_query($connection, "select kecamatanid, kecamatannama from kecamatan;");
                                ?>
                                <div class="row">
                                    <div class="input-field col s12">
                                        <i class="material-icons prefix">featured_play_list</i>
                                        <select class="select2 browser-default validate" name="kecamatan" id="kecamatan">
                                            <option value=""></option>
                                            <?php
                                                while($get_kec = mysqli_fetch_array($kec)){
                                            ?>
                                            <option value="<?php
                                                echo $get_kec['kecamatanid'];
                                            ?>"><?php
                                            echo $get_kec['kecamatanid'] . " " . $get_kec['kecamatannama'];
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
                                Output Tabel Hotel dari Database A_wisata
                            </h4>
                            <p>output dari tabel a_wisata.hotel dalam bentuk tabel dan juga bisa langsung melakukan edit dan hapus data dari tabel dibawah ini.</p>
                        </div>
                    </div>

                    <div class="section section-data-tables">
                        <div class="row">
                            <div class="col s12">
                                <div class="card">
                                    <div class="card-content">
                                    <h4 class="card-title">Tabel hotel</h4>
                                    <div class="row">
                                        <div class="col s12">
                                        <p>dapat melakukan search dari tempat search dibawah dan mengatur banyak output per page juga dari pilihan dibawah.</p>
        
                                        </div>
                                        <div class="col s11">
                                            <table id="page-length-option" class="display">
                                                <thead>
                                                    <tr>
                                                        <th>Hotel ID</th>
                                                        <th>Hotel Nama</th>
                                                        <th>Hotel Alamat</th>
                                                        <th>Biaya Hotel</th>
                                                        <th>WI-FI</th>
                                                        <th>AC</th>
                                                        <th>Restoran</th>
                                                        <th>KolamRenang</th>
                                                        <th>Lift</th>
                                                        <th>Parkir</th>
                                                        <th>Link</th>
                                                        <th>Kecamatan</th>
                                                        <th>Action</th>
                                                        <th> </th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                        $query = mysqli_query($connection, "select h.hotelid, h.hotelname, h.hotelalamat, h.hotelharga, h.wifi, h.ac, h.restoran, h.kolamrenang, h.lift, h.parkir, h.link, k.kecamatannama 
                                                        from hotel h, kecamatan k
                                                        where h.kecamatanid = k.kecamatanid;");
                                                        while($row = mysqli_fetch_array($query)){
                                                    ?>
                                                    <tr>
                                                        <td><?php
                                                            echo $row['hotelid'];
                                                        ?></td>
                                                        <td><?php
                                                            echo $row['hotelname'];
                                                        ?></td>
                                                        <td><?php
                                                            echo $row['hotelalamat'];
                                                        ?></td>
                                                        <td><?php
                                                            echo $row['hotelharga'];
                                                        ?></td>
                                                        <td><?php
                                                            echo $row['wifi'] == "Y" ? "Yes" : "No";
                                                        ?></td>
                                                        <td><?php
                                                            echo $row['ac'] == "Y" ? "Yes" : "No";
                                                        ?></td>
                                                        <td><?php
                                                            echo $row['restoran'] == "Y" ? "Yes" : "No";
                                                        ?></td>
                                                        <td><?php
                                                            echo $row['kolamrenang'] == "Y" ? "Yes" : "No";
                                                        ?></td>
                                                        <td><?php
                                                            echo $row['lift'] == "Y" ? "Yes" : "No";
                                                        ?></td>
                                                        <td><?php
                                                            echo $row['parkir'] == "Y" ? "Yes" : "No";
                                                        ?></td>
                                                        <td><?php
                                                            echo $row['link'];
                                                        ?></td>
                                                        <td><?php
                                                            echo $row['kecamatannama'];
                                                        ?></td>
                                                        <td>
                                                            <a href="edit_hotel.php?edit=<?php
                                                            echo $row['hotelid'];
                                                        ?>" class="waves-effect waves-light btn-small teal accent-3" title="Edit">
                                                                <i class="material-icons">edit</i>
                                                            </a>
                                                        </td>
                                                        <td>
                                                            <a href="#modal<?php
                                                                echo $row['hotelid'];
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
                                                        <th>Hotel ID</th>
                                                        <th>Hotel Nama</th>
                                                        <th>Hotel Alamat</th>
                                                        <th>Biaya Hotel</th>
                                                        <th>WI-FI</th>
                                                        <th>AC</th>
                                                        <th>Restoran</th>
                                                        <th>KolamRenang</th>
                                                        <th>Lift</th>
                                                        <th>Parkir</th>
                                                        <th>Link</th>
                                                        <th>Kecamatan</th>
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
                        $query = mysqli_query($connection, "select h.hotelid, h.hotelname, h.hotelalamat, h.hotelharga, h.wifi, h.ac, h.restoran, h.kolamrenang, h.lift, h.parkir, h.link, k.kecamatannama 
                        from hotel h, kecamatan k
                        where h.kecamatanid = k.kecamatanid;");
                        while($row = mysqli_fetch_array($query)){
                    ?>
                        <!-- Modal Structure -->
                        <div id="modal<?php
                            echo $row['hotelid'];
                            ?>" class="modal modal-fixed-footer">
                            <div class="modal-content">
                                <p class="modal-header right modal-close">
                                    Close
                                    <span class="right">
                                        <i class="material-icons right-align">clear</i>
                                    </span>
                                </p>
                                <h2>Delete Confirmation</h2>
                                <h6>Apakah anda yakin ingin menghapus data Hotel </h6>
                                <table>
                                    <thead>
                                        <tr>
                                            <th>Hotel ID</th>
                                            <th>Hotel Nama</th>
                                            <th>Hotel Alamat</th>
                                            <th>Biaya Hotel</th>
                                            <th>WI-FI</th>
                                            <th>AC</th>
                                            <th>Restoran</th>
                                            <th>KolamRenang</th>
                                            <th>Lift</th>
                                            <th>Parkir</th>
                                            <th>Link</th>
                                            <th>Kecamatan</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><?php
                                                echo $row['hotelid'];
                                            ?></td>
                                            <td><?php
                                                echo $row['hotelname'];
                                            ?></td>
                                            <td><?php
                                                echo $row['hotelalamat'];
                                            ?></td>
                                            <td><?php
                                                echo $row['hotelharga'];
                                            ?></td>
                                            <td><?php
                                                echo $row['wifi'] == "Y" ? "Yes" : "No";
                                            ?></td>
                                            <td><?php
                                                echo $row['ac'] == "Y" ? "Yes" : "No";
                                            ?></td>
                                            <td><?php
                                                echo $row['restoran'] == "Y" ? "Yes" : "No";
                                            ?></td>
                                            <td><?php
                                                echo $row['kolamrenang'] == "Y" ? "Yes" : "No";
                                            ?></td>
                                            <td><?php
                                                echo $row['lift'] == "Y" ? "Yes" : "No";
                                            ?></td>
                                            <td><?php
                                                echo $row['parkir'] == "Y" ? "Yes" : "No";
                                            ?></td>
                                            <td><?php
                                                echo $row['link'];
                                            ?></td>
                                            <td><?php
                                                echo $row['kecamatannama'];
                                            ?></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="modal-footer">
                                <a href="#" class="modal-close waves-effect waves-green btn-flat">Tidak</a>
                                <a href="delete.php?delete=<?php
                                    echo $row['hotelid'];
                                ?>&table=hotel" class="modal-close waves-effect waves-green btn-flat">Ya</a>
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
            $('#kecamatan').select2({
                placeholder: "kecamatan hotel",
                allowClear: true
            });
        });
        $(document).ready(function(){
            $('#wifi').select2({
                placeholder: "Ada WI-FI ?",
                allowClear: true
            });
        });
        $(document).ready(function(){
            $('#ac').select2({
                placeholder: "Ada AC ?",
                allowClear: true
            });
        });
        $(document).ready(function(){
            $('#restoran').select2({
                placeholder: "Ada Restoran ?",
                allowClear: true
            });
        });
        $(document).ready(function(){
            $('#kolam').select2({
                placeholder: "Ada Kolam Renang ?",
                allowClear: true
            });
        });
        $(document).ready(function(){
            $('#lift').select2({
                placeholder: "Ada Lift ?",
                allowClear: true
            });
        });
        $(document).ready(function(){
            $('#parkir').select2({
                placeholder: "Ada Parkir ?",
                allowClear: true
            });
        });
    </script>
    <?php
        ob_end_flush();
    ?> 
</body>
</html>