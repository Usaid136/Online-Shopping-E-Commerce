<?php
include "config.php";

//  ADD TO CART

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
	<!-- chatgpt cdn -->
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
	<!-- Site Title -->
	<title>Online Shopping</title>
	<!--
		CSS
		============================================= -->
	<link rel="stylesheet" href="css/linearicons.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/themify-icons.css">
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/owl.carousel.css">
	<link rel="stylesheet" href="css/nice-select.css">
	<link rel="stylesheet" href="css/nouislider.min.css">
	<link rel="stylesheet" href="css/ion.rangeSlider.css" />
	<link rel="stylesheet" href="css/ion.rangeSlider.skinFlat.css" />
	<link rel="stylesheet" href="css/magnific-popup.css">
	<link rel="stylesheet" href="css/main.css">
	<link rel="stylesheet" href="css/index.css">

</head>

<body>

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
							<li class="nav-item"><a class="nav-link" href="faq.php">FAQ's</a></li>
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

	<!-- start banner Area -->
	<section class="banner-area">
		<div class="container">
			<div class="row fullscreen align-items-center justify-content-start">
				<div class="col-lg-12">
					<div class="active-banner-slider owl-carousel">
						<!-- single-slide -->
						<div class="row single-slide align-items-center d-flex" style="repeat: no-repeat;">
							<div class="col-lg-5 col-md-6">
								<div class="banner-content" style="margin-top: 135px;">
									<h1>Explore Our Creative<br>Collection!</h1>
									<p>Our online shopping website offers a wide range of products to cater to all your fashion needs. We have categories for both boys and girls, including stylish watches, trendy clothes, and fashionable bags. You'll also find a variety of footwear options, caps, belts, and wallets to complete your look. Whether you're shopping for boys or girls, we have everything you need to stay stylish and on-trend.</p>
									<div class="add-bag d-flex align-items-center">
										<a class="add-btn" href="category.php">
											<button class="button">
												<p>Shop Now</p>
											</button>
											</span></a>
									</div>
								</div>
							</div>
							<!-- <div class="col-lg-7">
								<div class="banner-img">
									<img class="img-fluid" style="height: 280px; width: 320px; margin-left: 170px; margin-top: 80px;"  src="img/banner/banner-img.png" alt="">
								</div>
							</div> -->
						</div>
						<!-- single-slide -->
						<div class="row single-slide">
							<div class="col-lg-5">
								<div class="banner-content">
									<h1>Explore Our Creative<br>Collection!</h1>
									<p>Online shopping offers a convenient way to explore and purchase products across multiple categories, from clothing and electronics to home goods and groceries. With just a few clicks, you can find a wide range of options, compare prices, and enjoy doorstep delivery.</p>
									<div class="add-bag d-flex align-items-center">
										<a class="add-btn" href="#">
											<button class="button">
												<p>Shop Now</p>
											</button>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End banner Area -->

	<!-- start features Area -->
	<section class="features-area section_gap">
		<div class="container">
			<h1 class="head text-center">Our Services</h1>
			<div class="row features-inner">
				<!-- single features -->
				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="single-features">
						<div class="f-icon">
							<img src="img/features/f-icon1.png" alt="">
						</div>
						<h6>Free Delivery</h6>
						<p>Free Shipping on all order</p>
					</div>
				</div>
				<!-- single features -->
				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="single-features">
						<div class="f-icon">
							<img src="img/features/f-icon2.png" alt="">
						</div>
						<h6>Return Policy</h6>
						<p>Easy 30 Days Return Policy</p>
					</div>
				</div>
				<!-- single features -->
				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="single-features">
						<div class="f-icon">
							<img src="img/features/f-icon3.png" alt="">
						</div>
						<h6>24/7 Support</h6>
						<p>Always open, always creative!</p>
					</div>
				</div>
				<!-- single features -->
				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="single-features">
						<div class="f-icon">
							<img src="img/features/f-icon4.png" alt="">
						</div>
						<h6>Secure Payment</h6>
						<p>Safe, secure, swift transactions!</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- end features Area -->

	<!-- Start category Area -->
	<section class="category-area">
		<h1 class="head text-center">Categories</h1>
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-8 col-md-12">
					<div class="row">
						<div class="col-lg-6 col-md-6">
							<div class="single-deal">
								<div class="overlay"></div>
								<img class="img-fluid" src="img/banner/walletcat1.jpeg" style="height: 250px; width: 100%" alt="">
								<a href="category.php">
									<div class="deal-details">
										<h6 class="deal-title">Stylish Wallets for Boys and Girls</h6>
									</div>
								</a>
							</div>
						</div>
						<div class="col-lg-6 col-md-6">
							<div class="single-deal">
								<div class="overlay"></div>
								<img class="img-fluid" src="img/banner/Bagscat1.jpeg" style="height: 250px; width: 100%" alt="">
								<a href="category.php">
									<div class="deal-details">
										<h6 class="deal-title">Stylish Bags for Boys and Girls</h6>
									</div>
								</a>
							</div>
						</div>
						<div class="col-lg-6 col-md-6">
							<div class="single-deal">
								<div class="overlay"></div>
								<img class="img-fluid w-100" src="img/banner/clothescat.jpeg" style="height: 250px; width: 100%" alt="">
								<a href="category.php">
									<div class="deal-details">
										<h6 class="deal-title">Stylish and Comfortable Clothing for Boys and Girls</h6>
									</div>
								</a>
							</div>
						</div>
						<div class="col-lg-6 col-md-6">
							<div class="single-deal">
								<div class="overlay"></div>
								<img class="img-fluid w-100" src="img/banner/footwearcat2.jpeg" style="height: 250px; width: 100%" alt="">
								<a href="category.php">
									<div class="deal-details">
										<h6 class="deal-title">Trendy and Comfortable Footwear for Boys & Girls
										</h6>
									</div>
								</a>
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>

		<div class="container">

			<div class="row justify-content-center">
				<div class="col-lg-8 col-md-12">
					<div class="row">
						<div class="col-lg-6 col-md-6">
							<div class="single-deal">
								<div class="overlay"></div>
								<img class="img-fluid w-100" src="img/banner/capcat1.jpeg" style="height: 250px; width: 100%" alt="">
								<a href="category.php">
									<div class="deal-details">
										<h6 class="deal-title">Stylish Caps for Boys: The Perfect Accessory</h6>
									</div>
								</a>
							</div>
						</div>
						<div class="col-lg-6 col-md-6">
							<div class="single-deal">
								<div class="overlay"></div>
								<img class="img-fluid w-100" src="img/banner/watchcat1.jpeg" style="height: 250px; width: 100%" alt="">
								<a href="category.php">
									<div class="deal-details">
										<h6 class="deal-title">Stylish Watches for Boys & Girls: Timeless Accessories for Young Trendsetters</h6>
									</div>
								</a>
							</div>
						</div>
						<div class="col-lg-6 col-md-6">
							<div class="single-deal">
								<div class="overlay"></div>
								<img class="img-fluid w-100" src="img/banner/beltscat1.jpeg" style="height: 250px; width: 100%" alt="">
								<a href="category.php">
									<div class="deal-details">
										<h6 class="deal-title">Stylish Boys' Belts for Every Occasion
										</h6>
									</div>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End category Area -->

	<!-- start product Area -->
	<section class="owl-carousel active-product-area section_gap">
		<!-- single product slide -->
		<div class="single-product-slider">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-lg-6 text-center">
						<div class="section-title">
							<h1>Latest Products</h1>
							<p> Our latest products bring cutting-edge innovation and superior performance, designed for
								those who demand the best.</p>
						</div>
					</div>
				</div>
				<div class="row">
					<!-- php of product cards -->
					
						<!-- php of product cards -->

						<!-- single product -->
						<?php

