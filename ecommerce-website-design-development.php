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
        echo "<script>window.location='ecommerce-website-design-development.php';</script>";
    }
    else{
        echo "<script> alert('Connection Failed !');</script>";

    }
}
?>

<!DOCTYPE html>
<html  class="no-js" lang="en">
<head>
<?php 
                        
                        $sql=mysqli_query($conn,"select * from title where heading='Ecommerce'");
                         $arr=mysqli_fetch_array($sql)
                        ?> 
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="<?php echo $arr['description'];?>">
	<meta name="keywords" content="<?php echo $arr['keyword'];?> ">
	<title><?php echo $arr['title'];?> </title>
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
	<style>
		.info-box-s1 h4{
			text-align: center;
		}
	</style>

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
						<h2>Ecommerce Website</h2>
						<ul>
							<li><a href="index.php">Home</a></li>
							<li>Services Details</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End Breadcrumb Area -->
		<!-- Start Features That Area -->
		<section class="section-padding-2">
			<div class="container">
				<!-- Section Headding -->
				<div class="row mb-40">
					<div class="col-lg-8 offset-lg-2 text-center">
						<div class="section-headding">
							<h2>Features that <br>eCommerce Website Shop Page Features.</h2>
							<p>The powerful and flexible theme for all kinds of businesses</p>
						</div>
					</div>
				</div>
				<div class="row">
					<!-- Single -->
					<div class="col-lg-4 col-sm-6 mb-30">
						<div class="info-box-s1 h-100">
							<div class="icon">
								<img src="assets/img/icon/cod.webp" alt="code">
							</div>
							<div class="content">
								<h4 class="text-gradient">Mobile Optimized</h4>
								<p>Ensure visitors who access your site from mobile devices have an experience optimized for the device.</p>
							</div>
						</div>
					</div>
					<!-- Single -->
					<div class="col-lg-4 col-sm-6 mb-30">
						<div class="info-box-s1 h-100">
							<div class="icon">
								<img src="assets/img/icon/meas.webp" alt="mase">
							</div>
							<div class="content">
								<h4 class="text-gradient">E-commerce Built-In</h4>
								<p>Whether you're selling a single product or a hundred, we make it easy.</p>
							</div>
						</div>
					</div>
					<!-- Single -->
					<div class="col-lg-4 col-sm-6 mb-30">
						<div class="info-box-s1 h-100">
							<div class="icon">
								<img src="assets/img/icon/do.webp" alt="doc">
							</div>
							<div class="content">
								<h4 class="text-gradient">Receive Online Payments</h4>
								<p>Configure your payment gateway in one click & start receiving payments for any service that you offer.</p>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<!-- Single -->
					<div class="col-lg-4 col-sm-6 mb-30">
						<div class="info-box-s1 h-100">
							<div class="icon">
								<img src="assets/img/icon/cod.webp" alt="code">
							</div>
							<div class="content">
								<h4 class="text-gradient">Customized Enquiry Form</h4>
								<p>Create new forms with custom fields to gather information about your prospects in detail.</p>
							</div>
						</div>
					</div>
					<!-- Single -->
					<div class="col-lg-4 col-sm-6 mb-30">
						<div class="info-box-s1 h-100">
							<div class="icon">
								<img src="assets/img/icon/meas.webp" alt="mase">
							</div>
							<div class="content">
								<h4 class="text-gradient">Online Booking & Scheduling</h4>
								<p>Schedule appointments and receive online bookings so that you can focus on giving quality service.</p>
							</div>
						</div>
					</div>
					<!-- Single -->
					<div class="col-lg-4 col-sm-6 mb-30">
						<div class="info-box-s1 h-100">
							<div class="icon">
								<img src="assets/img/icon/do.webp" alt="doc">
							</div>
							<div class="content">
								<h4 class="text-gradient">SEO Ready Website</h4>
								<p>We follow the best practices to help your website rank higher across major search engines.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Features That Area -->
	<!-- Start analytics Area -->
	<section class="pb-100">
		<div class="container">
			<div class="row">
				<!-- Content -->
				<div class="col-lg-12 align-self-center">
					<div class="analytics-toll-content">
						<h2 class="text-gradient">Our Experience as eCommerce Website Designer & Developers </h2>
						<p class="contetn">Our digital marketing team flaunts a great deal of experience and expertise in their field of marketing and are always on the hunt for new and innovative ideas to connect businesses to people across the globe.</p>
						<div class="row">
							<!-- Single -->
							<div class="col-sm-6 mb-30">
								<div class="info-box-s2">
									<div class="icon">
										<img src="assets/img/icon/1.webp" alt="icon">
									</div>
									<div class="content">
										<h4>Multi-Vendor eCommerce Marketplace Websites</h4>
										<p>Our Multi-Vendor eCommerce websites are feature-packed which makes it the perfect choice for a successful marketplace.</p>
									</div>
								</div>
							</div>
							<!-- Single -->
							<div class="col-sm-6 mb-30">
								<div class="info-box-s2">
									<div class="icon">
										<img src="assets/img/icon/2.webp" alt="icon">
									</div>
									<div class="content">
										<h4>Customized Products and Dynamic Pricing.</h4>
										<p>Our website development team has successfully designed eCommerce websites that make it flexible for website owners to sell products with flexible pricing parameters in eCommerce websites. </p>
									</div>
								</div>
							</div>
							<!-- Single -->
							<div class="col-sm-6 mb-30">
								<div class="info-box-s2">
									<div class="icon">
										<img src="assets/img/icon/2.webp" alt="icon">
									</div>
									<div class="content">
										<h4>Multinational eCommerce Websites</h4>
										<p>We have developed eCommerce websites that are designed in a way that sellers can sell across the world, our website developers have expertise in integrating various international and domestic shipping & payment methods with eCommerce websites selling products and services in multiple countries.</p>
									</div>
								</div>
							</div>
							<!-- Single -->
							<div class="col-sm-6 mb-30">
								<div class="info-box-s2">
									<div class="icon">
										<img src="assets/img/icon/2.webp" alt="icon">
									</div>
									<div class="content">
										<h4>Subscription Based eCommerce Websites</h4>
										<p>We have developed multiple subscription-based websites for content creators who can now sell their own content online at a recurring monthly payment.</p>
									</div>
								</div>
							</div>
						</div>
						<a class="button-1" href="#">Discover More</a>
					</div>
				</div>
				<!-- Image -->
			</div>
		</div>
	</section>
	<!-- End analytics Area -->

		<!-- Start Applicant Area -->
		<section class="section-padding-2">
			<div class="container">
				<div class="row mb-70">
					<!-- Content -->
					<div class="col-lg-6 align-self-center mb-30">
						<div class="applicant-content">
							<h2 class="text-gradient">Responsive ecommerce Website</h2>
							<p>Our web developers understand that majority of the users these days access websites on mobile or tabs.</p>
							<div class="applicant-list-full">
								<!-- Single -->
								<div class="item">
									<div class="icon">
										<i class="fas fa-code"></i>
									</div>
									<div class="content">
										<h4>Mobile Responsive</h4>
										<p>website is designed in a way that they are responsive to mobile and make the user’s shopping experience easy.</p>
									</div>
								</div>
								<!-- Single -->
								<!-- <div class="item">
									<div class="icon">
										<i class="fas fa-tools"></i>
									</div>
									<div class="content">
										<h4>App Development & Testing</h4>
										<p>Once approved, Team will set in motion the proposed project and coordinate with our Analysis, and development team to start the project.</p>
									</div>
								</div> -->
								<div class="item">
									<div class="icon">
										<i class="fas fa-tools"></i>
									</div>
									<div class="content">
										<h4>Browser & Device Responsive</h4>
										<p>Our website designing team audits the website on multiple platforms keeping in mind that the websites are also compatible with various screen sizes and different browsers across the world. </p>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- Thumbnail -->
					<div class="col-lg-6 mb-30">
						<div class="applicant-img">
							<img src="assets/img/ecommerce-development-in-mumbai.webp" alt="dashkit">
						</div>
					</div>
				</div>
				<div class="row mt-30">
					<!-- Thumbnail -->
					<div class="col-lg-6 mb-30 order-lg-first order-last">
						<div class="applicant-img applicant-img-2">
							<img src="assets/img/ECOMMERCE.webp" alt="dashkit">
						</div>
					</div>
					<!-- Content -->
					<div class="col-lg-6 align-self-center mb-30">
						<div class="applicant-content">
							<h2 class="text-gradient">Key Features of ecommerce Website
                                </h2>
							<p>Our digital marketing team flaunts a great deal of experience and expertise in their field of marketing  </p>
							<div class="applicant-list-full">
								<!-- Single -->
								<div class="item">
									<div class="icon">
										<i class="fas fa-code"></i>
									</div>
									<div class="content">
										<h4>Secure ECommerce Websites</h4>
										<p>very important feature for any eCommerce website, apart from its security benefits any website.</p>
									</div>
								</div>
								<!-- Single -->
								<div class="item">
									<div class="icon">
										<i class="fas fa-tools"></i>
									</div>
									<div class="content">
										<h4>Easy to Manage Store</h4>
										<p>It is very crucial for eCommerce website owners to manage orders, payments, taxes, and inventory easily with live dashboards that give you complete insight.</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Applicant Area -->
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