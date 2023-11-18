<?php 
    
    include "config.php";

    $kd_brand = $_GET['kd_brand'];

    mysqli_query($con, "DELETE FROM `brand` WHERE kd_brand = '$kd_brand' ");

    header("location:brand.php");

?>