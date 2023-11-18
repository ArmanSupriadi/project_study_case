<?php

    $id_supplier = $_GET['id_supplier'];
    $nm_supplier = $_POST['nm_supplier'];
    $telp = $_POST['telp'];
    $alamat = $_POST['alamat'];

    include "config.php";
    
    $result = mysqli_query($con, "UPDATE `supplier` SET `nm_supplier` = '$nm_supplier',
                            `telp` = '$telp', `alamat` = '$alamat' WHERE `id_supplier` = '$id_supplier'");

    header("location:supplier.php");

?>