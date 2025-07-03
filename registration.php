<?php
include "config.php";
session_start();

?>
<!DOCTYPE html>
<html lang="zxx" class="no-js">

<head>
    <!-- Mobile Specific Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon-->
    <link rel="shortcut icon" href="img/fav.png">
    <!-- Author Meta -->
    <meta name="author" content="CodePixar">
    <!-- Meta Description -->
    <meta name="description" content="">
    <!-- Meta Keyword -->
    <meta name="keywords" content="">
    <!-- meta character set -->
    <meta charset="UTF-8">
    <!-- Site Title -->
    <title>Online Shopping</title>

    <!--
        CSS
        ============================================= -->
    <link rel="stylesheet" href="css/linearicons.css">
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/themify-icons.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/nice-select.css">
    <link rel="stylesheet" href="css/nouislider.min.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/main.css">
</head>

<body>

    <!-- Start Header Area -->
    <header class="header_area sticky-header">
        <div class="main_menu">
            <nav class="navbar navbar-expand-lg navbar-light main_box">
                <div class="container">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <a class="navbar-brand logo_h" href="index.php">
                        <h3>Online Shopping</h3>
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                        <ul class="nav navbar-nav menu_nav ml-auto">
                            <li class="nav-item active"><a class="nav-link" href="index.php">Home</a></li>
                            <li class="nav-item"><a class="nav-link" href="category.php">Shop</a></li>
                            <li class="nav-item"><a class="nav-link" href="about.php">About Us</a></li>
                            <li class="nav-item"><a class="nav-link" href="contact.php">Contact Us</a></li>
                            <li class="nav-item"><a class="nav-link" href="feedback.php">Feedback</a></li>
                            <li class="nav-item"><a class="nav-link" href="faq.php">faq's</a></li>
                            <li class="nav-item"><a class="nav-link" href="tracking.php">Track order</a></li>
                            <li class="nav-item active"><a class="nav-link" href="login.php">Login/Register</a></li>
                        </ul>
                        <ul class="nav navbar-nav navbar-right">
                            <li class="nav-item"><a href="cart.php" class="cart"><span class="ti-bag"></span> View
                                    Cart</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </header>
    <!-- End Header Area -->

    <!-- Start Banner Area -->
    <section class="banner-area organic-breadcrumb">
        <div class="container">
            <div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
                <div class="col-first">
                    <h1>Login/Register</h1>
                    <nav class="d-flex align-items-center">
                        <a href="index.php">Home<span class="lnr lnr-arrow-right"></span></a>
                        <a href="category.php">Login/Register</a>
                    </nav>
                </div>
            </div>
        </div>
    </section>

    <section class="login_box_area section_gap">
        <div class="container">
            <div class="row">
                <form class='row contact_form' method='POST'>
                    <div class='col-md-12 form-group p_star'>
                        <label for='full_name'>User Name</label><br>
                        <input type='text' class='form-control' id='first' name='full_name'
                            placeholder='Enter User Name' required>
                    </div>
                    <div class='col-md-12 form-group p_star'>
                        <label for='email'>Email</label><br>
                        <input type='email' class='form-control' id='number' name='email' placeholder='Enter Your email'
                            required>
                    </div>
                    <div class='col-md-12 form-group p_star'>
                        <label for='email'>Password</label><br>
                        <input type='text' class='form-control' id='email' name='password'
                            placeholder='Enter Strong Password' required>
                    </div>
                    <div class='col-md-12 form-group p_star'>
                        <label for='number'>Contact Number</label><br>
                        <input type='number' class='form-control' id='number' name='contact_number'
                            placeholder='Enter Your Contact No' required>
                    </div>
                    <button type='submit' name="btninsert" class='primary-btn'>Create Account</button>
                </form>

                <?php
                if (isset($_POST['btninsert'])) {
                    $name = $_POST['full_name'];
                    $email = $_POST['email'];
                    $pass = $_POST['password'];
                    $contact = $_POST['contact_number'];
                    $query = "insert into customer_login(name,email,password,contact_no)VALUES('$name','$email','$pass','$contact')";
                    $result = mysqli_query($conn, $query);
                    if ($result) {
                        echo "<script>
                                    alert('Welcome! Your account has been created');
                                    window.location.href='index.php';
                                    </script>";
                    }
                }
                ?>

            </div>
        </div>
    </section>
    <!-- start footer Area -->
    <footer class="footer-area section_gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-3  col-md-6 col-sm-6">
                    <div class="single-footer-widget">
                        <h6>About Us</h6>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt
                            ut labore dolore
                            magna aliqua.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4  col-md-6 col-sm-6">
                    <div class="single-footer-widget">
                        <h6>Newsletter</h6>
                        <p>Stay update with our latest</p>
                        <div class="" id="mc_embed_signup">

                            <form method="POST" class="form-inline">
                                <div class="newsletter d-flex flex-row">
                                    <input class="form-control" name="email" placeholder="Enter Your Email" required
                                        type="email">
                                    <br>
                                    <input type="submit" value="Subscribe" name="btninsert" class="form-control"
                                        style="background-color: rgba(240, 120, 0, 0.72); color: white;">
                                    </button>
                                    <div style="position: absolute; left: -5000px;">
                                        <input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value=""
                                            type="text">
                                    </div>
                                </div>
                                <div class="info"></div>
                            </form>
                            <!-- php start -->

                            <?php
                            if (isset($_POST['btninsert'])) {
                                $email = $_POST['email'];
                                $query = "insert into newsletter(email)VALUES('$email')";
                                $result = mysqli_query($conn, $query);
                                if ($result) {
                                    echo "<script>
                                    alert('Your Have Successfully Subscribe!');
                                     
                                    </script>";
                                }
                            }
                            ?>

                            <!-- php end -->
                        </div>
                    </div>
                </div>
                <div class="col-lg-3  col-md-6 col-sm-6">
                    <div class="single-footer-widget mail-chimp">
                        <h6 class="mb-20">Quick Links</h6>
                        <ul class="flex-wrap">
                            <li><a href="index.php" style="color: grey;">Home</a></li>
                            <li><a href="Shop.php" style="color: grey;">
                            <li>Shop</a></li>
                            <li><a href="cart.php" style="color: grey;">
                            <li>Shopping Cart</a></li>
                            <li><a href="index.php" style="color: grey;">
                            <li>About Us</a></li>
                            <li><a href="index.php" style="color: grey;">
                            <li>Contact Us</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 col-sm-6">
                    <div class="single-footer-widget">
                        <h6>Follow Us</h6>
                        <p>Let us be social</p>
                        <div class="footer-social d-flex align-items-center">
                            <a href="https://www.instagram.com/alirazacheema010/profilecard/?igsh=MW5oMmJiaTNrMGFuNw=="><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            	<a href="https://www.instagram.com/alirazacheema010/profilecard/?igsh=MW5oMmJiaTNrMGFuNw=="><i class="fa fa-instagram"></i></a>                            <a href="#"><i class="fa fa-behance"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom d-flex justify-content-center align-items-center flex-wrap">
                <p class="footer-text m-0">
                    Copyright &copy; All rights reserved | This website is developed and designed by <a href="">M.Usaid
                        Saddiq</a>. For inquiries or custom website services, Contact at <a
                        href="tel:+923300262678">+923300262678</a> Or Email at <a
                        href="mailto:muhammadusaid136@gmail.com">muhammadusaid136@gmail.com</a>.

                </p>
            </div>
        </div>
    </footer>
    <!-- End footer Area -->


    <script src="js/vendor/jquery-2.2.4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"
        integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4"
        crossorigin="anonymous"></script>
    <script src="js/vendor/bootstrap.min.js"></script>
    <script src="js/jquery.ajaxchimp.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/jquery.sticky.js"></script>
    <script src="js/nouislider.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <!--gmaps Js-->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
    <script src="js/gmaps.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>