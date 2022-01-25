<?php
    include "includes/config.php";
    if (isset($_GET['delete'])){
        $deleteID = $_GET['delete'];
        mysqli_query($connection, "delete from area
        where areaID = '$deleteID';");

        echo "<script>
            alert('Data Berhasil Dihapus!!');
            document.location='area.php'
        </script>";
    }
?>