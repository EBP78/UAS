<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<?php
    ob_start();
    session_start();
    if(!isset($_SESSION['email'])){
        header("location:login.php");
    }
    include "includes/config.php";
    // variable yang di get dari image_destinasi.php saat di klik
    $editID = $_GET['edit'];
    // get data untuk langsung ditampilkan di form
    $get = "select imageid, imagename, destinasiid, file
    from image
    where imageid = '$editID';";
    $get_run = mysqli_query($connection, $get);
    $get_data = mysqli_fetch_array($get_run);

    if(isset($_POST['submit'])){
        if(empty($_POST['nama'])){
            echo '<script type="text/javascript">
                window.location.assign("image_destinasi.php");
            </script>';
        } elseif ($_POST['kode'] == ""){
            header("location:image_destinasi.php");
        } else {
            $imgaeID = $_POST['kode'];
            $ImageName = $_POST['nama'];
            $destinasiID = $_POST['destinasi'];
            
            $file_name = $_FILES['photo']['name']; // nama file seperti gambar.jpg
            $file_tmp = $_FILES['photo']['tmp_name']; //lokasi dimana temp_file disimpan 
            $file_extension = pathinfo($file_name, PATHINFO_EXTENSION); // ekstensi dari file

            // periksa extension file
            if ($file_extension == "jpg" or $file_extension == "png"){
                move_uploaded_file($file_tmp, '../images/destinasi/'.$file_name);
                $query = "update image set
                imageName = \"$ImageName\",
                destinasiID = \"$destinasiID\",
                File = \"$file_name\"
                where imageID = \"$editID\";";
                mysqli_query($connection, $query);

                $filess = $get_data['File'];
                $check = "select count(imageID) as cek from image where File = \"$filess\";";
                $check_query = mysqli_query($connection,$check);
                $checkk = mysqli_fetch_assoc($check_query);
                if($checkk['cek'] == 0){
                    if(file_exists("../images/destinasi/" . $filess)){
                        unlink("../images/destinasi/" . $filess);
                    }
                }
                echo "<script>
                    alert('Data Berhasil Diedit!!');
                    document.location='image_destinasi.php'
                </script>";
            }
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
    <title>EBP - BackEnd - Edit Table Image Destinasi</title>
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
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/dropify/css/dropify.min.css">
    <!-- END: VENDOR CSS-->

    <!-- BEGIN: Page Level CSS-->
    <link rel="stylesheet" type="text/css" href="app-assets/css/themes/vertical-dark-menu-template/materialize.min.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/themes/vertical-dark-menu-template/style.min.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/pages/data-tables.min.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/pages/form-select2.min.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/pages/advance-ui-media.min.css">
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
                                Input ke Tabel Image Database A_wisata
                            </h4>
                            <p>dapat langsung melakukan input ke tabel a_wisata.image dengan menggunakan form dibawah ini</p>
                        </div>
                    </div>

                    <div id="validation" class="card card card-default scrollspy">
                        <div class="card-content">
                            <h4 class="card-title">Form Tabel Image</h4>
                            <form method="POST" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="input-field col s12">
                                        <i class="material-icons prefix">fingerprint</i>
                                        <input id="kode" type="text" name="kode" class="validate" value="<?php
                                            echo $editID;
                                        ?>">
                                        <label for="kode">Image ID</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s12">
                                        <i class="material-icons prefix">person_pin</i>
                                        <input id="nama" type="text" name="nama" class="validate" value="<?php
                                            echo $get_data['imagename'];
                                        ?>">
                                        <label for="nama">Nama Image</label>
                                    </div>
                                </div>
                                <?php
                                    $des = mysqli_query($connection, "select destinasiid, destinasinama from destinasi;");
                                ?>
                                <div class="row">
                                    <div class="input-field col s12">
                                        <i class="material-icons prefix">featured_play_list</i>
                                        <select class="select2 browser-default validate" name="destinasi" id="destinasi">
                                            <?php
                                                $area = mysqli_query($connection, "select destinasiid, destinasinama
                                                from destinasi;");
                                                while($row = mysqli_fetch_array($area)){
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
                                    <div class="col s12 m2 l1">
                                        <p>Photo Destinasi</p>
                                    </div>
                                    <div class="col s12 m10 l11">
                                        <input type="file" id="input-file-now-custom-2" class="dropify" data-height="200" name="photo" 
                                        data-default-file="../images/destinasi/<?php
                                            echo $get_data['file'];
                                        ?>">
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
                                Output Tabel Image Destinasi dari Database A_wisata
                            </h4>
                            <p>output dari tabel a_wisata.Image dalam bentuk tabel dan juga bisa langsung melakukan edit dan hapus data dari tabel dibawah ini.</p>
                        </div>
                    </div>
                    
                    <!-- output -->
                    <div class="section section-data-tables">
                        <div class="row">
                            <div class="col s12">
                                <div class="card">
                                    <div class="card-content">
                                    <h4 class="card-title">Tabel Image Destinasi</h4>
                                    <div class="row">
                                        <div class="col s12">
                                        <p>dapat melakukan search dari tempat search dibawah dan mengatur banyak output per page juga dari pilihan dibawah.</p>
        
                                        </div>
                                        <div class="col s12">
                                        <table id="page-length-option" class="display">
                                            <thead>
                                                <tr>
                                                    <th>Image ID</th>
                                                    <th>Image Nama</th>
                                                    <th>Nama Destinasi</th>
                                                    <th>Image</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                    $query = mysqli_query($connection, "select i.imageid, i.imagename, i.file, d.destinasinama
                                                    from image i, destinasi d
                                                    where i.destinasiid = d.destinasiid;");
                                                    while($row = mysqli_fetch_array($query)){
                                                ?>
                                                <tr>
                                                    <td><?php
                                                        echo $row['imageid'];
                                                    ?></td>
                                                    <td><?php
                                                        echo $row['imagename'];
                                                    ?></td>
                                                    <td><?php
                                                        echo $row['destinasinama'];
                                                    ?></td>
                                                    <td>
                                                        <img src="../images/destinasi/<?php
                                                            if(file_exists("../images/destinasi/".$row['file'])){
                                                                echo $row['file'];
                                                            } else {
                                                                echo "no-image.png";
                                                            }
                                                        ?>" width="150" class="materialboxed">
                                                    </td>
                                                    <?php
                                                        }
                                                    ?>
                                                </tr>
                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <th>Image ID</th>
                                                    <th>Image Nama</th>
                                                    <th>Nama Destinasi</th>
                                                    <th>Image</th>
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
    <script src="app-assets/vendors/dropify/js/dropify.min.js"></script>
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
    <script src="app-assets/js/scripts/form-file-uploads.min.js"></script>
    <script src="app-assets/js/scripts/advance-ui-media.min.js"></script>
    <!-- END PAGE LEVEL JS-->
    
    <script>
        $(document).ready(function(){
            $('#destinasi').select2({
                placeholder: "destinasi Wisata",
                allowClear: true
            });
        });
    </script>
    <?php
        ob_end_flush();
    ?> 
</body>
</html>