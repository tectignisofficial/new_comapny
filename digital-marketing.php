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
        echo "<script>window.location='digital-marketing.php';</script>";
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
	<title>Tectignis - Digital Marketing</title>
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
						<h2>Digital Marketing</h2>
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
								<h4 class="text-gradient">E-Commerce SEO</h4>
								<p>Ecommerce SEO is the process of making an online store more visible on the search engine results pages. </p>
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
								<h4 class="text-gradient">Website Content</h4>
								<p>Work with a professional content writing company in India and experience the change that professionally written content can bring to your business</p>
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
								<h4 class="text-gradient">Facebook Advertising</h4>
								<p>Facebook advertising is an incredible advertising system that uses a giant social network coupled with advanced technology to serve ads.</p>
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
								<h4 class="text-gradient">Influencer Marketing</h4>
								<p>Influencer marketing is social media marketing that uses people or organizations with large social followings to promote products and services for another company.</p>
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
								<h4 class="text-gradient">Blog Content</h4>
								<p>Include your blog name and author-name
									Add your blog topic/primary keyword
									Add credentials to stand out
									Use psychological power words</p>
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
								<h4 class="text-gradient">Google Adwords</h4>
								<p>Google AdWords is the leading paid online advertising service through which advertisers display advertising copies, product listings, and video content within the Google ad network.</p>
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
						<h2 class="text-gradient">Why Should You Hire Tectignis IT Solution For Your Digital Marketing  Project?</h2>
						<p class="contetn">Our digital marketing team flaunts a great deal of experience and expertise in their field of marketing and are always on the hunt for new and innovative ideas to connect businesses to people across the globe.</p>
						<div class="row">
							<!-- Single -->
							<div class="col-sm-6 mb-30">
								<div class="info-box-s2">
									<div class="icon">
										<img src="assets/img/icon/1.webp" alt="icon">
									</div>
									<div class="content">
										<h4>SEO (Search Engine Optimization)</h4>
										<p>We have a perfectly planned SEO strategy that will fit into your business requirements. Optimizing your site based on our effective keyword research analogy will drive your site to the top of the search engine results.</p>
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
										<h4>SEM (Search Engine Marketing)</h4>
										<p>Finding out who exactly your audience is and targeting them is what forms the major idea of our SEM strategy. We create compelling advertisements that will attract, engage and convert your customer.</p>
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
										<h4>Social Media Marketing</h4>
										<p>Connecting your business to the world We possess a great deal of expertise in social media networking and this is evident from the fact that we have been in the news for some of our researches on the latest trends reported in the world of social media. </p>
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
										<h4>Conversion Rate Optimization</h4>
										<p>CRO is different from optimizing content as CRO is an art that combines years of experience with a unique approach and a combination of testing and data analysis to improve sales funnel and better ROI.</p>
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
							<h2 class="text-gradient">Our Best Digital Marketing Process</h2>
							<p>A Well Known Digital Marketing Company in India focused on Client’s Business Growth Only!</p>
							<div class="applicant-list-full">
								<!-- Single -->
								<div class="item">
									<div class="icon">
										<i class="fas fa-code"></i>
									</div>
									<div class="content">
										<h4>Content Marketing</h4>
										<p>We have an excellent team of content marketing experts, who are constantly on the search for creating great content marketing strategies.</p>
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
										<h4>Email Marketing</h4>
										<p>Email marketing is a business process that only an expert can execute successfully out of experience and skills.</p>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- Thumbnail -->
					<div class="col-lg-6 mb-30">
						<div class="applicant-img">
							<img src="assets/img/digitalmarketing1.webp" alt="dashkit">
						</div>
					</div>
				</div>
				<div class="row mt-30">
					<!-- Thumbnail -->
					<div class="col-lg-6 mb-30 order-lg-first order-last">
						<div class="applicant-img applicant-img-2">
							<img src="assets/img/digitalmarketing2.webp" alt="dashkit">
						</div>
					</div>
					<!-- Content -->
					<div class="col-lg-6 align-self-center mb-30">
						<div class="applicant-content">
							<h2 class="text-gradient">We offer the below Digital Marketing Services</h2>
							<p>Our digital marketing team flaunts a great deal of experience and expertise in their field of marketing  </p>
							<div class="applicant-list-full">
								<!-- Single -->
								<div class="item">
									<div class="icon">
										<i class="fas fa-code"></i>
									</div>
									<div class="content">
										<h4>Online Reputation Management</h4>
										<p>Reputation is a word that can be created only through trust. We create online reputation management campaigns that will generate trust through genuine methodologies that are tried-and-proven for most of the reputed business firms running successfully online.</p>
									</div>
								</div>
								<!-- Single -->
								<div class="item">
									<div class="icon">
										<i class="fas fa-tools"></i>
									</div>
									<div class="content">
										<h4>Analytics Consultation</h4>
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