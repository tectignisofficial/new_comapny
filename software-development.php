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
        echo "<script>window.location='software-development.php';</script>";
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
                        
                        $sql=mysqli_query($conn,"select * from title where heading='Software'");
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
						<h2>Software Development</h2>
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
								<h4 class="text-gradient">Responsive Editing</h4>
								<p>Building beautiful responsive websites is easy. is responsive by nature and also gives you full control over how your website looks on mobile devices.</p>
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
								<h4 class="text-gradient">Save & Manage Your Designs</h4>
								<p>Save and manage unlimited custom designs. Easily re-use them to jump-start new pages.</p>
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
								<h4 class="text-gradient">Custom CSS Control</h4>
								<p>Developers can easily combine visual design controls with their own custom CSS. interface is simple yet not limiting.</p>
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
								<h4 class="text-gradient">Undo, Redo, & Revisions</h4>
								<p>works like a modern software application. Easily undo, redo and travel through your entire editing history. If you make a mistake, has your back.</p>
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
								<h4 class="text-gradient">Design Options Galore</h4>
								<p>Enjoy dozens of unique page elements and thousands of design options. gives you full design control over your website.</p>
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
								<h4 class="text-gradient">Inline Text Editing</h4>
								<p>Just click and start typing! Editing your page has never been this easy. Draft pages on the front end and see the results instantly as you type.</p>
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
						<h2 class="text-gradient">We offer the following customized application development services</h2>
						<p class="contetn">Are you struggling to keep up with your business processes and address unique and complex requirements? The technology is advancing, and businesses that resist the change will shortly lag behind</p>
						<div class="row">
							<!-- Single -->
							<div class="col-sm-6 mb-30">
								<div class="info-box-s2">
									<div class="icon">
										<img src="assets/img/icon/1.webp" alt="icon">
									</div>
									<div class="content">
										<h4>Customized Application Development</h4>
										<p>We deliver a broad range of web, mobile, and desktop software solutions that help you facilitate B2B & B2B interactions and internal operations.</p>
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
										<h4>Software Development Requirements</h4>
										<p>Integration with other tools, such as social media, ERP, CRM, API development Continuous, 24/7 support We serve all the major industries, including Manufacturing, Healthcare, Retail, Telecommunications, Technology, and Banking & financial services.</p>
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
										<h4>Customer Relationship Management (CRM)</h4>
										<p>With business complexities increasing, every business needs a customized, fully-featured CRM software that helps them cover customer touchpoints and meet business requirements. At CreativeWebo, we design, develop, and implement a fully-functional CRM solution that is tailored specifically for your business objectives. </p>
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
										<h4>Enterprise Content Management (ECM)</h4>
										<p>As a business grows, its need to store, organize, access, and utilize documents surges. And by the increase in requirements, we are talking about thousands of Word documents, PDFs, images, and more per week.</p>
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
							<h2 class="text-gradient">Software Development Service In Navi Mumbai</h2>
							<p>When it comes to the custom web and software development service then we are the best software and application development company in Navi mumbai.</p>
							<div class="applicant-list-full">
								<!-- Single -->
								<div class="item">
									<div class="icon">
										<i class="fas fa-code"></i>
									</div>
									<div class="content">
										<h4>We have below products:</h4>
										<p>CRM (Customer Relationship Management), ERP (Enterprises Resource Planning),Asset Management, Billing and Inventory Management, Project Management</p>
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
										<h4>Our software development service includes:</h4>
										<p>Custom web application development, Mobile application development, Ecommerce portal development, Payment gateway integration, API Integrations</p>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- Thumbnail -->
					<div class="col-lg-6 mb-30">
						<div class="applicant-img">
							<img src="assets/img/softwaredevelopment.webp" alt="dashkit">
						</div>
					</div>
				</div>
				<div class="row mt-30">
					<!-- Thumbnail -->
					<div class="col-lg-6 mb-30 order-lg-first order-last">
						<div class="applicant-img applicant-img-2">
							<img src="assets/img/softwaredevelopment1.webp" alt="dashkit">
						</div>
					</div>
					<!-- Content -->
					<div class="col-lg-6 align-self-center mb-30">
						<div class="applicant-content">
							<h2 class="text-gradient">here are some of the elements of our ECM solutions.</h2>
							<p>CreativeWebo implements a functional ECM solution to your company to ensure you do business better.</p>
							<div class="applicant-list-full">
								<!-- Single -->
								<div class="item">
									<div class="icon">
										<i class="fas fa-code"></i>
									</div>
									<div class="content">
										<h4>Elements of Our ECM Solutions</h4>
										<p>Easy administration and business alignment, Social media integration and multi-platform capabilities, Powerful publishing tools with robust content templates and built-in SEO tools, Enhanced ssecurity with tiered permissions, Exemplary support and maintenance, Powerful reporting and analytics features</p>
									</div>
								</div>
								<!-- Single -->
								<div class="item">
									<div class="icon">
										<i class="fas fa-tools"></i>
									</div>
									<div class="content">
										<h4>Enterprise mobility</h4>
										<p>With the ever-changing technology and business environment, enterprise mobility is the need of the hour for every major organization. It helps you establish global connections and deploy the right skill and expertise to the desired locations.</p>
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