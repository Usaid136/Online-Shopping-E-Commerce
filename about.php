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
	<link rel="stylesheet" href="css/themify-icons.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/nice-select.css">
	<link rel="stylesheet" href="css/nouislider.min.css">
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/main.css">
	<link rel="stylesheet" href="css/index.css">

	<!-- Custom CSS -->
	<style>
		/* Custom styling for better visuals */
		.text-col {
			display: flex;
			justify-content: center;
			align-items: center;
			padding: 20px;
		}

		.img-col img {
			max-width: auto;
			height: auto;
			border-radius: 10px;
		}

		/* Responsive behavior */
		@media (max-width: 768px) {
			.text-col h2 {
				font-size: 24px;
			}

			.text-col p {
				font-size: 14px;
			}
		}
	</style>
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
							<li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
							<li class="nav-item"><a class="nav-link" href="category.php">Shop</a></li>
							<li class="nav-item active"><a class="nav-link" href="about.php">About Us</a></li> 
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
					<h1>About Us</h1>
					<nav class="d-flex align-items-center">
						<a href="index.php">Home<span class="lnr lnr-arrow-right"></span></a>
						<a href="category.php">About Us</a>
					</nav>
				</div>
			</div>
		</div>
	</section>
	<!-- End Banner Area -->

	<!--================Contact Area =================-->
	<!-- Responsive Section -->
	<section class="container py-5">
		<div class="row">
			<!-- First Column: Image -->
			<div class="col-lg-6 col-md-6 col-sm-12 img-col">
				<img src="img/banner/shop.jpg" alt="Example Image" class="img-fluid">
			</div>

			<!-- Second Column: Text -->
			<div class="col-lg-6 col-md-6 col-sm-12 text-col">
				<div>
					<h2 style='color: rgba(255, 135, 0, 0.74);'>Welcome To Our Creative World!</h2>
					<p>Welcome to Online Shopping, your one-stop destination for a wide range of products designed to inspire
						creativity and convenience. With 8 diverse categories, we offer everything from Online Shopping & Crafts
						supplies for the imaginative soul, Stationery and Files to keep you organized, and a charming
						collection of Dolls for young ones. Celebrate special moments with our Greeting Cards and
						discover thoughtful Gift Articles for every occasion. Our selection also includes stylish
						Wallets and Hand Bags, combining functionality with flair. At Online Shopping, we are committed to
						delivering quality products that bring joy, organization, and inspiration to your everyday life.
					</p>
					<a href="category.php" class="primary-btn mt-2">Shop Now</a>
				</div>
			</div>
		</div>
		<hr>
		<hr>
		<div class="row">

			<!-- Second Column: Text -->
			<div class="col-lg-6 col-md-6 col-sm-12 text-col">
				<div>
					<h2 style='color: rgba(255, 135, 0, 0.74);'>Stylish Wallets for Boys and Girls</h2>
					<p>At Online Shopping, Discover our versatile collection of wallets designed for both boys and girls, combining style with functionality. Each wallet features high-quality materials, thoughtful organization, and trendy designs that suit various tastes and ages. From playful patterns and vibrant colors for kids to sleek and sophisticated options for teens, our wallets offer ample storage for cash, cards, and small essentials. Perfect for everyday use or as a thoughtful gift, these wallets not only make a fashion statement but also help teach the value of staying organized in a fun way.
