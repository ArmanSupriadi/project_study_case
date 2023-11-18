<?php

    $kd_brand = $_POST['kd_brand'];
    $nama_brand = $_POST['nama_brand'];

    include "config.php";

    $result = mysqli_query($con, "INSERT INTO `brand` (`kd_brand`,`nama_brand`) 
                            VALUES ('$kd_brand','$nama_brand');");

    header("location:brand.php");

?>