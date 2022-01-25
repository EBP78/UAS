<?php
    include "includes/config.php";
    if (isset($_GET['delete'])){
        $deleteID = $_GET['delete'];
        mysqli_query($connection, "delete from destinasi
        where destinasiID = '$deleteID';");

        echo "<script>
            alert('Data Berhasil Dihapus!!');
            document.location='destinasi.php'
        </script>";
    }
?>