</p>
						<a href="category.php" class="primary-btn mt-2">Shop Now</a>
				</div>
			</div>
			<!-- First Column: Image -->
			<div class="col-lg-6 col-md-6 col-sm-12 img-col">
				<img src="img/banner/walletcat1.jpeg" alt="Image" style="height: 90%; width: 90%" >
			</div>
		</div>
		<hr>
		<div class="row">
			<!-- First Column: Image -->
			<div class="col-lg-6 col-md-6 col-sm-12 img-col">
				<img src="img/banner/bagscat1.jpeg" alt= Image" style="height: 90%; width: 90%">
			</div>

			<!-- Second Column: Text -->
			<div class="col-lg-6 col-md-6 col-sm-12 text-col">
				<div>
					<h2 style='color: rgba(255, 135, 0, 0.74);'>Stylish Bags for Boys and Girls</h2>
					<p>At Online Shopping, Boys' and girls' bags come in a variety of trendy designs, combining style with practicality to meet the needs of kids and teens. From rugged backpacks and sporty duffels for boys to chic handbags and colorful totes for girls, there’s a perfect bag for every occasion. Made from durable materials, these bags offer plenty of space for books, gadgets, and everyday essentials. Whether it’s for school, travel, or a day out, boys and girls can express their unique personalities with bags that are both functional and fashion-forward.</p>
						<a href="category.php" class="primary-btn mt-2">Shop Now</a>
				</div>
			</div>
		</div>
		<hr>
		<div class="row">

			<!-- Second Column: Text -->
			<div class="col-lg-6 col-md-6 col-sm-12 text-col">
				<div>
					<h2 style='color: rgba(255, 135, 0, 0.74);'>
					Stylish and Comfortable Clothing for Boys and Girls</h2>
					<p>At Online Shopping, Discover a versatile range of clothing designed to keep boys and girls stylish, comfortable, and ready for any adventure. Our collection features trendy outfits that combine fashion with functionality, from playful prints and bright colors to classic designs. For boys, explore durable jeans, sporty tees, and cozy hoodies perfect for active days. For girls, choose from charming dresses, cute tops, and leggings that offer both style and ease. Whether for casual outings or special occasions, our clothing ensures kids look great and feel confident, making every moment picture-perfect.</p>
						<a href="category.php" class="primary-btn mt-2">Shop Now</a>
				</div>
			</div>
			<!-- First Column: Image -->
			<div class="col-lg-6 col-md-6 col-sm-12 img-col">
				<img src="img/banner/clothescat.jpeg" alt="Image" style="height: 90%; width: 90%" >
			</div>
		</div>
		<hr>
		<div class="row">
			<!-- First Column: Image -->
			<div class="col-lg-6 col-md-6 col-sm-12 img-col">
				<img src="img/banner/footwearcat2.jpeg" alt="Image" style="height: 90%; width: 90%" >
			</div>

			<!-- Second Column: Text -->
			<div class="col-lg-6 col-md-6 col-sm-12 text-col">
				<div>
					<h2 style='color: rgba(255, 135, 0, 0.74);'>Trendy and Comfortable Footwear for Boys & Girls</h2>
					<p>At Online Shopping, Step into style with our trendy and comfortable footwear collection for boys and girls. Whether your little one is running around the playground, attending a special event, or just exploring the outdoors, our range offers something for every occasion. Designed with durability and comfort in mind, our shoes provide the perfect balance between fashion and functionality. Choose from a variety of styles, including sporty sneakers, classic loafers, adorable sandals, and cozy boots, each crafted to keep young feet happy and supported all day long. Let their personality shine through with footwear that matches their active lifestyle.</p>
						<a href="category.php" class="primary-btn mt-2">Shop Now</a>
				</div>
			</div>
		</div>
		<hr>
		<div class="row">

			<!-- Second Column: Text -->
			<div class="col-lg-6 col-md-6 col-sm-12 text-col">
				<div>
					<h2 style='color: rgba(255, 135, 0, 0.74);'>Stylish Caps for Boys: The Perfect Accessory</h2>
					<p>At Online Shopping, Boys' caps are more than just a practical accessory to shield from the sun; they are a stylish way to elevate any outfit. Whether for sports, casual wear, or outdoor adventures, these caps come in a variety of designs, colors, and materials to suit every taste. From classic baseball caps to trendy snapbacks, boys can express their unique personalities while staying comfortable and protected. With features like adjustable straps for a custom fit and breathable fabrics for all-day wear, boys' caps are the ideal blend of fashion and functionality.</p>
						<a href="category.php" class="primary-btn mt-2">Shop Now</a>
				</div>
			</div>
			<!-- First Column: Image -->
			<div class="col-lg-6 col-md-6 col-sm-12 img-col">
				<img src="img/banner/capcat1.jpeg" alt="Image" style="height: 90%; width: 90%" >
			</div>
		</div>
		<hr>
		<div class="row">
			<!-- First Column: Image -->
			<div class="col-lg-6 col-md-6 col-sm-12 img-col">
				<img src="img/banner/watchcat1.jpeg" alt="Image" style="height: 90%; width: 90%" >
			</div>

			<!-- Second Column: Text -->
			<div class="col-lg-6 col-md-6 col-sm-12 text-col">
				<div>
					<h2 style='color: rgba(255, 135, 0, 0.74);'>Stylish Watches for Boys & Girls: Timeless Accessories for Young Trendsetters</h2>
					<p>"At Online Shopping, Watches for boys and girls are more than just timekeeping devices; they are stylish accessories that add a touch of personality to any outfit. Designed with vibrant colors, fun patterns, and durable materials, these watches cater to the adventurous spirit of children while also serving as a practical tool for everyday use. Whether it's a sporty digital watch with a bold design or a classic analog watch with playful graphics, there’s a perfect option to match every child's taste. With features like waterproofing and shock resistance, these watches are built to withstand active lifestyles, making them the perfect companion for both school and play.</p>
						<a href="category.php" class="primary-btn mt-2">Shop Now</a>
				</div>
			</div>
		</div>
		<hr>
		<div class="row">

			<!-- Second Column: Text -->
			<div class="col-lg-6 col-md-6 col-sm-12 text-col">
				<div>
					<h2 style='color: rgba(255, 135, 0, 0.74);'>Stylish Boys' Belts for Every Occasion</h2>
					<p>Welcome to Online Shopping, Boys' belts are more than just practical accessories; they add a touch of style and completeness to any outfit. Whether for a formal event, school uniform, or casual wear, a belt can elevate the look, providing both comfort and a polished appearance. Made from high-quality materials such as leather, woven fabric, or synthetic options, boys' belts are designed to be durable and adjustable for a perfect fit. Available in a variety of colors, patterns, and buckle styles, they can complement jeans, shorts, or dress pants, making them versatile additions to any young boy's wardrobe.</p>
						<a href="category.php" class="primary-btn mt-2">Shop Now</a>
				</div>
			</div>
			<!-- First Column: Image -->
			<div class="col-lg-6 col-md-6 col-sm-12 img-col">
				<img src="img/banner/beltscat1.jpeg" alt="Image" style="height: 90%; width: 90%" >
			</div>
		</div>
	</section>

	<!--================Contact Area =================-->

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
                                    window.location.href='about.php';
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

	<!--================Contact Success and Error message Area =================-->
	<div id="success" class="modal modal-message fade" role="dialog">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<i class="fa fa-close"></i>
					</button>
					<h2>Thank you</h2>
					<p>Your message is successfully sent...</p>
				</div>
			</div>
		</div>
	</div>

	<!-- Modals error -->

	<div id="error" class="modal modal-message fade" role="dialog">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<i class="fa fa-close"></i>
					</button>
					<h2>Sorry !</h2>
					<p> Something went wrong </p>
				</div>
			</div>
		</div>
	</div>
	<!--================End Contact Success and Error message Area =================-->


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