// Fetch products from latest product
$query = "Select * from latest_products";
$result = mysqli_query($conn, $query);
foreach ($result as $row) {
?>
	<div class='col col-md-6 col-sm-8 col-10 col-lg-4 mb-4'>
	<div class='card'>
	<img class='img-fluid' src="<?php echo " $row[product_img]" ?>" alt=''>
	<div class='product-details'>
<h6><?php echo " $row[product_name]" ?></h6>
<div class='price'>
<h6>Price:<?php echo " $row[product_price]" ?></h6>
</div>
<p><?php echo " $row[product_category]" ?></p>
<p><?php echo " $row[product_description]" ?></p>
</div>
<div class='prd-bottom'>
<a href='category.php' class='btn btn-cart mt-2'>Shop Now</a>
<a href='category.php' class='btn btn-more mt-2'>View More</a>
</form>
</div>
</div>
</div>
<?php

}
?>
						</div>
					
				</div>
		</div>
		<!-- single product slide -->
		<div class="single-product-slider">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-lg-6 text-center">
						<div class="section-title">
							<h1>Coming Products</h1>
							<p>Our upcoming product lineup is set to revolutionize the market, blending cutting-edge
								technology with sleek, user-centric design.</p>
						</div>
					</div>
				</div>
				<div class="row">
					<!-- php of product cards -->
					<?php

