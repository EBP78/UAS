<?php
    // ini koneksi ke database

    //buat variabel untuk isi fucntion isi connection
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "dbwisata";

    // ini function koneksinya
    $connection = mysqli_connect($servername, $username, $password, $dbname);

    // untuk cek apakah terkoneksi kalau tidak muncul error
    if(!$connection){
        die("connection failed : " . mysqli_connect_error());
    }
?>