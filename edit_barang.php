<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Toko Outdoor</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
</head>

    <?php
        include "config.php";

        $kd_barang = $_GET['kd_barang'];

        $barangg = mysqli_query($con, "SELECT * FROM barang JOIN brand ON barang.kd_brand = brand.kd_brand 
                                        JOIN supplier ON barang.id_supplier = supplier.id_supplier WHERE `kd_barang` = '$kd_barang'");
        foreach ($barangg as $barang) {
            $kd_barang = $barang['kd_barang'];
            $nama_barang = $barang['nama_barang'];
            $harga = $barang['harga'];
            $stok = $barang['stok'];
            $kd_brand = $barang['kd_brand'];
            $id_supplier = $barang['id_supplier'];
        }
    ?>
<body>
    <!-- Humberger Begin -->
    <div class="humberger__menu__overlay"></div>
    <div class="humberger__menu__wrapper">
        <div class="humberger__menu__logo">
            <a href="index.php"><img src="img/simple.jpg" alt=""></a>
        </div>
        <div class="humberger__menu__widget">
            <div class="header__top__right__auth">
                <a href="#"><i class="fa fa-user"></i> Login</a>
            </div>
        </div>
        <nav class="humberger__menu__nav mobile-menu">
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="#">Tambah Data</a>
                    <ul class="header__menu__dropdown">
                        <li><a href="barang.php">Barang</a></li>
                        <li><a href="brand.php">Brand</a></li>
                        <li><a href="supplier.php">Supplier</a></li>
                    </ul>
                </li>
                <li><a href="about.php">About</a></li>
            </ul>
        </nav>
        <div id="mobile-menu-wrap"></div>
        <div class="header__top__right__social">
            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-linkedin"></i></a>
            <a href="#"><i class="fa fa-instagram"></i></a>
        </div>
    </div>
    <!-- Humberger End -->

    <!-- Header Section Begin -->
    <header class="header">
        <div class="header__top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                    </div>
                    <div class="col-lg-6">
                        <div class="header__top__right">
                            <div class="header__top__right__social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                            </div>
                            <div class="header__top__right__auth">
                                <a href="#"><i class="fa fa-user"></i> Login</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="header__logo">
                        <a href="index.php"><img src="img/simple.jpg" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <nav class="header__menu">
                        <ul>
                            <li><a href="index.php">Home</a></li>
                            <li><a href="#">Tambah Data</a>
                                <ul class="header__menu__dropdown">
                                    <li><a href="barang.php">Barang</a></li>
                                    <li><a href="brand.php">Brand</a></li>
                                    <li><a href="supplier.php">Supplier</a></li>
                                </ul>
                            </li>
                            <li><a href="about.php">About</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
            <div class="humberger__open">
                <i class="fa fa-bars"></i>
            </div>
        </div>
    </header>
    <!-- Header Section End -->

    <!-- Hero Section Begin -->
    <section class="hero hero-normal">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="hero__categories">
                        <div class="hero__categories__all">
                            <i class="fa fa-bars"></i>
                            <span>All departments</span>
                        </div>
                        <ul>
                            <li><a href="#">Carrier</a></li>
                            <li><a href="#">Tenda</a></li>
                            <li><a href="#">Sleeping Bag</a></li>
                            <li><a href="#">Kemeja</a></li>
                            <li><a href="#">Celana</a></li>
                            <li><a href="#">Sepatu</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="hero__search">
                        <div class="hero__search__form">
                            <form action="#">
                                <input type="text" placeholder="What do yo u need?">
                                <button type="submit" class="site-btn">SEARCH</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->

    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section set-bg" data-setbg="img/mountain.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>Outdoor Shop</h2>
                        <div class="breadcrumb__option">
                            <a href="index.php">Home</a>
                            <span>Shop</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <section class="checkout spad">
        <div class="container">
            <div class="checkout__form">
                <h4>Edit Barang</h4>
                <form action="proses_edit_barang.php?kd_barang=<?php echo $kd_barang;?>" method="post" enctype="multipart/form-data">
                    <table class="table">
                        <tr>
                            <td>Kode Barang</td>
                            <td><input type="text" name="kd_barang" class="form-control" autocomplete="off" value="<?php echo $barang['kd_barang']; ?>"></td>
                        </tr>
                        <tr>
                            <td>Nama Barang</td>
                            <td><input type="text" name="nama_barang"  class="form-control" value="<?php echo $barang['nama_barang']; ?>"></td>
                        </tr>
                        <tr>
                            <td>Harga</td>
                            <td><input type="text" name="harga"  class="form-control" value="<?php echo $barang['harga']; ?>"></td>
                        </tr>
                        <tr>
                            <td>Stok</td>
                            <td><input type="text" name="stok"  class="form-control" value="<?php echo $barang['stok']; ?>"></td>
                        </tr>
                        <tr>
                            <td>Gambar</td>
                            <td><input type="file" name="gambar"  class="form-control" value="img/product/<?php echo $barang['gambar']; ?>"></td>
                        </tr>
                        <tr>
                            <td>Kode Brand</td>
                            <td>
                            <select name="kd_brand" class="form-control">
                            <?php $brandd = mysqli_query($con, "SELECT * FROM brand");
                                    foreach ($brandd as $brand) { ?>
                                    <option value="<?php echo $brand['kd_brand'];?>" <?php  if ($brand['kd_brand'] == $kd_brand) {echo "selected";}?>>
                                    <?php echo $brand['kd_brand'] . ' - '. $brand['nama_brand']; ?>
                                </option>
                                <?php } ?>
                            </select>
                            </td>
                        </tr>
                        <tr>
                            <td>Id Supplier</td>
                            <td>
                            <select name="id_supplier" class="form-control">
                                <?php $suppliers = mysqli_query($con, "SELECT * FROM supplier");
                                    foreach ($suppliers as $supplier) { ?>
                                    <option value="<?php echo $supplier['id_supplier'];?>" <?php  if ($supplier['id_supplier'] == $id_supplier) {echo "selected";}?>>
                                    <?php echo $supplier['id_supplier'] . ' - '. $supplier['nm_supplier']; ?>
                                </option>
                                <?php } ?>
                            </select>
                            </td>
                        </tr>
                        <tr>
                            <td><input  class="btn btn-success" type="submit" name="submit"></td>
                        </tr>
                    </table>
                </form>
            </div>
        </div>
    </section>

    <!-- Js Plugins -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/mixitup.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>