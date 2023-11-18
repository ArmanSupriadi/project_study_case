<?php

    $id_supplier = $_POST['id_supplier'];
    $nm_supplier = $_POST['nm_supplier'];
    $telp = $_POST['telp'];
    $alamat = $_POST['alamat'];

    include "config.php";
    
    $result = mysqli_query($con, "INSERT INTO `supplier` (`id_supplier`,`nm_supplier`,`telp`,`alamat`) 
                            VALUES ('$id_supplier','$nm_supplier','$telp','$alamat');");

    header("location:supplier.php");

?>