// Fetch products from uppcomming_products
$query = "Select * from uppcomming_products";
$result = mysqli_query($conn, $query);
foreach ($result as $row) {
?>
	<div class='col col-md-6 col-sm-8 col-10 col-lg-4 mb-4'>
	<div class='card'>
	<img class='img h-45' src="<?php echo " $row[product_img]" ?>" alt=''>
	<div class='product-details'>
<h6><?php echo " $row[product_name]" ?></h6>
<div class='price'>
<h6>Price:<?php echo " $row[product_price]" ?></h6>
</div>
<p><?php echo " $row[product_category]" ?></p>
<p><?php echo " $row[product_description]" ?></p>
</div>
</div>
</div>
<?php

}
?>
				</div>
			</div>
		</div>
	</section>
	<!-- end product Area -->
	<br>
	<!-- start footer Area -->
	<footer class="footer-area section_gap">
		<div class="container">
			<div class="row">
				<div class="col-lg-3  col-md-6 col-sm-6">
					<div class="single-footer-widget">
						<h6>About Us</h6>
						<p>
						Online shopping offers a convenient way to explore and purchase products across multiple categories, from clothing and electronics to home goods and groceries. With just a few clicks, you can find a wide range of options, compare prices, and enjoy doorstep delivery.
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
                                    window.location.href='index.php';
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
							<a href="https://www.facebook.com/rehan.arain.9421?mibextid=ZbWKwL"><i class="fa fa-facebook"></i></a>
							<a href=""><i class="fa fa-twitter"></i></a>
							<a href="https://www.instagram.com/alirazacheema010/profilecard/?igsh=MW5oMmJiaTNrMGFuNw=="><i class="fa fa-instagram"></i></a>
							<a href="#"><i class="fa fa-behance"></i></a>
						</div>
					</div>
				</div>
			</div>
			<div class="footer-bottom d-flex justify-content-center align-items-center flex-wrap">
				<p class="footer-text m-0">
					Copyright &copy; All rights reserved | This website is developed and designed by <a href="">M.Usaid Saddiq</a>. For inquiries or custom website services, Contact at <a href="tel:+923300262678">+923300262678</a> Or Email at <a href="mailto:muhammadusaid136@gmail.com">muhammadusaid136@gmail.com</a>.
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
	<script src="js/countdown.js"></script>
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<!--gmaps Js-->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
	<script src="js/gmaps.min.js"></script>
	<script src="js/main.js"></script>
</body>

</html>