<?php
include "config.php";
session_start();
if (!isset($_SESSION["admin_session"])) {
    echo "<script>
    window.location.href='admin_login.php';
    </script>";
}

?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <!-- Custom css link -->
    <!-- <link rel="stylesheet" href="css/Product.css"> -->

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <?php
        include "sidebar.php";
        ?>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>



                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>





                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

                                <img class="img-profile rounded-circle" src="img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="profile.php">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>

                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="logout.php" data-toggle="modal"
                                    data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->
                 
                <!-- Product Categories start -->
                <div class="Category container-fluid">
                    <div class="row">
                        <h1 class="text-center">Products Categories</h1><br><br><br>
                    </div>
                    <div class="row">
                        <div class="col">
                            <a href="products_boys_bags.php">
                                <img src="img/banner/Bagscat1.jpeg" alt="">
                                <h5>Boys Bags</h5>
                            </a>
                        </div>
                        <div class="col">
                            <a href="products_boys_belts.php">
                                <img src="img/banner/beltscat1.jpeg" alt="">
                                <h5>Boys Belts</h5>
                            </a>
                        </div>
                        <div class="col">
                            <a href="products_boys_caps.php">
                                <img src="img/banner/capcat1.jpeg" alt="">
                                <h5>Boys Caps</h5>
                            </a>
                        </div>
                        <div class="col">
                            <a href="products_boys_clothes.php">
                                <img src="img/banner/clothescat.jpeg" alt="">
                                <h5>Boys Clothes</h5>
                            </a>
                        </div>
                        <div class="col">
                            <a href="products_boys_footwear.php">
                                <img src="img/banner/footwearcat.jpeg" alt="">
                                <h5>Boys Footwear</h5>
                            </a>
                        </div>
                        <div class="col">
                            <a href="products_boys_wallets.php">
                                <img src="img/banner/walletcat1.jpeg" alt="">
                                <h5>Boys Wallets</h5>
                            </a>
                        </div>
                        <div class="col">
                            <a href="products_boys_watch.php">
                                <img src="img/banner/watchcat2.jpeg" alt="">
                                <h5>Boys Watch</h5>
                            </a>
                        </div>
                        <div class="col">
                            <a href="products_girls_bags.php">
                                <img src="img/banner/Bagscat1.jpeg" alt="">
                                <h5>Girls Bags</h5>
                            </a>
                        </div>
                        <div class="col">
                            <a href="products_girls_clothes.php">
                                <img src="img/banner/clothescat.jpeg" alt="">
                                <h5>Girls Clothes</h5>
                            </a>
                        </div>
                        <div class="col">
                            <a href="products_girls_footwear.php">
                                <img src="img/banner/footwearcat2.jpeg" alt="">
                                <h5>Girls Footwear</h5>
                            </a>
                        </div>
                        <div class="col">
                            <a href="products_girls_wallets.php">
                                <img src="img/banner/walletcat2.jpeg" alt="">
                                <h5>Girls Wallets</h5>
                            </a>
                        </div>
                        <div class="col">
                            <a href="products_girls_watch.php">
                                <img src="img/banner/watchcat1.jpeg" alt="">
                                <h5>Girls Watches</h5>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- Product Categories end -->
                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <div class="row">
                        <h1 class="text-center">All Products</h1><br><br><br>
                    </div>
                </div>
                <?php
                $query = "Select * from tbl_boys_belt";
                $result = mysqli_query($conn, $query);
                foreach ($result as $row) {
                    ?>
                    <div class="cards-main">
                        <div class="row">
                            <div class='col'>
                                <div class="card" style="width: 18rem;">
                                    <img src="<?php echo " $row[product_image]" ?>" class="card-img-top"
                                        style=" height: 200px;" alt="<?php echo " $row[product_name]" ?>">
                                    <div class="card-body">
                                        <h5 class="card-title"><b>Name:</b><?php echo " $row[product_name]" ?></h5>
                                        <p class="card-text"><b>Price:</b><?php echo " $row[product_price]" ?></p>
                                         <p class="card-text"><b>Description:</b><?php echo " $row[product_description]" ?>
                                        </p>
                                        <a href="products_boys_belt.php" class="btn  btn-warning">Further Detail</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                }
                ?>
                <?php
                $query = "Select * from tbl_boys_bags";
                $result = mysqli_query($conn, $query);
                foreach ($result as $row) {
                    ?>
                    <div class="cards-main">
                        <div class="row">
                            <div class='col'>
                                <div class="card" style="width: 18rem;">
                                    <img src="<?php echo " $row[product_image]" ?>" class="card-img-top"
                                        style=" height: 200px;" alt="<?php echo " $row[product_name]" ?>">
                                    <div class="card-body">
                                        <h5 class="card-title"><b>Name:</b><?php echo " $row[product_name]" ?></h5>
                                        <p class="card-text"><b>Price:</b><?php echo " $row[product_price]" ?></p>
                                         <p class="card-text"><b>Description:</b><?php echo " $row[product_description]" ?>
                                        </p>
                                        <a href="products_boys_bags.php" class="btn  btn-warning">Further Detail</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                }
                ?>
                <?php
                $query = "Select * from tbl_boys_caps";
                $result = mysqli_query($conn, $query);
                foreach ($result as $row) {
                    ?>
                    <div class="cards-main">
                        <div class="row">
                            <div class='col'>
                                <div class="card" style="width: 18rem;">
                                    <img src="<?php echo " $row[product_image]" ?>" class="card-img-top"
                                        style=" height: 200px;" alt="<?php echo " $row[product_name]" ?>">
                                    <div class="card-body">
                                        <h5 class="card-title"><b>Name:</b><?php echo " $row[product_name]" ?></h5>
                                        <p class="card-text"><b>Price:</b><?php echo " $row[product_price]" ?></p>
                                         <p class="card-text"><b>Description:</b><?php echo " $row[product_description]" ?>
                                        </p>
                                        <a href="products_boys_caps.php" class="btn  btn-warning">Further Detail</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                }
                ?>
                <?php
                $query = "Select * from tbl_boys_clothes";
                $result = mysqli_query($conn, $query);
                foreach ($result as $row) {
                    ?>
                    <div class="cards-main">
                        <div class="row">
                            <div class='col'>
                                <div class="card" style="width: 18rem;">
                                    <img src="<?php echo " $row[product_image]" ?>" class="card-img-top"
                                        style=" height: 200px;" alt="<?php echo " $row[product_name]" ?>">
                                    <div class="card-body">
                                        <h5 class="card-title"><b>Name:</b><?php echo " $row[product_name]" ?></h5>
                                        <p class="card-text"><b>Price:</b><?php echo " $row[product_price]" ?></p>
                                         <p class="card-text"><b>Description:</b><?php echo " $row[product_description]" ?>
                                        </p>
                                        <a href="products_boys_clothes.php" class="btn  btn-warning">Further Detail</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                }
                ?>
                <?php
                $query = "Select * from tbl_girls_clothes";
                $result = mysqli_query($conn, $query);
                foreach ($result as $row) {
                    ?>
                    <div class="cards-main">
                        <div class="row">
                            <div class='col'>
                                <div class="card" style="width: 18rem;">
                                    <img src="<?php echo " $row[product_image]" ?>" class="card-img-top"
                                        style=" height: 200px;" alt="<?php echo " $row[product_name]" ?>">
                                    <div class="card-body">
                                        <h5 class="card-title"><b>Name:</b><?php echo " $row[product_name]" ?></h5>
                                        <p class="card-text"><b>Price:</b><?php echo " $row[product_price]" ?></p>
                                         <p class="card-text"><b>Description:</b><?php echo " $row[product_description]" ?>
                                        </p>
                                        <a href="products_girls_clothes.php" class="btn  btn-warning">Further Detail</a>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                }
                ?>

                <?php
                $query = "Select * from tbl_girls_bags";
                $result = mysqli_query($conn, $query);
                foreach ($result as $row) {
                    ?>
                    <div class="cards-main">
                        <div class="row">
                            <div class='col'>
                                <div class="card" style="width: 18rem;">
                                    <img src="<?php echo " $row[product_image]" ?>" class="card-img-top"
                                        style=" height: 200px;" alt="<?php echo " $row[product_name]" ?>">

                                    <div class="card-body">
                                        <h5 class="card-title"><b>Name:</b><?php echo " $row[product_name]" ?></h5>
                                        <p class="card-text"><b>Price:</b><?php echo " $row[product_price]" ?></p>
                                         <p class="card-text"><b>Description:</b><?php echo " $row[product_description]" ?>
                                        </p>
                                        <a href="products_girls_bags.php" class="btn  btn-warning">Further Detail</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                }
                ?>

                <?php
                $query = "Select * from tbl_boys_footwear";
                $result = mysqli_query($conn, $query);
                foreach ($result as $row) {
                    ?>
                    <div class="cards-main">
                        <div class="row">
                            <div class='col'>
                                <div class="card" style="width: 18rem;">
                                    <img src="<?php echo " $row[product_image]" ?>" class="card-img-top"
                                        style=" height: 200px;" alt="<?php echo " $row[product_name]" ?>">
                                    <div class="card-body">
                                        <h5 class="card-title"><b>Name:</b><?php echo " $row[product_name]" ?></h5>
                                        <p class="card-text"><b>Price:</b><?php echo " $row[product_price]" ?></p>
                                         <p class="card-text"><b>Description:</b><?php echo " $row[product_description]" ?>
                                        </p>
                                        <a href="products_boys_footwear.php" class="btn btn-warning">Further Detail</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                }
                ?>

                <?php
                $query = "Select * from tbl_girls_footwear";
                $result = mysqli_query($conn, $query);
                foreach ($result as $row) {
                    ?>
                    <div class="cards-main">
                        <div class="row">
                            <div class='col'>
                                <div class="card" style="width: 18rem;">
                                    <img src="<?php echo " $row[product_image]" ?>" class="card-img-top"
                                        style=" height: 200px;" alt="<?php echo " $row[product_name]" ?>">
                                    <div class="card-body">
                                        <h5 class="card-title"><b>Name:</b><?php echo " $row[product_name]" ?></h5>
                                        <p class="card-text"><b>Price:</b><?php echo " $row[product_price]" ?></p>
                                         <p class="card-text"><b>Description:</b><?php echo " $row[product_description]" ?>
                                        </p>
                                        <a href="products_girls_footwear.php" class="btn btn-warning">Further Detail</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                }
                ?>

                <?php
                $query = "Select * from tbl_boys_wallets";
                $result = mysqli_query($conn, $query);
                foreach ($result as $row) {
                    ?>
                    <div class="cards-main">
                        <div class="row">
                            <div class='col'>
                                <div class="card" style="width: 18rem;">
                                    <img src="<?php echo " $row[product_image]" ?>" class="card-img-top"
                                        style=" height: 200px;" alt="<?php echo " $row[product_name]" ?>">
                                    <div class="card-body">
                                        <h5 class="card-title"><b>Name:</b><?php echo " $row[product_name]" ?></h5>
                                        <p class="card-text"><b>Price:</b><?php echo " $row[product_price]" ?></p>
                                         <p class="card-text"><b>Description:</b><?php echo " $row[product_description]" ?>
                                        </p>
                                        <a href="products_boys_wallets.php" class="btn btn-warning">Further Detail</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                }
                ?>
                <?php
                $query = "Select * from tbl_girls_wallets";
                $result = mysqli_query($conn, $query);
                foreach ($result as $row) {
                    ?>
                    <div class="cards-main">
                        <div class="row">
                            <div class='col'>
                                <div class="card" style="width: 18rem;">
                                    <img src="<?php echo " $row[product_image]" ?>" class="card-img-top"
                                        style=" height: 200px;" alt="<?php echo " $row[product_name]" ?>">
                                    <div class="card-body">
                                        <h5 class="card-title"><b>Name:</b><?php echo " $row[product_name]" ?></h5>
                                        <p class="card-text"><b>Price:</b><?php echo " $row[product_price]" ?></p>
                                         <p class="card-text"><b>Description:</b><?php echo " $row[product_description]" ?>
                                        </p>
                                        <a href="products_girls_wallets.php" class="btn btn-warning">Further Detail</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                }
                ?>
                <?php
                $query = "Select * from tbl_boys_watch";
                $result = mysqli_query($conn, $query);
                foreach ($result as $row) {
                    ?>
                    <div class="cards-main">
                        <div class="row">
                            <div class='col'>
                                <div class="card" style="width: 18rem;">
                                    <img src="<?php echo " $row[product_image]" ?>" class="card-img-top"
                                        style=" height: 200px;" alt="<?php echo " $row[product_name]" ?>">
                                    <div class="card-body">
                                        <h5 class="card-title"><b>Name:</b><?php echo " $row[product_name]" ?></h5>
                                        <p class="card-text"><b>Price:</b><?php echo " $row[product_price]" ?></p>
                                         <p class="card-text"><b>
                                                Description:</b><?php echo " $row[product_description]" ?></p>
                                        <a href="products_boys_watch.php" class="btn btn-warning">Further Detail</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                }
                ?>
                <?php
                $query = "Select * from tbl_girls_watch";
                $result = mysqli_query($conn, $query);
                foreach ($result as $row) {
                    ?>
                    <div class="cards-main">
                        <div class="row">
                            <div class='col'>
                                <div class="card" style="width: 18rem;">
                                    <img src="<?php echo " $row[product_image]" ?>" class="card-img-top"
                                        style=" height: 200px;" alt="<?php echo " $row[product_name]" ?>">
                                    <div class="card-body">
                                        <h5 class="card-title"><b>Name:</b><?php echo " $row[product_name]" ?></h5>
                                        <p class="card-text"><b>Price:</b><?php echo " $row[product_price]" ?></p>
                                         <p class="card-text"><b>Description:</b><?php echo " $row[product_description]" ?>
                                        </p>
                                        <a href="products_girls_watch.php" class="btn btn-warning">Further Detail</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                }
                ?>
                <!-- /.container-fluid -->

                <!-- End of Main Content -->

            </div>
            <!-- End of Content Wrapper -->

        </div>
        <!-- End of Page Wrapper -->

        <!-- Scroll to Top Button-->
        <a class="scroll-to-top rounded" href="#page-top">
            <i class="fas fa-angle-up"></i>
        </a>

        <!-- Logout Modal-->
        <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                        <a class="btnbtn-warning" href="logout.php">Logout</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Bootstrap core JavaScript-->
        <script src="vendor/jquery/jquery.min.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

        <!-- Core plugin JavaScript-->
        <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

        <!-- Custom scripts for all pages-->
        <script src="js/sb-admin-2.min.js"></script>

        <!-- Page level plugins -->
        <script src="vendor/chart.js/Chart.min.js"></script>

        <!-- Page level custom scripts -->
        <script src="js/demo/chart-area-demo.js"></script>
        <script src="js/demo/chart-pie-demo.js"></script>

        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
            integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
            crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
            integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
            crossorigin="anonymous"></script>
</body>

</html>