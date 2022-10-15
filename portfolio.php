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
        echo "<script>window.location='portfolio.php';</script>";
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
	<title>Tectignis - Portfolio</title>
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
						<h2>Our Portfolio</h2>
						<ul>
							<li><a href="index.php">Home</a></li>
							<li>Portfolio</li>
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
				<div class="portfolio-category mb-40 text-center">
					<ul>
						<li data-filter="all">All</li>
						<li data-filter=".marketing">Marketing</li>
						<li data-filter=".digital">Digital</li>
						<li data-filter=".design">Design</li>
					</ul>
				</div>
				<div class="row portfolio-full portF">
					<!-- Single -->
					<div class="col-lg-4 col-md-6 mb-30 mix marketing">
						<div class="portfolio-item">
							<div class="thumbnail">
								<img src="assets/img/portfolio/01.webp" alt="Portfolio">
							</div>
							<div class="portfolio-overly">
								<div class="pv_full">
									<a data-rel="lightcase:myCollection:portfolio" href="assets/img/portfolio/01.webp"><i class="fas fa-search"></i></a>
									<a href="porfolio-details.php"><i class="fas fa-eye"></i></a>
								</div>
							</div>
						</div>
					</div>
					<!-- Single -->
					<div class="col-lg-4 col-md-6 mb-30 mix digital">
						<div class="portfolio-item">
							<div class="thumbnail">
								<img src="assets/img/portfolio/02.webp" alt="Portfolio">
							</div>
							<div class="portfolio-overly">
								<div class="pv_full">
									<a data-rel="lightcase:myCollection:portfolio" href="assets/img/portfolio/02.webp"><i class="fas fa-search"></i></a>
									<a href="porfolio-details.php"><i class="fas fa-eye"></i></a>
								</div>
							</div>
						</div>
					</div>
					<!-- Single -->
					<div class="col-lg-4 col-md-6 mb-30 mix marketing">
						<div class="portfolio-item">
							<div class="thumbnail">
								<img src="assets/img/portfolio/03.webp" alt="Portfolio">
							</div>
							<div class="portfolio-overly">
								<div class="pv_full">
									<a data-rel="lightcase:myCollection:portfolio" href="assets/img/portfolio/03.webp"><i class="fas fa-search"></i></a>
									<a href="porfolio-details.php"><i class="fas fa-eye"></i></a>
								</div>
							</div>
						</div>
					</div>
					<!-- Single -->
					<div class="col-lg-4 col-md-6 mb-30 mix digital design">
						<div class="portfolio-item">
							<div class="thumbnail">
								<img src="assets/img/portfolio/04.webp" alt="Portfolio">
							</div>
							<div class="portfolio-overly">
								<div class="pv_full">
									<a data-rel="lightcase:myCollection:portfolio" href="assets/img/portfolio/04.webp"><i class="fas fa-search"></i></a>
									<a href="porfolio-details.php"><i class="fas fa-eye"></i></a>
								</div>
							</div>
						</div>
					</div>
					<!-- Single -->
					<div class="col-lg-4 col-md-6 mb-30 mix marketing">
						<div class="portfolio-item">
							<div class="thumbnail">
								<img src="assets/img/portfolio/05.webp" alt="Portfolio">
							</div>
							<div class="portfolio-overly">
								<div class="pv_full">
									<a data-rel="lightcase:myCollection:portfolio" href="assets/img/portfolio/05.webp"><i class="fas fa-search"></i></a>
									<a href="porfolio-details.php"><i class="fas fa-eye"></i></a>
								</div>
							</div>
						</div>
					</div>
					<!-- Single -->
					<div class="col-lg-4 col-md-6 mb-30 mix design">
						<div class="portfolio-item">
							<div class="thumbnail">
								<img src="assets/img/portfolio/06.webp" alt="Portfolio">
							</div>
							<div class="portfolio-overly">
								<div class="pv_full">
									<a data-rel="lightcase:myCollection:portfolio" href="assets/img/portfolio/06.webp"><i class="fas fa-search"></i></a>
									<a href="porfolio-details.php"><i class="fas fa-eye"></i></a>
								</div>
							</div>
						</div>
					</div>
					<!-- Single -->
					<div class="col-lg-4 col-md-6 mb-30 mix marketing">
						<div class="portfolio-item">
							<div class="thumbnail">
								<img src="assets/img/portfolio/07.webp" alt="Portfolio">
							</div>
							<div class="portfolio-overly">
								<div class="pv_full">
									<a data-rel="lightcase:myCollection:portfolio" href="assets/img/portfolio/07.webp"><i class="fas fa-search"></i></a>
									<a href="porfolio-details.php"><i class="fas fa-eye"></i></a>
								</div>
							</div>
						</div>
					</div>
					<!-- Single -->
					<div class="col-lg-4 col-md-6 mb-30 mix digital">
						<div class="portfolio-item">
							<div class="thumbnail">
								<img src="assets/img/portfolio/08.webp" alt="Portfolio">
							</div>
							<div class="portfolio-overly">
								<div class="pv_full">
									<a data-rel="lightcase:myCollection:portfolio" href="assets/img/portfolio/08.webp"><i class="fas fa-search"></i></a>
									<a href="porfolio-details.php"><i class="fas fa-eye"></i></a>
								</div>
							</div>
						</div>
					</div>
					<!-- Single -->
					<div class="col-lg-4 col-md-6 mb-30 mix design">
						<div class="portfolio-item">
							<div class="thumbnail">
								<img src="assets/img/portfolio/09.webp" alt="Portfolio">
							</div>
							<div class="portfolio-overly">
								<div class="pv_full">
									<a data-rel="lightcase:myCollection:portfolio" href="assets/img/portfolio/09.webp"><i class="fas fa-search"></i></a>
									<a href="porfolio-details.php"><i class="fas fa-eye"></i></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12 mb-20 text-center">
					<a class="button-1" href="#">Load More <i class="fas fa-spinner fa-spin"></i></a>
				</div>
			</div>
		</div>
	</div>
	<!-- End Services Area -->
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