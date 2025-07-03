<?php
include "config.php";



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
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/themify-icons.css">
	<link rel="stylesheet" href="css/nice-select.css">
	<link rel="stylesheet" href="css/nouislider.min.css">
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/main.css">
	<link rel="stylesheet" href="css/index.css">
</head>

<body id="category">

	<!-- Start Header Area -->
	<header class="header_area sticky-header">
		<div class="main_menu">
			<nav class="navbar navbar-expand-lg navbar-light main_box">
				<div class="container">
					<!-- Brand and toggle get grouped for better mobile display -->
					<a class="navbar-brand logo_h" href="index.php"><h3>Online Shopping</h3></a>
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
							<li class="nav-item"><a href="cart.php" class="cart"><span class="ti-bag"></span> View Cart</a></li>
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
					<h1>Girls Boys Clothes</h1>
					<nav class="d-flex align-items-center">
						<a href="index.php">Home<span class="lnr lnr-arrow-right"></span></a>
						<a href="category.php">Shop<span class="lnr lnr-arrow-right"></span></a>
						<a href="product_boys_clothes.php">Boys Clothes</a>
					</nav>
				</div>
			</div>
		</div>
	</section>
	<!-- End Banner Area -->
	<div class="container">
		<div class="row">
			

				<!-- Start Best Seller -->
				<section class="lattest-product-area pb-40 category-list">
					<div class="row">
						<div class="col">
							<h1 class="text-center" style="color: rgba(255, 135, 0, 0.74);">
								Boys Clothes
							</h1>
						</div>
					</div>
					<div class="row">
						<!-- single product -->
						<?php

						// Fetch products from Boys Clothes
						$result = $conn->query("SELECT * FROM tbl_boys_clothes");
						while ($row = $result->fetch_assoc()) {
							echo "
							<div class='col col-lg-4 col-md-6'>
							<div class='card'>
							<img class='img-fluid' src='{$row['product_image']}' alt=''>
							<div class='product-details'>
          <h6>{$row['product_name']}</h6>
		<div class='price'>
          <h6>Price:{$row['product_price']}</h6>
		</div>
          <p>{$row['product_description']}</p>
		</div>
        <form action='add_to_cart.php method='POST'>
            <input type='hidden' name='product_id' value='{$row['product_id']}'>
            <input type='hidden' name='product_name' value='{$row['product_name']}'>
            <input type='hidden' name='product_price' value='{$row['product_price']}'>
            <input type='hidden' name='product_description' value='{$row['product_description']}'>
            <input type='hidden' name='product_image' value='{$row['product_image']}'>
            <input type='hidden' name='product_quantity' value='{$row['product_quantity']}'>
		    <div class='prd-bottom'>
            <button type='submit' class='btn btn-cart'>Add to Cart</button>
            <a href='View_boys_clothes.php?product_id=$row[product_id]' class='btn btn-more'>View More</a>
        </form>
		</div>
					</div>
					</div>
	";
						}
						?>

					</div>
				</section>
				<!-- End Best Seller -->
			</div>
		</div>
	</div>

	<br>
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
									<input class="form-control" name="email" placeholder="Enter Your Email"
										required type="email">
										<br>
										<input type="submit" value="Subscribe" name="btninsert" class="form-control" style="background-color: rgba(240, 120, 0, 0.72); color: white;">
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
								<a href="https://www.instagram.com/alirazacheema010/profilecard/?igsh=MW5oMmJiaTNrMGFuNw=="><i class="fa fa-instagram"></i></a>							<a href="#"><i class="fa fa-behance"></i></a>
						</div>
					</div>
				</div>
			</div>
			<div class="footer-bottom d-flex justify-content-center align-items-center flex-wrap">
				<p class="footer-text m-0">
				Copyright &copy; All rights reserved | This website is developed and designed by <a href="">M.Usaid Saddiq</a>. For inquiries or custom website services, Contact at <a href="tel:+923300262678">+923300262678</a> Or Email at <a href="mailto:muhammadusaid136@gmail.com">muhammadusaid136@gmail.com</a>.

			</div>
		</div>
	</footer>
	<!-- End footer Area -->

	<!-- Modal Quick Product View -->
	<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="container relative">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
				<div class="product-quick-view">
					<div class="row align-items-center">
						<div class="col-lg-6">
							<div class="quick-view-carousel">
								<div class="item" style="background: url(img/organic-food/q1.jpg);">

								</div>
								<div class="item" style="background: url(img/organic-food/q1.jpg);">

								</div>
								<div class="item" style="background: url(img/organic-food/q1.jpg);">

								</div>
							</div>
						</div>
						<div class="col-lg-6">
							<div class="quick-view-content">
								<div class="top">
									<h3 class="head">Mill Oil 1000W Heater, White</h3>
									<div class="price d-flex align-items-center"><span class="lnr lnr-tag"></span> <span
											class="ml-10">$149.99</span></div>
									<div class="category">Category: <span>Household</span></div>
									<div class="available">Availibility: <span>In Stock</span></div>
								</div>
								<div class="middle">
									<p class="content">Mill Oil is an innovative oil filled radiator with the most
										modern technology. If you are
										looking for something that can make your interior look awesome, and at the same
										time give you the pleasant
										warm feeling during the winter.</p>
									<a href="#" class="view-full">View full Details <span
											class="lnr lnr-arrow-right"></span></a>
								</div>
								<div class="bottom">
									<div class="color-picker d-flex align-items-center">Color:
										<span class="single-pick"></span>
										<span class="single-pick"></span>
										<span class="single-pick"></span>
										<span class="single-pick"></span>
										<span class="single-pick"></span>
									</div>
									<div class="quantity-container d-flex align-items-center mt-15">
										Quantity:
										<input type="text" class="quantity-amount ml-15" value="1" />
										<div class="arrow-btn d-inline-flex flex-column">
											<button class="increase arrow" type="button" title="Increase Quantity"><span
													class="lnr lnr-chevron-up"></span></button>
											<button class="decrease arrow" type="button" title="Decrease Quantity"><span
													class="lnr lnr-chevron-down"></span></button>
										</div>

									</div>
									<div class="d-flex mt-20">
										<a href="#" class="view-btn color-2"><span>Add to Cart</span></a>
										<a href="#" class="like-btn"><span class="lnr lnr-layers"></span></a>
										<a href="#" class="like-btn"><span class="lnr lnr-heart"></span></a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>



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