<?php

    $kd_brand = $_GET['kd_brand'];
    $nama_brand = $_POST['nama_brand'];


    include "config.php";
    
    $result = mysqli_query($con, "UPDATE `brand` SET `nama_brand` = '$nama_brand' WHERE `kd_brand` = '$kd_brand'");

    header("location:brand.php");

?>