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
        echo "<script>window.location='mobile-app-developmen.php';</script>";
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
	<title>Tectignis - Mobile-App Development</title>
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
						<h2>Mobile App Development</h2>
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
							<h2>Features that <br>Help you build better.</h2>
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
								<h4 class="text-gradient">Healthcare</h4>
								<p>Telemedicine solutions Medication management Chronic disease management Remote health monitoring Medical issue visualization</p>
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
								<h4 class="text-gradient">Finance</h4>
								<p>Mobile payments Investment management Market data dashboards Mobile banking Smart financial advisors</p>
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
								<h4 class="text-gradient">Transportation</h4>
								<p>Smart warehousing Fleet management Dealership management Predictive maintenance Uber-like solutions</p>
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
								<h4 class="text-gradient">Education</h4>
								<p>Corporate training Certification management Course management Survey engines Courseware authoring</p>
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
								<h4 class="text-gradient">Telecom</h4>
								<p>Mobile customer support Order management Convergent billing Mobile reporting and analytics Infrastructure management</p>
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
								<h4 class="text-gradient">Retail</h4>
								<p>Commerce operations Warehouse management 3D virtual product models Mobile POS management Loyalty and promotions</p>
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
						<h2 class="text-gradient">Mobile App Development – The Never-Ending Process</h2>
						<p class="contetn">Our team of experts are always up-to-date with the latest trends and technologies to provide only secure and optimal solutions for your business needs.</p>
						<div class="row">
							<!-- Single -->
							<div class="col-sm-6 mb-30">
								<div class="info-box-s2">
									<div class="icon">
										<img src="assets/img/icon/1.webp" alt="icon">
									</div>
									<div class="content">
										<h4>Android Application Development</h4>
										<p>The Android market space has exploded with thousands of apps on the store. Here are select few from Intelegain.</p>
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
										<h4>iPhone Application Development</h4>
										<p>Check out some selected apps created that have gone a long way in expanding our customers’ reach over their competition.</p>
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
										<h4>Tablet Application Development</h4>
										<p>The Android market space has exploded with thousands of app on the store. Here are select few from Intelegain.</p>
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
										<h4>iPad Application Development</h4>
										<p>The iPad has been game changer for many businesses. So have been the apps developed by us for our clients.</p>
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
							<h2 class="text-gradient">Our Mobile App Development Process</h2>
							<p>mobile app development company in India that has a team of mobile app developers who are highly skilled in building mobile applications using cutting-edge technologies and tools.</p>
							<div class="applicant-list-full">
								<!-- Single -->
								<div class="item">
									<div class="icon">
										<i class="fas fa-code"></i>
									</div>
									<div class="content">
										<h4>App Development Consultation</h4>
										<p>Our experts will have a call with our client to analyze the entire app requirement and create a document to carry out the process.</p>
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
										<h4>Testing the App</h4>
										<p>Now the quality assurance engineers and testers will use different testing tools to test your application to ensure that the code meets the requirements.</p>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- Thumbnail -->
					<div class="col-lg-6 mb-30">
						<div class="applicant-img">
							<img src="assets/img/mobile-app-development.webp" alt="dashkit">
						</div>
					</div>
				</div>
				<div class="row mt-30">
					<!-- Thumbnail -->
					<div class="col-lg-6 mb-30 order-lg-first order-last">
						<div class="applicant-img applicant-img-2">
							<img src="assets/img/mobile-app-development-company-in-mumbai.webp" alt="dashkit">
						</div>
					</div>
					<!-- Content -->
					<div class="col-lg-6 align-self-center mb-30">
						<div class="applicant-content">
							<h2 class="text-gradient">Create an Advanced and Powerful Mobile App</h2>
							<p>We aren’t here for a short-term ride but a long-term work relationship with our clients.</p>
							<div class="applicant-list-full">
								<!-- Single -->
								<div class="item">
									<div class="icon">
										<i class="fas fa-code"></i>
									</div>
									<div class="content">
										<h4>Protection As per industry Standards</h4>
										<p>Depending on the type of business you are in, you may be required to adhere to government agencies’ specific compliance and security standards.</p>
									</div>
								</div>
								<!-- Single -->
								<div class="item">
									<div class="icon">
										<i class="fas fa-tools"></i>
									</div>
									<div class="content">
										<h4>The Coverage You Will Love</h4>
										<p>Excellent strategy for analyzing, adjusting and improvising business objective thereby helping you accomplish your business goals and achieve success. </p>
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