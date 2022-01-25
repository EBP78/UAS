<?php
    include "includes/config.php";
    if (isset($_GET['delete'])){
        $deleteID = $_GET['delete'];
        mysqli_query($connection, "delete from image
        where imageID = '$deleteID';");

        echo "<script>
            alert('Data Berhasil Dihapus!!');
            document.location='image_destinasi.php'
        </script>";
    }
?>