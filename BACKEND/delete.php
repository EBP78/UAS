<?php
    include "includes/config.php";
    $table = $_GET['table'];
    
    if (isset($_GET['delete'])){
        $deleteID = $_GET['delete'];
        $id = $table . "ID";
        mysqli_query($connection, "delete from $table
        where  $id = '$deleteID';");

        echo "<script>
            alert('Data Berhasil Dihapus!!');
            document.location='$table.php'
        </script>";
    }
?>