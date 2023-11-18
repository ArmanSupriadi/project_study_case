<?php 
    
    include "config.php";

    $kd_barang = $_GET['kd_barang'];

    mysqli_query($con, "DELETE FROM `barang` WHERE kd_barang = '$kd_barang' ");

    header("location:barang.php");

?>