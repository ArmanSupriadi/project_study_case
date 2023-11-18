<?php

    include "config.php";

    $kd_barang = $_POST['kd_barang'];
    $nama_barang = $_POST['nama_barang'];
    $harga = $_POST['harga'];
    $stok = $_POST['stok'];
    $kd_brand = $_POST['kd_brand'];
    $id_supplier = $_POST['id_supplier'];

    $filename = $_FILES['gambar']['name'];
    $tmp_name = $_FILES['gambar']['tmp_name'];

        move_uploaded_file($tmp_name, 'img/product/'.$filename);

        $result = mysqli_query($con, "INSERT INTO `barang` (`kd_barang`,`nama_barang`,`harga`,`stok`,`gambar`,`kd_brand`,`id_supplier`) 
        VALUES ('$kd_barang','$nama_barang','$harga','$stok','$filename','$kd_brand','$id_supplier');");

        if ($result) {
            echo '<script>alert("Tambah data berhasil")</script>';
            echo '<script>window.location="barang.php"</script>';
        }else {
            echo 'gagal'.mysqli_error($con);
        }

?>