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
        echo "<script>window.location='pricing.php';</script>";
    }
    else{
        echo "<script> alert('Connection Failed !');</script>";

    }
}
?>

<!DOCTYPE html>
<html  class="no-js" lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Tectignis - Pricing</title>
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
						<h2>Our Pricing Plan</h2>
						<ul>
							<li><a href="index.php">Home</a></li>
							<li>Pricing Plan</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End Breadcrumb Area -->
	<!-- Start Pricing Plan Area -->
	<section class="section-padding-2">
		<div class="container">
			<!-- Section Headding -->
			<div class="row mb-40">
				<div class="col-lg-8 offset-lg-2 text-center">
					<div class="section-headding">
						<h2>Our Awesome <br>Pricing Packages</h2>
						<p>The powerful and flexible theme for all kinds of businesses</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12">
					<div class="tab-content mt-40" id="myTabPricingContent">
					  	<div class="tab-pane fade show active" id="monthly" role="tabpanel" aria-labelledby="monthly-tab">
					  		<div class="row">
					  			<!-- Single -->
					  			<div class="col-lg-4 col-md-6 mb-30">
					  				<div class="pricing-item">
					  					<div class="pricing-header">
					  						<h4>Startup</h4>
					  						<h2>₹8,000</h2>
					  					</div>
					  					<div class="pricing-content">
										  <ul>
												<li>Upto 5 Pages</li>
												<li>Logo</li>
												<li>Slider</li>
												<li>Dynamic Website</li>
												<li>Domain-1st Year Free</li>
												<li>Hosting Free For 1st Year</li>
												<li>1 Email – 500 MB Quota</li>
												<li>1 Contact Form</li>
												<li>Free SSL</li>
												<li>Testimonials</li>
												<li>Gallery Section</li>
												<li>Chat Feature</li>
												<li>200 Rs – Content/Page</li>
												<li>Social Profile Link</li>
												<li>Facebook Page Creation</li>
												<li>Click to Call/Email</li>
												<li>Mobile Responsive</li>
												<li>Login Details Will Be Given</li>
												<li>Delivery in 3 Days</li>
												<li>Renewal – 2000 Rs + Domain Price Plus GST</li>
												<li>Support – 500 Rs/Hr</li>
											</ul>
					  					</div>
					  					<div class="pricng-btn">
										  <form><script src="https://checkout.razorpay.com/v1/payment-button.js" data-payment_button_id="pl_KTxc59746oOvfw" async> </script> </form>
					  					</div>
					  				</div>
					  			</div>
					  			<!-- Single -->
					  			<div class="col-lg-4 col-md-6 mb-30">
					  				<div class="pricing-item active">
					  					<div class="pricing-header">
					  						<h4>Small Business</h4>
					  						<h2>₹15,000</h2>
					  						<div class="badge">Popular</div>
					  					</div>
					  					<div class="pricing-content">
										  <ul>
												<li>10 Pages</li>
												<li>Logo</li>
												<li>Slider</li>
												<li>Dynamic Website</li>
												<li>Domain-1st Year Free</li>
												<li>Hosting Free For 1st Year</li>
												<li>2 Email – 500 MB Quota Each</li>
												<li>1 Contact Form</li>
												<li>Free SSL</li>
												<li>Testimonials</li>
												<li>Gallery Section</li>
												<li>Chat Feature</li>
												<li>300 Rs/Extra Page</li>
												<li>200 Rs – Content/Page</li>
												<li>Social Profile Link</li>
												<li>Facebook Page Creation</li>
												<li>Click to Call/Email</li>
												<li>Mobile Responsive</li>
												<li>Login Details Will Be Given</li>
												<li>Delivery in 7 Days</li>
												<li>Renewal – 3000 Rs + Domain Price Plus GST</li>
												<li>Free 4 Hours Support</li>
												<li>Support – 500 Rs/Hr</li>
											</ul>
					  					</div>
					  					<div class="pricng-btn">
										  <form><script src="https://checkout.razorpay.com/v1/payment-button.js" data-payment_button_id="pl_KTxc59746oOvfw" async> </script> </form>
					  					</div>
					  				</div>
					  			</div>
					  			<!-- Single -->
					  			<div class="col-lg-4 col-md-6 mb-30">
					  				<div class="pricing-item">
					  					<div class="pricing-header">
					  						<h4>ECommerce</h4>
					  						<h2>₹25,000</h2>
					  					</div>
					  					<div class="pricing-content">
										  <ul>
												<li> Up to 50 Products</li>
												<li>Logo</li>
												<li>Contact Form – 3</li>
												<li>Content – Free</li>
												<li>300 Rs/Extra Page</li>
												<li>WhatsApp Chat Integration</li>
												<li>Social Media Profiles Integration</li>
												<li>Social Profile Link</li>
												<li>WordPress Login Details Will be Given</li>
												<li>Payment Gateway</li>
												<li>Extra Support – 500 Rs/Hour</li>
												<li>Revisions – 2</li>
												<li>Call/Email/Chat Support</li>
											</ul>
					  					</div>
					  					<div class="pricng-btn">
										  <form><script src="https://checkout.razorpay.com/v1/payment-button.js" data-payment_button_id="pl_KTxc59746oOvfw" async> </script> </form>
					  					</div>
					  				</div>
					  			</div>
					  		</div>
					  	</div>
					  	<div class="tab-pane fade" id="yearly" role="tabpanel" aria-labelledby="yearly-tab">
					  		<div class="row">
					  			<!-- Single -->
					  			<div class="col-lg-4 col-md-6 mb-30">
					  				<div class="pricing-item">
					  					<div class="pricing-header">
					  						<h4>BASIC</h4>
					  						<h2>$119.89</h2>
					  					</div>
					  					<div class="pricing-content">
					  						<ul>
					  							<li>Basic Listing Submission</li>
					  							<li>One Listing</li>
					  							<li>30 Days Availability</li>
					  							<li>Limited Support</li>
					  							<li>Accept Reviews</li>
					  							<li>Edit Your Listing</li>
					  						</ul>
					  					</div>
					  					<div class="pricng-btn">
					  						<a class="button-1" href="#">Get Started</a>
					  					</div>
					  				</div>
					  			</div>
					  			<!-- Single -->
					  			<div class="col-lg-4 col-md-6 mb-30">
					  				<div class="pricing-item active">
					  					<div class="pricing-header">
					  						<h4>STANDART</h4>
					  						<h2>$199.89</h2>
					  						<div class="badge">Popular</div>
					  					</div>
					  					<div class="pricing-content">
					  						<ul>
					  							<li>Basic Listing Submission</li>
					  							<li>One Listing</li>
					  							<li>30 Days Availability</li>
					  							<li>Limited Support</li>
					  							<li>Accept Reviews</li>
					  							<li>Edit Your Listing</li>
					  						</ul>
					  					</div>
					  					<div class="pricng-btn">
					  						<a class="button-1" href="#">Get Started</a>
					  					</div>
					  				</div>
					  			</div>
					  			<!-- Single -->
					  			<div class="col-lg-4 col-md-6 mb-30">
					  				<div class="pricing-item">
					  					<div class="pricing-header">
					  						<h4>Premium</h4>
					  						<h2>$219.89</h2>
					  					</div>
					  					<div class="pricing-content">
					  						<ul>
					  							<li>Basic Listing Submission</li>
					  							<li>One Listing</li>
					  							<li>30 Days Availability</li>
					  							<li>Limited Support</li>
					  							<li>Accept Reviews</li>
					  							<li>Edit Your Listing</li>
					  						</ul>
					  					</div>
					  					<div class="pricng-btn">
					  						<a class="button-1" href="#">Get Started</a>
					  					</div>
					  				</div>
					  			</div>
					  		</div>
					  	</div>
					</div>

				</div>
			</div>
		</div>
	</section>
	<!-- End TPricing Plan Area -->
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
	<script>
		$(document).ready(function () {
			$(window).on('scroll', function () {
				var a = $(window).scrollTop();
				if (a > 400) {
					$('.request-area').slideDown(300);
				} else {
					$('.request-area').slideUp(200);
				}
			})
		}
        );

	</script> 
</body>
</html>