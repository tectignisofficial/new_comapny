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
        echo "<script>window.location='ceo-govind-bavkar.php';</script>";
    }
    else{
        echo "<script> alert('Connection Failed !');</script>";

    }
}
?>




<!DOCTYPE html>
<html class="no-js" lang="en">
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
						<h2>CEO</h2>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End Breadcrumb Area -->
	<!-- Start Team Member Area -->
	<section class="section-padding-2">
		<div class="container">
			<div class="row mb-40">
				<div class="col-lg-12  text-center">
					<div class="section-headding">
						<h2 class="sc_title text-gradient">"Sometimes it's the smallest &amp; quickest decisions that can change your Life forever."</h2>
						<p>The Young Entrepreneur Who Found IT Solutions Company in Navi Mumbai </p>
					</div>
				</div>
			</div>
		</div>
	</section>
	
	<section class="section-padding-2">
		<div class="container services-details">
			<div class="row">
				<div class="col-lg-6 align-self-center mb-30">
					<h3>Who Is Govind Bavkar?</h3>
					<p align="justify">He founded the IT Solutions Company in Navi Mumbai in the year of 2020, Govind Laxman Bavkar is CEO and Founder of Tectignis IT Solutions Pvt Ltd which deals in website development, software development, digital marketing service like SEO, SEM, SMM and Email Marketing and Many More. In the journey of 2 years, We have worked with the 100+ Businesses and still counting and we have earned a place in Start-up India by the Department for Promotion of Industry and  Internal Trade and Mr. Govind Bavkar also earned the another title of "Young Entrepreneur" by The Indian Achiever's Award 2021 And Mr. Govind Bavkar also recognized by Go Global Awards for Top Placer Information Technology, So  Starting with a Vision to do something extraordinary the young boy transformed into a young entrepreneur and If he can dream it and live that dream. so why won't you live your dream?</p>
				</div>
				<div class="col-lg-6 mb-30">
					<img src="assets/img/ceo.webp" alt="serices">
				</div>
			</div>
			<div class="row">
				<div class="col-lg-6 mb-30 order-lg-first order-last">
					<img src="assets/img/ceo1.webp" alt="img">
			</div>
				<div class="col-lg-6 mb-30 align-self-center">
					<h3>Consistency is The Key of Success</h3>
					<p align="justify">Being an Entrepreneur and a CEO and running an IT Solutions Company in Navi Mumbai is not easy! It takes consistent efforts to start from scratch without any support and get into the process of building your own empire. Do you want to be successful in life? want to have a great family life?  and want a high-paying job that can fulfil your needs? but I've got a question for you,</p>
					<ul>
						<li>How many Efforts you're taking to make it happen?</li>
					</ul>
					<p align="justify">"Efforts are the only thing that makes difference between humans and machines. And That's he mainly the reason why humans are replaced by machines so easily."</p>
				</div>
			</div>
				<div class="row">
				<div class="col-lg-6 align-self-center mb-30">
					<h3>Keys To Run IT Solutions Company in Navi Mumbai</h3>
					<p align="justify">Firstly we all know that traditional education can't help us out but transform our life and add-up some values to our society I have worked on myself to achieve the dreams which were shining into my eyes and then I have decided and I have started a Self-learning journey with all the discipline and dedication and at the same time with the Curiosity to learn something new and implement it on a daily basis to get the results (Success or Failure) and to level up myself in those learning skills, I have done all things which it takes to achieve. This practice made me a Quick Decision Maker and Good in Numbers (Calculation).</p>
				</div>
				<div class="col-lg-6 mb-30">
					<img src="assets/img/learning.webp" alt="serices">
				</div>
			</div>
			<div class="row">
				<div class="col-lg-6 mb-30 order-lg-first order-last">
					<img src="assets/img/timemoney.webp" alt="img">
			</div>
				<div class="col-lg-6 mb-30 align-self-center">
					<p align="justify">I have always valued Time, Therefore time is some time which we get an equal amount on a daily basis and we all should know how to utilize our time so initially I have learned time management and implemented that technique into real-life and so I would say time management is the part of that ladder which is going to take towards your destination, however, I learned that firstly, then afterward I have planned my whole day as in a daily schedule so once I used to come back from college, I used to open my laptop and learned the new things and explore the new those with the help of internet to learn new things and the high paying skills like Graphic Design, Digital Marketing, Finance, Hardware & Networking. However, I would give one piece of advice to the youngsters that do not look up for money during their initial days gain the knowledge and learn the new things and explore the new things, work to make an investment into yourself and others. even while i have started digital marketing agency in Navi Mumbai during that time this time management things helped me allot so Time is way more important than money. Give time to yourself, your employees, and you’re learning.</p>
				</div>
			</div>
			<div class="row">
				<div class="col-12">
					<h3>Unique Selling Point of Tectignis IT Solutions Company</h3>
					<p>Unique Selling Point of Tectignis IT Solutions Pvt Ltd is to make customized plans for the clients as per their requirements. All of these are the Top 3 secrets to building a Successful Digital Marketing Company from Scratch. Tectignis IT Solutions Pvt Ltd is The Best Digital Marketing Agency in Navi Mumbai.</p>
					<p>The only thing i want to say is "It took day and night to me just to get here where i have once dreamed, i always choose Time over Money because i can effort of losing money but i can't earn this time again in my life and with allot's of effort and self determination, and sleepless nights i have turned all those struggling part of my life into this successful startup. Best wishes to the Tectignis Team and Staff to build the Legacy of Information Technology, Marketing, and Education.</p>
				</div>
			</div>
			
		</div>
	</section>
	<!-- End Team Member Area -->
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