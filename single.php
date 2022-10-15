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
        echo "<script>window.location='single.php';</script>";
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
	<title>Tectignis</title>
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
						<h2>Blog Details</h2>
						<ul>
							<li><a href="index.php">Home</a></li>
							<li>Blog Details</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End Breadcrumb Area -->
	<!-- Start Blog Area -->
	<section class="section-padding">
		<div class="container">
			<div class="row">
				<!-- Blog -->
				<div class="col-lg-8 mb-30">
					<!-- Details Content -->
					<div class="blog-details mb-30">
						<div class="thumbnail">
							<img src="assets/img/blog/2.webp" alt="img">
						</div>
						<div class="content">
							<div class="meta">
								<span><i class="far fa-calendar-alt"></i> 12 September 2021</span>
								<span><i class="fas fa-tags"></i> <a href="#">Technology</a></span>
							</div>
							<h2>What’s the Holding Back the It Solution Industry?</h2>
							<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled.it to make a type specimen book. It has survived not only five centuries.</p>
							<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s,It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged</p>
							<div class="row">
								<div class="col-lg-6 mb-30">
									<img src="assets/img/blog/1.webp" alt="blog">
								</div>
								<div class="col-lg-6 mb-30">
									<img src="assets/img/blog/3.webp" alt="blog">
								</div>
							</div>
							<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged</p>
							<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged</p>
							<div class="row">
								<div class="col-lg-12 mb-30">
									<div class="tagcloud">
										<span><b>Tags: </b></span>
										<a href="#">php5</a>
										<a href="#">it</a>
										<a href="#">technology</a>
									</div>
								</div>
								<div class="col-lg-12">
									<div class="prject-share">
										<span><b>Share : </b></span>
										<span><a href="#"><i class="fab fa-facebook-f"></i></a></span>
										<span><a href="#"><i class="fab fa-twitter"></i></a></span>
										<span><a href="#"><i class="fab fa-instagram"></i></a></span>
										<span><a href="#"><i class="fab fa-linkedin"></i></a></span>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- Comment List -->
					<div class="comments-list-full mb-30">
						<h2>03 Comments</h2>
						<ul>
							<li class="single-comment">
								<div class="thum">
									<img src="assets/img/user.webp" alt="thumb">
								</div>
								<div class="content">
									<h4><a href="#">Jonathom Doe</a></h4>
									<span> September 19, 2021 at 11:25 am </span>
									<p>Aenean volutpat sed lacus eu faucibus. Quisque nunc dui, finibus at bibendum et, egestas eget lectus. Ut iaculis tempor risus a dictum. Aenean volutpat sed lacus eu faucibus. Quisque nunc dui, finibus at bibendum et, egestas eget lectus. Ut iaculis tempor risus a dictum.</p>
									<a class="reply" href="#">Reply</a>
								</div>
								<ul class="comment-reply">
									<li>
										<div class="thum">
											<img src="assets/img/user.webp" alt="thumb">
										</div>
										<div class="content">
											<h4><a href="#">Jonathom Doe</a></h4>
											<span> September 19, 2021 at 11:25 am </span>
											<p>Aenean volutpat sed lacus eu faucibus. Quisque nunc dui, finibus at bibendum et, egestas eget lectus. Ut iaculis tempor risus a dictum. </p>
											<a class="reply" href="#">Reply</a>
										</div>
									</li>
								</ul>
							</li>
							<li class="single-comment">
								<div class="thum">
									<img src="assets/img/user.webp" alt="thumb">
								</div>
								<div class="content">
									<h4><a href="#">Jonathom Doe</a></h4>
									<span> September 19, 2021 at 11:25 am </span>
									<p>Aenean volutpat sed lacus eu faucibus. Quisque nunc dui, finibus at bibendum et, egestas eget lectus. Ut iaculis tempor risus a dictum. </p>
									<a class="reply" href="#">Reply</a>
								</div>
							</li>
						</ul>
					</div>
					<!-- Comment Form -->
					<div class="comments-form-full">
						<h2>Leave your Comment here </h2>
						<form action="#">
							<textarea name="message" placeholder="Write Comment" spellcheck="false"></textarea>
							<input type="text" name="name" placeholder="Your Name">
							<input type="email" name="email" placeholder="Your Email">
							<input type="text" name="subjects" placeholder="Your Subjects">
							<button type="submit">Submit Comment</button>
						</form>
					</div>
				</div>
				<!-- Widgets -->
				<div class="col-lg-4">
                    <!-- single -->
                    <div class="widets-single mb-30">
                        <div class="wi-search-form">
                            <form action="#">
                                <input type="search" name="search" placeholder="Search Here..">
                                <button type="submit"><i class="fas fa-search"></i></button>
                            </form>
                        </div>
                    </div>
                    <!-- single -->
                    <div class="widets-single mb-30">
                        <h2 class="title">Categories</h2>
                        <ul>
                            <li>
                                <a href="#"><i class="fas fa-plus"></i> Consultancy</a>
                            </li>
                            <li>
                                <a href="#"><i class="fas fa-plus"></i> It Service</a>
                            </li>
                            <li>
                                <a href="#"><i class="fas fa-plus"></i> Software Development</a>
                            </li>
                            <li>
                                <a href="#"><i class="fas fa-plus"></i> Business</a>
                            </li>
                            <li>
                                <a href="#"><i class="fas fa-plus"></i> Technology</a>
                            </li>
                            <li>
                                <a href="#"><i class="fas fa-plus"></i> Digital</a>
                            </li>
                            <li>
                                <a href="#"><i class="fas fa-plus"></i> Marketing</a>
                            </li>
                            <li>
                                <a href="#"><i class="fas fa-plus"></i> UI/UX Design</a>
                            </li>
                        </ul>
                    </div>
                    <!-- single -->
                    <div class="widets-single mb-30">
                        <h2 class="title">Recent Posts</h2>
                        <div class="side-widgets-l-blog">
                            <div class="item mb-20">
                                <div class="thubnail">
                                    <a href="single.php">
                                        <img src="assets/img/blog/1.webp" alt="blog">
                                    </a>
                                </div>
                                <div class="content">
                                    <h4><a href="single.php">10 Common IT Mistakes That You Need to Avoid</a></h4>
                                    <span>18 September 2021</span>
                                </div>
                            </div>
                            <div class="item mb-20">
                                <div class="thubnail">
                                    <a href="single.php">
                                        <img src="assets/img/blog/2.webp" alt="blog">
                                    </a>
                                </div>
                                <div class="content">
                                    <h4><a href="single.php">10 Common IT Mistakes That You Need to Avoid</a></h4>
                                    <span>18 September 2021</span>
                                </div>
                            </div>
                            <div class="item mb-20">
                                <div class="thubnail">
                                    <a href="single.php">
                                        <img src="assets/img/blog/3.webp" alt="blog">
                                    </a>
                                </div>
                                <div class="content">
                                    <h4><a href="single.php">10 Common IT Mistakes That You Need to Avoid</a></h4>
                                    <span>18 September 2021</span>
                                </div>
                            </div>
                            <div class="item">
                                <div class="thubnail">
                                    <a href="single.php">
                                        <img src="assets/img/blog/1.webp" alt="blog">
                                    </a>
                                </div>
                                <div class="content">
                                    <h4><a href="single.php">10 Common IT Mistakes That You Need to Avoid</a></h4>
                                    <span>18 September 2021</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- single -->
                    <div class="widets-single mb-30">
                        <h2 class="title">Tags</h2>
                        <div class="tagcloud">
                            <a href="#">php5</a>
                            <a href="#">it</a>
                            <a href="#">technology</a>
                            <a href="#">software</a>
                            <a href="#">development</a>
                            <a href="#">design</a>
                            <a href="#">app</a>
                            <a href="#">mobile</a>
                        </div>
                    </div>
                    <!-- single -->
                    <div class="widets-single">
                        <h2 class="title">Archives</h2>
                        <ul>
                            <li>
                                <a href="#"><i class="fas fa-plus"></i> September 2021</a>
                            </li>
                            <li>
                                <a href="#"><i class="fas fa-plus"></i> October 2021</a>
                            </li>
                            <li>
                                <a href="#"><i class="fas fa-plus"></i> August 2021</a>
                            </li>
                            <li>
                                <a href="#"><i class="fas fa-plus"></i> July 2021</a>
                            </li>
                            <li>
                                <a href="#"><i class="fas fa-plus"></i> June 2021</a>
                            </li>
                        </ul>
                    </div>
                </div>
			</div>
		</div>
	</section>
	<!-- End Blog Area -->

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