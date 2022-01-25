<?php
    session_start();
    $_SESSION['email'];
    unset($_SESSION['email']);
    $_SESSION['pass'];
    unset($_SESSION['pass']);
    
    session_unset();
    session_destroy();
    header("location:login.php")
?>