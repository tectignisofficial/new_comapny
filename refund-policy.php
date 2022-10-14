<?php

    include('include/config.php');

if(isset($_POST['submit']))
{
    $name=$_POST['name'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $subject=$_POST['subject'];
    $message=$_POST['message'];

    $sql=mysqli_query($conn, "INSERT INTO `request_quote`(`name`,`email`,`phone`,`subject`,`message`) VALUES('$name','$email','$phone','$subject','$message')");

    if( $sql==1){
        echo "<script>window.location='refund-policy.php';</script>";
    }
    else{
        echo "<script> alert('Connection Failed !');</script>";

    }
}
?>

<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Tectignis - Refund Policy</title>
	<link rel="icon" href="assets/img/icon.webp" type="image/gif" sizes="16x16">
	<link rel="icon" href="assets/img/icon.webp" type="image/gif" sizes="18x18">
	<link rel="icon" href="assets/img/icon.webp" type="image/gif" sizes="20x20">

	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/bootstrap-icons.css">
	<link rel="stylesheet" href="assets/css/lightcase.css">
	<link rel="stylesheet" href="assets/css/fontawesome.all.min.css">
	<link rel="stylesheet" href="assets/css/owl.carousel.min.css">
	<link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
	<link rel="stylesheet" href="assets/css/animate.css">
	<link rel="stylesheet" href="assets/css/typed.css">
	<link rel="stylesheet" href="assets/css/magnific-popup.css">
	<link rel="stylesheet" href="assets/css/normalize.css">
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="assets/css/responsive.css">

</head>

<body>
	<!-- Preloader -->
	<div id="preloader">
		<div class="preloader">
			<span></span>
			<span></span>
		</div>
	</div>
	<!-- Start Header Area -->
	<?php include "include/header.php"; 
	?>
	<!-- End Header Area -->
	<!-- Start Mobile Menu Area -->
	<div class="mobile-menu-area">
		<!--offcanvas menu area start-->
		<div class="off_canvars_overlay"></div>
		<div class="offcanvas_menu">
			<div class="offcanvas_menu_wrapper">
				<div class="canvas_close">
					<a href="javascript:void(0)"><i class="fas fa-times"></i></a>
				</div>
				<div class="mobile-logo">
					<a href="index.php">
						<img src="assets/img/logo2.webp" alt="logo" />
					</a>
				</div>
				<div id="menu" class="text-left">
					<ul class="offcanvas_main_menu">
						<li>
							<a href="index.php">Home</a>
						</li>
						<li class="menu-item-has-children">
							<a href="about.php">About Us</a>
							<ul class="sub-menu">
								<li><a href="ceo-govind-bavkar.php">CEO</a></li>
								<li><a href="team.php">Teams</a></li>
							</ul>
						</li>
						<li class="menu-item-has-children">
							<a href="services.php">Services</a>
							<ul class="sub-menu">
								<li><a href="website-designing.php">Website Designing</a></li>
								<li><a href="ecommerce-website-design-development.php">Ecommerce Website</a></li>
								<li><a href="software-development.php">Software Development</a></li>
								<li><a href="mobile-app-development.php">Mobile App Development</a></li>
								<li><a href="digital-marketing.php">Digital Marketing</a></li>
								<li><a href="graphics-designing.php">Graphics Designing</a></li>
								<li><a href="hardware-networking.php">Hardware Networking</a></li>
								<li><a href="cctv-camera.php">CCTV Camera</a></li>
								<li><a href="it-consulting.php">IT Consulting</a></li>
							</ul>
						</li>
						<li>
							<a href="portfolio.php">Portfolio</a>
						</li>
						<li>
							<a href="blog.php">Blog</a>
						</li>
						<li><a href="contact.php">Contact Us</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<!--offcanvas menu area end-->

	<!-- Start Breadcrumb Area -->
	<section class="breadcrumb-area" style="background-image: url('assets/img/IT- services.webp');">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="breadcrumb-content">
						<h2>Our Refund Policy</h2>
						<ul>
							<li><a href="index.php">Home</a></li>
							<li>Refund Policy</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End Breadcrumb Area -->
	<!-- Start Services Area -->
	<div class="section-padding-2">
		<div class="container">
			<div class="row">
				<div class="col-12" style="text-align:center;">
					<h1>REFUND POLICY</h1>
					<ul style="list-style-type: disc">
						<li>NO REFUND</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<!-- End Services Area -->
	<!-- Start Subscribe Area -->
	<section class="subscribe-area" style="background-image: url('assets/img/sub.webp');">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="subscribe-content">
						<h2>Start your <br>30 day free trial.</h2>
						<p>Naff the little rotter have gutted mate James cuppa baking legged.</p>
						<form action="#">
							<input type="email" name="email" placeholder="Email Address">
							<button type="submit">Sign up free</button>
						</form>
						<ul>
							<li><i class="fas fa-check"></i> 30-day free tria</li>
							<li><i class="fas fa-check"></i> No credit card required</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End Subscribe Area -->
	<!-- Start Footer Area -->
	<?php include "include/footer.php";
	 ?>
	<!-- End Footer Area -->
	<div class="scroll-area">
		<i class="bi bi-arrow-up"></i>
	</div>


	<!-- Js File -->
	<script src="assets/js/modernizr.min.js"></script>
	<script src="assets/js/jquery-3.6.0.min.js"></script>
	<script src="assets/js/popper.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/owl.carousel.min.js"></script>
	<script src="assets/js/jquery.nav.min.js"></script>
	<script src="assets/js/jquery.magnific-popup.min.js"></script>
	<script src="assets/js/mixitup.min.js"></script>
	<script src="assets/js/wow.min.js"></script>
	<script src="assets/js/lightcase.js"></script>
	<script src="assets/js/jquery.waypoints.min.js"></script>
	<script src="assets/js/jquery.counterup.min.js"></script>
	<script src="assets/js/typed.js"></script>
	<script src="assets/js/script.js"></script>
	<script src="assets/js/mobile-menu.js"></script>
	<script src="assets/js/ajax-form.js"></script>
</body>

</html>