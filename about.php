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
        echo "<script>window.location='about.php';</script>";
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
                        
                        $sql=mysqli_query($conn,"select * from title where heading='About us'");
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
	<?php include ("include/header.php"); 
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
						<h2>About Us</h2>
						<ul>
							<li><a href="index.php">Home</a></li>
							<li>About Us</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End Breadcrumb Area -->
	<!-- Start About Area -->
	<section class="section-padding">
		<div class="container">
			<div class="row">
				<div class="col-lg-7 align-self-center">
					<div class="row">
						<div class="col-sm-6 mb-20">
							<div class="about_item_box">
								<div class="icon text-gradient">
									<i class="fas fa-fighter-jet"></i>
								</div>
								<h4>Fully integrated</h4>
								<p>We get insulted by others, lose trust for those We get back freezes</p>
							</div>
						</div>
						<div class="col-sm-6 mb-20">
							<div class="about_item_box">
								<div class="icon text-gradient">
									<i class="fas fa-money-check-alt"></i>
								</div>
								<h4>Payments functionality</h4>
								<p>We get insulted by others, lose trust for those We get back freezes</p>
							</div>
						</div>
						<div class="col-sm-6 mb-20">
							<div class="about_item_box">
								<div class="icon text-gradient">
									<i class="fas fa-box"></i>
								</div>
								<h4>Prebuilt components</h4>
								<p>We get insulted by others, lose trust for those We get back freezes</p>
							</div>
						</div>
						<div class="col-sm-6 mb-20">
							<div class="about_item_box">
								<div class="icon text-gradient">
									<i class="fas fa-chalkboard-teacher"></i>
								</div>
								<h4>Improved platform</h4>
								<p>We get insulted by others, lose trust for those We get back freezes</p>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-4 offset-lg-1">
					<div class="about-img-ab">
						<div class="thumb">
							<img src="assets/img/tectignis-about-us.webp" alt="about">
						</div>
						<div class="con">
							<h4>Get insights on Search </h4>
							<p> Website visitors today demand a frictionless user expericence ??? especially when using search. Because of the hight standards. </p>
							<p> Only a quid victoria spong cack matie boy bum bag burke a blinding shot James bond pear. </p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End About Area -->
	<!-- Start Counter Area -->
	<section class="counter2-area">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2">
					<div class="row">
						<!-- Single -->
						<div class="col-lg-4 col-sm-6 mb-30">
							<div class="counter2-item">
								<div class="title">
                                    <h2 class="counter text-gradient">255</h2>
                                    <h3 class="text-gradient">K</h3>
                                </div>
                                <p>Customers</p>
							</div>
						</div>
						<!-- Single -->
						<div class="col-lg-4 col-sm-6 mb-30">
							<div class="counter2-item">
								<div class="title">
                                    <h2 class="counter text-gradient">51</h2>
                                    <h3 class="text-gradient">K</h3>
                                </div>
                                <p>Downloads</p>
							</div>
						</div>
						<!-- Single -->
						<div class="col-lg-4 col-sm-6 mb-30">
							<div class="counter2-item">
								<div class="title">
                                    <h2 class="counter text-gradient">99</h2>
                                    <h3 class="text-gradient">%</h3>
                                </div>
                                <p>Happy users</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End Counter Area -->
	<!-- Start Team Member Area -->
	<section class="section-padding-2 section-bg">
		<div class="container">
			<div class="row mb-40">
				<div class="col-lg-8 offset-lg-2 text-center">
					<div class="section-headding">
						<h2>Our Team Members</h2>
						<p>The powerful and flexible theme for all kinds of businesses</p>
					</div>
				</div>
			</div>
			<div class="row">
				<!-- Single -->
				<div class="col-lg-4 col-md-6 mb-30">
					<div class="team-item">
						<div class="thumb">
							<img src="assets/img/Vedantnaidu1.webp" alt="team">
						</div>
						<div class="content">
							<div class="left">
								<h4>Vedant Naidu</h4>
								<p>Web Developer</p>
							</div>
						</div>
					</div>
				</div>
				<!-- Single -->
				<div class="col-lg-4 col-md-6 mb-30">
					<div class="team-item">
						<div class="thumb">
							<img src="assets/img/Divyanikeshari.webp" alt="team">
						</div>
						<div class="content">
							<div class="left">
							<h4>Divyani Keshari</h4>
							<p>Web Developer</p>
							</div>
						</div>
					</div>
				</div>
				<!-- Single -->
				<div class="col-lg-4 col-md-6 mb-30">
					<div class="team-item">
						<div class="thumb">
							<img src="assets/img/Maheshniwate.webp" alt="team">
						</div>
						<div class="content">
							<div class="left">
								<h4>Mahesh Niwate</h4>
								<p>Web Developer</p>
							</div>
						</div>
					</div>
				</div>
				<!-- Single -->
				<div class="col-lg-4 col-md-6 mb-30">
					<div class="team-item">
						<div class="thumb">
							<img src="assets/img/Aniketnangare.webp" alt="team">
						</div>
						<div class="content">
							<div class="left">
								<h4>Aniket Nangare</h4>
								<p>Web Developer</p>
							</div>
						</div>
					</div>
				</div>
				<!-- Single -->
				<div class="col-lg-4 col-md-6 mb-30">
					<div class="team-item">
						<div class="thumb">
							<img src="assets/img/Sarveshhiwale.webp" alt="team">
						</div>
						<div class="content">
							<div class="left">
								<h4>Sarvesh Hiwale</h4>
								<p>Web Developer</p>
							</div>
						</div>
					</div>
				</div>
				<!-- Single -->
				<div class="col-lg-4 col-md-6 mb-30">
					<div class="team-item">
						<div class="thumb">
							<img src="assets/img/Monikagore.webp" alt="team">
						</div>
						<div class="content">
							<div class="left">
								<h4>Monika Gore</h4>
								<p>Web Developer</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End Team Member Area -->
	<!-- Start Testimonial Area -->
	<section class="section-padding">
		<div class="container">
			<!-- Section Headding -->
			<div class="row mb-40">
				<div class="col-lg-8 offset-lg-2 text-center">
					<div class="section-headding">
						<h2>Our Testimonial</h2>
						<p>The powerful and flexible theme for all kinds of businesses</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12">
					<div class="testimonial-full owl-carousel">
						<!-- Single -->
						<div class="testimonial-item">
							<div class="testimonial-single-header">
								<div class="thumbnail">
									<img src="assets/img/team/3.webp" alt="testimonial">
								</div>
								<div class="testimonial-title">
									<h4>Rachel Adams</h4>
									<p>Regular Clients</p>
									<div class="ratting-tes">
										<span><i class="fas fa-star"></i></span>
										<span><i class="fas fa-star"></i></span>
										<span><i class="fas fa-star"></i></span>
										<span><i class="fas fa-star"></i></span>
										<span><i class="fas fa-star"></i></span>
									</div>
								</div>
							</div>
							<div class="testimonial-single-footer">
								<p>We are a team of professional and enthusiastic people, who like what they do and are always in the process of growing and improving their skills.</p>
							</div>
						</div>
						<!-- Single -->
						<div class="testimonial-item">
							<div class="testimonial-single-header">
								<div class="thumbnail">
									<img src="assets/img/team/2.webp" alt="testimonial">
								</div>
								<div class="testimonial-title">
									<h4>Rachel Adams</h4>
									<p>Regular Clients</p>
									<div class="ratting-tes">
										<span><i class="fas fa-star"></i></span>
										<span><i class="fas fa-star"></i></span>
										<span><i class="fas fa-star"></i></span>
										<span><i class="fas fa-star"></i></span>
										<span><i class="fas fa-star"></i></span>
									</div>
								</div>
							</div>
							<div class="testimonial-single-footer">
								<p>We are a team of professional and enthusiastic people, who like what they do and are always in the process of growing and improving their skills.</p>
							</div>
						</div>
						<!-- Single -->
						<div class="testimonial-item">
							<div class="testimonial-single-header">
								<div class="thumbnail">
									<img src="assets/img/team/1.webp" alt="testimonial">
								</div>
								<div class="testimonial-title">
									<h4>Rachel Adams</h4>
									<p>Regular Clients</p>
									<div class="ratting-tes">
										<span><i class="fas fa-star"></i></span>
										<span><i class="fas fa-star"></i></span>
										<span><i class="fas fa-star"></i></span>
										<span><i class="fas fa-star"></i></span>
										<span><i class="fas fa-star"></i></span>
									</div>
								</div>
							</div>
							<div class="testimonial-single-footer">
								<p>We are a team of professional and enthusiastic people, who like what they do and are always in the process of growing and improving their skills.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End Testimonial Area -->
	
	<!-- Start Footer Area -->
	<?php include("include/footer.php");?>

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