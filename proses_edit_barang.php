<?php

    include "config.php";

    $kd_barang = $_GET['kd_barang'];
    $nama_barang = $_POST['nama_barang'];
    $harga = $_POST['harga'];
    $stok = $_POST['stok'];
    $kd_brand = $_POST['kd_brand'];
    $id_supplier = $_POST['id_supplier'];

    $gambar = $_FILES['gambar']['name'];
    $tmp_name = $_FILES['gambar']['tmp_name'];

    move_uploaded_file($tmp_name, 'img/product/' . $gambar);

    
    $result = mysqli_query($con, "UPDATE barang SET nama_barang = '$nama_barang',
                            harga = '$harga', stok = '$stok', gambar = '$gambar',
                            kd_brand = '$kd_brand', id_supplier = '$id_supplier' WHERE kd_barang = '$kd_barang'");

    if ($result) {
        echo '<script>alert("Edit data berhasil")</script>';
        echo '<script>window.location="barang.php"</script>';
    }else {
        echo 'gagal'.mysqli_error($con);
    }
?>