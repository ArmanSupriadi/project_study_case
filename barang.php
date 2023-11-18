<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Toko Outdoor</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
</head>

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

    <div class="col-md-12 mt-4">
                <h3>Data Barang</h3>
                <a href="tambah_barang.php" class="btn btn-primary bi bi-plus-square mb-2" style="margin-left: 96%;" ></a>
                    <table id="myTable" class="table table-striped" >
                        <thead>
                            <tr>
                                <td width="100px">Kode Barang</td>
                                <td width="100px">Nama Barang</td>
                                <td width="100px">Harga</td>
                                <td width="100px">Stok</td>
                                <td width="100px">Gambar</td>
                                <td width="100px">Kode Brand</td>
                                <td width="100px">ID Supplier</td>
                                <td width="30px">Action</td>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                                include "config.php";

                                $barangg = mysqli_query($con, "SELECT * FROM barang");

                                foreach ($barangg as $barang) {
        
                            ?>
                                <tr>
                                    <td><?php echo $barang["kd_barang"];?></td>
                                    <td><?php echo $barang["nama_barang"];?></td>
                                    <td><?php echo $barang["harga"];?></td>
                                    <td><?php echo $barang["stok"];?></td>
                                    <td><img src="img/product/<?php echo $barang["gambar"];?>"></td>
                                    <td><?php echo $barang["kd_brand"];?></td>
                                    <td><?php echo $barang["id_supplier"];?></td>
                                    <td>
                                    <a class="btn btn-success bi bi-pencil-square btn-sm" href="edit_barang.php?kd_barang=<?php echo $barang['kd_barang'];?>"></a>
                                    <a class="btn btn-danger bi bi-x-square btn-sm " href="delete_barang.php?kd_barang=<?php echo $barang['kd_barang'];?>" ></a>
                                    </td>
                                </tr>
                            <?php }  ?>
                        </tbody>
                    </table>
            </div>

            <!-- Footer Section Begin -->
    <footer class="footer spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="footer__copyright">
                        <div class="footer__copyright__text"><p style="position: center;"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p></div>

                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->

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