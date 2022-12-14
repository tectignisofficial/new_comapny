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
        echo "<script>window.location='portfolio-details.php';</script>";
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
	<title>Tectignis - Portfolio Datails</title>
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
    
    <!--offcanvas menu area end-->

	<!-- Start Breadcrumb Area -->
	<section class="breadcrumb-area" style="background-image: url('assets/img/IT- services.webp');">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="breadcrumb-content">
						<h2>Portfolio Details</h2>
						<ul>
							<li><a href="index.php">Home</a></li>
							<li>Portfolio Details</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End Breadcrumb Area -->
	<!-- Start Portfolio Details -->
	<section class="section-padding">
		<div class="container">
			<div class="row">
				<div class="col-lg-4 mb-30">
					<div class="portfolio-details-info">
						<h2>Project info</h2>
						<ul class="details">
							<li><b>Customer Name:</b>  <span>Steven John</span></li>
							<li><b>Category:</b> <span><a href="#">Design</a></span></li>
							<li><b>Size:</b> <span>600 Sq Ft</span></li>
							<li><b>Rooms:</b> <span>7</span></li>
							<li><b>Baths:</b> <span>3</span></li>
							<li><b>Date:</b> <span>23 October 2021</span></li>
							<li><b>Status:</b>  <span>In Process</span></li>
							<li><b>Demo Link:</b> <span>https://www.example.com</span></li>
							<li><b>Tags:</b> <span><a href="#">tml,css,php</a></span></li>
						</ul>
						<ul class="share">
							<li><strong>Share:</strong></li>
							<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
							<li><a href="#"><i class="fab fa-twitter"></i></a></li>
							<li><a href="#"><i class="fab fa-instagram"></i></a></li>
							<li><a href="#"><i class="fab fa-linkedin"></i></a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-8 order-lg-first">
					<div class="portfolio-details-content">
						<div class="thumbnail mb-20">
							<img class="w-100" src="assets/img/portfolio/01.webp" alt="img">
						</div>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepte ursint occaecat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepte ursint occaecat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
						<div class="row">
							<div class="col-md-6 mb-20">
								<img src="assets/img/portfolio/05.webp" alt="img">
							</div>
							<div class="col-md-6 mb-20">
								<img src="assets/img/portfolio/02.webp" alt="img">
							</div>
						</div>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepte ursint occaecat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepte ursint occaecat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepte ursint occaecat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepte ursint occaecat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End Portfolio Details -->

	<!-- Start Footer Area -->
	<?php include "include/footer.php";
	 ?>
	<!-- End Footer Area -->
	


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