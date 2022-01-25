<?php
    include "includes/config.php";
    if (isset($_GET['delete'])){
        $deleteID = $_GET['delete'];
        mysqli_query($connection, "delete from provinsi
        where provinsiid = '$deleteID';");

        echo "<script>
            alert('Data Berhasil Dihapus!!');
            document.location='provinsi.php'
        </script>";
    }
?>