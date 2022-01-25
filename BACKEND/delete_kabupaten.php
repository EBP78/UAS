<?php
    include "includes/config.php";
    if (isset($_GET['delete'])){
        $deleteID = $_GET['delete'];
        mysqli_query($connection, "delete from kabupaten
        where kabupatenid = '$deleteID';");

        echo "<script>
            alert('Data Berhasil Dihapus!!');
            document.location='kabupaten.php'
        </script>";
    }
?>