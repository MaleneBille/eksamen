<?php
    session_start(); 
    if(!isset($_SESSION['access'])){
        header("location:login.php");
    }
?>