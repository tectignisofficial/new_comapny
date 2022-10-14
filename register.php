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
        echo "<script>window.location='register.php';</script>";
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
	<section class="login-form-style3" style="background-image:url('assets/img/login.webp');">
		<div class="login-form-style3-main">
			<div class="login-form-style3-main_full">
				<div class="login-register_style3-head">
					<div class="lo-logo mb-20">
						<a href="index.php">
							<img src="assets/img/logo.webp" alt="img">
						</a>
					</div>
					<h2>Register Account</h2>
					<ul>
						<li class="google"><a href="#"><i class="bi bi-google"></i> <span>Google</span></a></li>
						<li class="facebook"><a href="#"><i class="bi bi-facebook"></i> <span>Facebbok</span></a></li>
						<li class="twitter"><a href="#"><i class="bi bi-twitter"></i> <span>Twitter</span></a></li>
					</ul>
				</div>
				<div class="login-register3-form-middle">
					<form action="#">
						<div class="single-field">
							<input type="text" name="name" placeholder="UserName">
							<i class="bi bi-person"></i>
						</div>
						<div class="single-field">
							<input type="email" name="email" placeholder="Email Address">
							<i class="bi bi-envelope-fill"></i>
						</div>
						<div class="single-field">
							<input type="password" name="pass" placeholder="Password">
							<i class="bi bi-lock-fill"></i>
						</div>
						<div class="single-field">
							<input type="password" name="password" placeholder="Confirm Password">
							<i class="bi bi-lock-fill"></i>
						</div>
						<div class="single-field mb-0">
							<button type="submit">Create Account</button>
						</div>
					</form>
				</div>
				<div class="login-register-from-btom text-center mt-15">
					<p>Already have an account?<a href="login.php" class="text-primary ml-1">Sign In</a></p>
				</div>
			</div>
		</div>
	</section>

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
    <!-- <script src="assets/js/jquery.nice-select.min.js"></script> -->
    <script src="assets/js/jquery.waypoints.min.js"></script>
    <script src="assets/js/jquery.counterup.min.js"></script>
    <script src="assets/js/typed.js"></script>
    <script src="assets/js/script.js"></script>
    <script src="assets/js/mobile-menu.js"></script>
    <script src="assets/js/ajax-form.js"></script>
</body>
</html>