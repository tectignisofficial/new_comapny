<?php
$conn=mysqli_connect("151.106.124.51","u188140722_company","Admin@123","u188140722_company");

    include('include/config.php');
    if(isset($_POST['submit']))
{
    $name=$_POST['name'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $subject=$_POST['subject'];
    $services=$_POST['services'];
    $message=$_POST['message'];

    $sql=mysqli_query($conn, "INSERT INTO `request_quote`(`name`,`email`,`phone`,`subject`,`services`,`message`) VALUES('$name','$email','$phone','$subject','$services','$message')");

    if( $sql==1){
        echo "<script>window.location='index.php';</script>";
    }
    else{
        echo "<script> alert('Connection Failed !');</script>";

    }
}
?>
<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Tectignis - Index </title>
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
		.owl-item{
			height:100% !important;
		}
		.list li::before {
			content: "\2022";
			color: #ff9900;
			font-weight: 900;
			display: inline-block;
			width: 1em;
			margin-left: -1em;
			font-size: 30px;
		}

		@media only screen and (max-width:600px) {
			.myVideo {
				height: 100%;
			}
		}

		.module {
			margin-bottom: 30px;
			padding-bottom: 30px;
		}

		.module>p {
			padding: 0 20px;
		}

		.module>h2 {
			font-size: 1.5em;
			font-weight: bold;
			padding: 0 20px;
		}

		.module .slide_margin li img {
			border-radius: 50%;
		}

		@media only screen and (max-width: 767px) {
			#ourclients .client-left-section {
				box-shadow: none;
				padding: 0 15px 30px;
			}

			.mbView {
				padding-top: 3.5rem;
			}
		}

		#ourclients .client-left-section {
			padding: 20px 0;
			box-shadow: 0 0 10px #000;
			position: absolute;
			left: 0;
			top: 0;
			bottom: 0;
			z-index: 99;
			background: #333;
			width: 70px;
		}

		@media only screen and (max-width: 767px) {
			#ourclients .client-left-section .client-left-section-text {
				line-height: 143px;
				font-size: 41px;
			}
		}

		#ourclients .client-left-section .client-left-section-text {
			font-size: 38px;
			text-align: center;
			line-height: 88px;
			color: #4c4c4c;
			font-weight: 700;
			margin: 0;
			transform: rotate(-90deg) translate(-71px, 0);
		}

		#ourclients-row {
			position: relative;
			background: #333;
		}

		.slide_margin li {
			margin-right: 50px;
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

	<?php include "include/header.php"; ?>


	<!-- Start Hero Section -->

	<section class="hero-area" style="  position: relative; overflow: hidden;">
		<video id="bbf08c69-35c5-2dd5-0d90-3ca634dea09f-video" autoplay="" class="myVideo" loop=""
			style="background-image:url(&quot;https://uploads-ssl.webflow.com/600e79d42eab063f0504b711/602bd2ed91f8273f79692bec_spark_dribbbles-poster-00001.jpg&quot;)"
			muted="" playsinline="" data-wf-ignore="true" data-object-fit="cover">
			<source
				src="https://uploads-ssl.webflow.com/5d505d4a8e83099d58757312/625fee81a8046c7e2f641a5e_spark_dribbbles-poster-00001.jpg"
				data-wf-ignore="true">
			<source
				src="https://uploads-ssl.webflow.com/5d505d4a8e83099d58757312/625fee81a8046c7e2f641a5e_spark_dribbbles-transcode.mp4"
				data-wf-ignore="true">
			<source
				src="https://uploads-ssl.webflow.com/5d505d4a8e83099d58757312/625fee81a8046c7e2f641a5e_spark_dribbbles-transcode.webm"
				data-wf-ignore="true">
		</video>

		<div class="container">
			<div class="row">

				<div class="col-lg-8 offset-lg-2 text-center">
					<div class="hero-caption pt-150 pb-200">
						<h2>We build, grow and help you scale</h2>
						<p>by bringing the best strategic marketing initiatives and growth consulting that aligns with
							your brand's mission.</p>
					</div>
				</div>
			</div>
		</div>
		<div class="custom-shape-divider-bottom-1638549227">
			<svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120"
				preserveAspectRatio="none">
				<path
					d="M985.66,92.83C906.67,72,823.78,31,743.84,14.19c-82.26-17.34-168.06-16.33-250.45.39-57.84,11.73-114,31.07-172,41.86A600.21,600.21,0,0,1,0,27.35V120H1200V95.8C1132.19,118.92,1055.71,111.31,985.66,92.83Z"
					class="shape-fill"></path>
			</svg>
		</div>
	</section>
	<!-- End Hero Section -->
	<!-- Header Counter Area -->
	<section class="h_counter_area">
		<div class="container">
			<div class="row">
				<div class="col-lg-10 offset-lg-1">
					<div class="row h_counter_section">
						<!-- Single -->
						<div class="col-md-4 position-relative">
							<div class="counter_item_h">
								<div class="title">
									<h2 class="counter text-gradient">255</h2>
									<h3 class="text-gradient">+</h3>
								</div>
								<h5>QUALITY SERVICES</h5>
								<p class="text-sm">We have expert and professional team with us so that we can provide
									the quality solutions to our customers. </p>
								<hr class="vertical dark">
							</div>
						</div>
						<!-- Single -->
						<div class="col-md-4 position-relative">
							<div class="counter_item_h">
								<div class="title">
									<h2 class="counter text-gradient">100</h2>
									<h3 class="text-gradient">+</h3>
								</div>
								<h5>AFFORDABLE COST </h5>
								<p class="text-sm">Web and digital is not a fixed price industry thus we charge the
									reasonable cost to customers.</p>
								<hr class="vertical dark">
							</div>
						</div>
						<!-- Single -->
						<div class="col-md-4">
							<div class="counter_item_h">
								<div class="title">
									<h2 class="counter text-gradient">7</h2>
									<h3 class="text-gradient">+</h3>
								</div>
								<h5>YEARS OF EXPERIENCE</h5>
								<p class="text-sm">We started the company in 2015 and the journy still continue. We have
									more than 16 years of industry experience.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Header Counter Area -->
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
							<h4 class="text-gradient">Business Consulting and Growth Strategy</h4>
							<p></p>
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
							<h4 class="text-gradient">Digital Business Model Transformation</h4>
							<p> </p>
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
							<h4 class="text-gradient"> Building Profitable Sales Funnels </h4>
							<p></p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End Features That Area -->
	<!-- Start analytics Area -->
	<section class="pb-70">
		<div class="container">
			<div class="row">
				<!-- Content -->
				<div class="col-lg-6 align-self-center">
					<div class="analytics-toll-content">
						<h2 class="text-gradient">Digital Marketing Agency In India</h2>
						<p class="contetn">A Well Known Digital Marketing Company in India focused on Client’s Business
							Growth Only!</p>
						<div class="row">
							<!-- Single -->
							<div class="col-sm-6 mb-30">
								<div class="info-box-s2">
									<div class="icon">
										<img src="assets/img/icon/1.webp" alt="icon">
									</div>
									<div class="content">
										<h4>Experience in different sectors</h4>
										<p>
											As a social media marketing agency in Navi Mumbai, We have been dealing with
											different clients from different industries and have achieved results</p>
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
										<h4>Risk-free Association</h4>
										<p>We can work with you on a monthly basis unless you insist on contracts or
											longer association.</p>
									</div>
								</div>
							</div>

						</div>
						<a class="button-1" href="digital-marketing.php">Discover More</a>
					</div>
				</div>
				<!-- Image -->
				<div class="col-lg-6">
					<div class="analytics-toll-img">
						<img src="assets/img/digital-marketing-company-in-navimumbai.webp" alt="img">

					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End analytics Area -->
	<!-- Start Template Need Area -->
	<section class="template-need" style="background-image:url('assets/img/cta-1.webp');">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<h2>Let's talk about what we can build together</h2>
					<p>Whatever may be your requirement - be it a simple website design, a complex data driven web
						application development, an ecommerce website, a native or cross platform mobile app
						development, a logo and brand identity design, a video production or a full fledged digital
						marketing campaign - we have a solution for you.</p>
				</div>
				<div class="col-lg-6 align-self-center">
					<a class="button-2 text-right" href="contact.php">Contact us now for a free Quote</a>
				</div>
			</div>
		</div>
	</section>
	<!-- End Template Need Area -->
	<!-- Start useful resource Area -->
	<section class="section-padding section-bg">
		<div class="container">
			<div class="row">
				<!-- Form -->
				<div class="col-12 col-lg-5">
					<div class="usefull-resourses-form">
						<div class="thum">
							<img src="assets/img/custom-website-development.webp" alt="img">
						</div>
						<div class="use_form">
							<form action="#">
								<input type="text" name="name" placeholder="Name">
								<input type="email" name="email" placeholder="Email">
								<input type="text" name="subject" placeholder="Subject">
								<button class="button-1" type="submit">Submit Now</button>
							</form>
						</div>
					</div>
				</div>
				<!-- Content -->
				<div class="col-12 col-lg-7 align-self-center">
					<div class="usefull-resourses-content">
						<h2 class="text-gradient">CUSTOM WEBSITE DEVELOPMENT SERVICES</p>
							<h4>We love to code. We can help you with PHP, MySQL, Laravel, Codeigniter, AngularJS,
								NodejS, WordPress plugins & themes, Magento, Joomla, Shopify and more…</h4>
							<p>Website are the tailor-made product and we at Kwebmaker are specialized in converting
								Ideas into reality. We are one of the best <b>Website Development Service providers in
									Navi Mumbai, India.</b> We believe in the quote that “ONE SIZE DOESN’T FIT ALL”, so
								we help our client in building Brand Website, Corporate Website, Broucher Website,
								Catalogue Website, E-commerce Website and Comprehensive portal. Our young and energetic
								Team of Techies help to bring the most dynamic Custom Website Designing Services to our
								client.</p>
							<ul>
								<li><i class="fas fa-check-circle"></i> Custom Design Layout</li>
								<li><i class="fas fa-check-circle"></i> Mobile Responsive Design</li>
								<li><i class="fas fa-check-circle"></i> User-Friendly Navigation</li>
								<li><i class="fas fa-check-circle"></i> Simple and Professional Web Design</li>
								<li><i class="fas fa-check-circle"></i> Speed Improvement </li>
								<li><i class="fas fa-check-circle"></i> Search Engine Optimization</li>
								<li><i class="fas fa-check-circle"></i> Online Chat</li>
								<li><i class="fas fa-check-circle"></i> Social Media Integration</li>
							</ul>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End useful resource Area -->
	<!-- Start analytics Area -->

	<!-- End analytics Area -->
	<!-- Start Applicant Area -->
	<section class="section-padding-2">
		<div class="container">
			<div class="row mb-70">
				<!-- Content -->
				<div class="col-lg-6 align-self-center mb-30">
					<div class="applicant-content">
						<h2 class="text-gradient">Mobile Application Development Services</h2>
						<p> A Well Known Digital Marketing Company in India focused on Client’s Business Growth Only!
						</p>
						<div class="applicant-list-full">
							<!-- Single -->
							<div class="item">
								<div class="icon">
									<i class="fas fa-code"></i>
								</div>
								<div class="content">
									<h4> Business Proposal </h4>
									<p>With all the details collected by our correspondent, it will be conveyed to our
										expert advisors, who would analyse your requirements and propose the best
										prices.</p>
								</div>
							</div>
							<!-- Single -->
							<div class="item">
								<div class="icon">
									<i class="fas fa-tools"></i>
								</div>
								<div class="content">
									<h4>App Development & Testing</h4>
									<p>Once approved, Team will set in motion the proposed project and coordinate with
										our Analysis, and development team to start the project.</p>
								</div>
							</div>
							<div class="item">
								<div class="icon">
									<i class="fas fa-tools"></i>
								</div>
								<div class="content">
									<h4>Get The Project Delivered</h4>
									<p>Your project is now ready for delivery. Assuming everything works out and all the
										bugs are quashed, you get the final delivery of the your project.</p>
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
						<img src="assets\img\website-development.webp" alt="dashkit">
					</div>
				</div>
				<!-- Content -->
				<div class="col-lg-6 align-self-center mb-30">
					<div class="applicant-content">
						<h2 class="text-gradient">Leading Video Editing Service Provider in Navi Mumbai</h2>
						<p> We can give thousands of reasons but here’s the one that ultimately matters! </p>
						<div class="applicant-list-full">
							<!-- Single -->
							<div class="item">
								<div class="icon">
									<i class="fas fa-code"></i>
								</div>
								<div class="content">
									<h4> Undiminished quality </h4>
									<p>Quality of the edited video will remain the same as the quality of the original
										video. There wouldn’t be any loss of pixels after editing, which doesn’t usually
										happen if you use an online editing tool.</p>
								</div>
							</div>
							<!-- Single -->
							<div class="item">
								<div class="icon">
									<i class="fas fa-tools"></i>
								</div>
								<div class="content">
									<h4>Unparalleled customer experience</h4>
									<p>We’re obsessed with serving you and making sure you get fully satisfied. In case
										of any changes/ modifications in the edited video, feel free to reach out to us
										and we’ll incorporate them proactively.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End Applicant Area -->

	<!-- Start Turn Ideas Area -->
	<section class="section-padding-3">
		<div class="container">
			<!-- Section Headding -->
			<div class="row mb-40">
				<div class="col-lg-8 offset-lg-2 text-center">
					<div class="section-headding">
						<h2>Our Expertise</h2>
						<p>Our foremost service is customer satisfaction. We provide services in which we are efficient
							and capable of delivering the best solutions.</p>
					</div>
				</div>
			</div>
			<div class="row turn_ideas_section">
				<div class="col-lg-4">
					<div class="trun_ideas_nav">
						<ul class="nav nav-tabs" id="myTab" role="tablist">
							<li class="nav-item" role="presentation">
								<button class="nav-link active" id="topa-tab" data-bs-toggle="tab"
									data-bs-target="#topa" role="tab" aria-controls="topa" aria-selected="true"><i
										class="fas fa-file-alt"></i>Ecommerce Website Design & Development</button>
							</li>
							<li class="nav-item" role="presentation">
								<button class="nav-link" id="saasde-tab" data-bs-toggle="tab" data-bs-target="#saasde"
									role="tab" aria-controls="saasde" aria-selected="false"><i
										class="far fa-file-code"></i>Social Media Advertising</button>
							</li>
							<li class="nav-item" role="presentation">
								<button class="nav-link" id="softwareanaly-tab" data-bs-toggle="tab"
									data-bs-target="#softwareanaly" role="tab" aria-controls="softwareanaly"
									aria-selected="false"><i class="fas fa-chart-line"></i>Social Media
									Management</button>
							</li>
							<li class="nav-item" role="presentation">
								<button class="nav-link" id="exchangefeed-tab" data-bs-toggle="tab"
									data-bs-target="#exchangefeed" role="tab" aria-controls="exchangefeed"
									aria-selected="false"><i class="fas fa-exchange-alt"></i>Website Design &
									Development</button>
							</li>
							<li class="nav-item" role="presentation">
								<button class="nav-link" id="foremployees-tab" data-bs-toggle="tab"
									data-bs-target="#foremployees" role="tab" aria-controls="foremployees"
									aria-selected="false"><i class="fas fa-user-injured"></i>Google Ads</button>
							</li>
						</ul>
					</div>
				</div>
				<div class="col-lg-8 mbView">
					<div class="tab-content" id="myTabContent">
						<div class="tab-pane trun_ideas_contetn fade show active" id="topa" role="tabpanel"
							aria-labelledby="topa-tab">
							<!-- <img src="assets/img/dashbord.webp" alt="dashbord"> -->
							<div class="row mb-40">
								<div class="col-lg-10 offset-lg-2 text-start">
									<div class="">
										<p class="mb-3"
											style="color:rgb(31, 31, 31); font-size: 25px; font-weight: 600;">Ecommerce
											Website Design & Development</p>
										<p style="color:rgb(90, 90, 90); font-size: 17px;">Tectignis is a Magento
											Solution Company with deep skills in providing Magento Services for your
											robust eCommerce portal. We cater to your needs by crafting a tailor-made
											solution with Magento Services & Magento Integration as per your
											specifications.</p>
									</div>
								</div>
							</div>
							<div class="row mb-40">
								<div class="col-lg-4 offset-lg-2 text-start"
									style="background-color: rgb(210 235 243); padding: 31px; ">
									<img src="assets/img/digital-marketing.webp" alt="dashbord">
								</div>
								<div class="col-lg-6 text-start mbView" style="padding-left: 45px;">
									<p style="color:rgb(31, 31, 31); font-size: 20px; font-weight: 600;">How can we
										help?</p>
									<ul class="list" style="line-height:40px; color:rgb(90, 90, 90);  font-size: 17px;">
										<li>Custom Shopping Cart</li>
										<li>Social Media Integration</li>
										<li>Secure Payment Gateway</li>
										<li>API Payment & Logistic Integration</li>
										<li>Advanced Security & Support</li>
									</ul>
								</div>
							</div>
						</div>
						<div class="tab-pane trun_ideas_contetn fade" id="saasde" role="tabpanel"
							aria-labelledby="saasde-tab">
							<!-- <img src="assets/img/dashbord.webp" alt="dashbord"> -->
							<div class="row mb-40">
								<div class="col-lg-10 offset-lg-2 text-start">
									<div class="">
										<p class="mb-3"
											style="color:rgb(31, 31, 31); font-size: 25px; font-weight: 600;">Social
											Media Advertising</p>
										<p style="color:rgb(90, 90, 90); font-size: 17px;">Advertisements have taken a
											new leap with social media. Social media
											advertising is the most cost effective solution for all types of businesses
											that want to advertise their products or services and reach their set of
											audiences.</p>
									</div>
								</div>
							</div>
							<div class="row mb-40">
								<div class="col-lg-4 offset-lg-2 text-start"
									style="background-color: rgb(210 235 243); padding: 31px; ">
									<img src="assets/img/social-media-advertising.webp" alt="dashbord">
								</div>
								<div class="col-lg-6 text-start mbView" style="padding-left: 45px;">
									<p style="color:rgb(31, 31, 31); font-size: 20px; font-weight: 600;">How can we
										help?</p>
									<ul class="list" style="line-height:40px; color:rgb(90, 90, 90);  font-size: 17px;">
										<li>Reach your customers fast</li>
										<li>Premium advertisement</li>
										<li>Quick brand awareness</li>
										<li>Cost effective ads</li>
									</ul>
								</div>
							</div>
						</div>
						<div class="tab-pane trun_ideas_contetn fade" id="softwareanaly" role="tabpanel"
							aria-labelledby="softwareanaly-tab">
							<!-- <img src="assets/img/dashbord.webp" alt="dashbord"> -->
							<div class="row mb-40">
								<div class="col-lg-10 offset-lg-2 text-start">
									<div class="">
										<p class="mb-3"
											style="color:rgb(31, 31, 31); font-size: 25px; font-weight: 600;">Social
											Media Management</p>
										<p style="color:rgb(90, 90, 90); font-size: 17px;">Don’t just engage followers.
											Convert them into loyal customers. Our social media marketing services make
											an impact where it matters most—the bottom line of your income statement!
										</p>
									</div>
								</div>
							</div>
							<div class="row mb-40">
								<div class="col-lg-4 offset-lg-2 text-start"
									style="background-color: rgb(210 235 243); padding: 31px; ">
									<img src="assets/img/social-media-management.webp" alt="dashbord">
								</div>
								<div class="col-lg-6 text-start mbView" style="padding-left: 45px;">
									<p style="color:rgb(31, 31, 31); font-size: 20px; font-weight: 600;">How can we
										help?</p>
									<ul class="list" style="line-height:40px; color:rgb(90, 90, 90);  font-size: 17px;">
										<li>Graphic Design</li>
										<li>Video production & editing</li>
										<li>Content & Storytelling</li>
										<li>Social Media Creatives</li>
										<li>Email & Digital Marketing</li>
									</ul>
								</div>
							</div>
						</div>
						<div class="tab-pane trun_ideas_contetn fade" id="exchangefeed" role="tabpanel"
							aria-labelledby="exchangefeed-tab">
							<!-- <img src="assets/img/dashbord.webp" alt="dashbord"> -->
							<div class="row mb-40">
								<div class="col-lg-10 offset-lg-2 text-start">
									<div class="">
										<p class="mb-3"
											style="color:rgb(31, 31, 31); font-size: 25px; font-weight: 600;">Website
											Design &
											Development</p>
										<p style="color:rgb(90, 90, 90); font-size: 17px;">Tectignis is a professional
											web designing & developing company that offers affordable web designing
											services by empowering individuals, teams and organizations in the most
											efficient manner. The web designers at Tectignis have the creative talent
											and technical expertise to develop websites.</p>
									</div>
								</div>
							</div>
							<div class="row mb-40">
								<div class="col-lg-4 offset-lg-2 text-start"
									style="background-color: rgb(210 235 243); padding: 31px; ">
									<img src="assets/img/website-design-and-development.webp" alt="dashbord">
								</div>
								<div class="col-lg-6 text-start mbView" style="padding-left: 45px;">
									<p style="color:rgb(31, 31, 31); font-size: 20px; font-weight: 600;">Benefits OF
										Website Design & Development</p>
									<ul class="list" style="line-height:40px; color:rgb(90, 90, 90);  font-size: 17px;">
										<li>Easy To Navigate</li>
										<li>Security</li>
										<li>No Installation</li>
										<li>Mobile Responsive</li>
									</ul>
								</div>
							</div>
						</div>

						<div class="tab-pane trun_ideas_contetn fade" id="foremployees" role="tabpanel"
							aria-labelledby="foremployees-tab">
							<!-- <img src="assets/img/dashbord.webp" alt="dashbord"> -->
							<div class="row mb-40">
								<div class="col-lg-10 offset-lg-2 text-start">
									<div class="">
										<p class="mb-3"
											style="color:rgb(31, 31, 31); font-size: 25px; font-weight: 600;">Google Ads
										</p>
										<p style="color:rgb(90, 90, 90); font-size: 17px;">Get all the traffic from
											Google to your website! Divert people searching on Google about your
											products and services to your website.</p>
									</div>
								</div>
							</div>
							<div class="row mb-40">
								<div class="col-lg-4 offset-lg-2 text-start"
									style="background-color: rgb(210 235 243); padding: 31px; ">
									<img src="assets/img/google-ads.webp" alt="dashbord">
								</div>
								<div class="col-lg-6 text-start mbView" style="padding-left: 45px;">
									<p style="color:rgb(31, 31, 31); font-size: 20px; font-weight: 600;">Our Google
										AdWords team mainly concentrates on-</p>
									<ul class="list" style="line-height:40px; color:rgb(90, 90, 90);  font-size: 17px;">
										<li>High-Quality Keyword Research</li>
										<li>High-Quality Campaigns</li>
										<li>Targeted Traffic</li>
										<li>Appear on Top</li>
										<li>Measurable ROI</li>
									</ul>
								</div>
							</div>

						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End Turn Ideas Area -->

	<!--start scroll-->

	<section class="section-padding pt-0">
		<div id="ourclients" class="p-3">
			<div class="ourclientheader mb-5 text-center">
				<h1><b>Our Partners</b> </h1>
				<p>We are proud to be a part of the following companies</p>
			</div>

			<div class="row" id="ourclients-row">
				<div class="client-left-section">
					<h3 class="client-left-section-text">CLIENTS</h3>
				</div>
				<div class="module mt-5">

					<ul class="slide_margin">
						<li class="mr-2"><img src="our_client/canara.webp" width="100px" height="100px" alt="" /></li>
						<li class="mr-2"><img src="our_client/download.webp" width="100px" height="100px" alt="" /></li>
						<li class="mr-2"><img src="our_client/gobest.webp" width="100px" height="100px" alt="" /></li>
						<li class="mr-2"><img src="our_client/harmony.webp" width="100px" height="100px" alt="" /></li>
						<li class="mr-2"><img src="our_client/hpcl.webp" width="100px" height="100px" alt="" /></li>
						<li class="mr-2"><img src="our_client/lic.webp" width="100px" height="100px" alt="" /></li>
						<li class="mr-2"><img src="our_client/lo.webp" width="100px" height="100px" alt="" /></li>
						<li class="mr-2"><img src="our_client/reliance.webp" width="100px" height="100px" alt="" /></li>
					</ul>
				</div>

			</div>
		</div>
	</section>
	<!--end scroll-->
	<!-- Start Pricing Plane -->
	<section class="section-padding-2 pt-0">
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
					<div class="pricing-table-tab  text-center">
						<p>Save up to 10%</p>
						<ul class="nav nav-tabs" id="myTabPricing" role="tablist">
							<li class="nav-item" role="presentation">
								<button class="nav-link active" id="monthly-tab" data-bs-toggle="tab"
									data-bs-target="#monthly" role="tab" aria-controls="monthly"
									aria-selected="true">Monthly</button>
							</li>
							<li class="nav-item" role="presentation">
								<button class="nav-link" id="yearly-tab" data-bs-toggle="tab" data-bs-target="#yearly"
									role="tab" aria-controls="yearly" aria-selected="false">Yearly</button>
							</li>
						</ul>
					</div>
					<div class="tab-content mt-40" id="myTabPricingContent">
						<div class="tab-pane fade show active" id="monthly" role="tabpanel"
							aria-labelledby="monthly-tab">
							<div class="row">
								<!-- Single -->
								<div class="col-lg-4 col-md-6 mb-30">
									<div class="pricing-item">
										<div class="pricing-header">
											<h4>BASIC</h4>
											<h2>$19.89</h2>
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
											<h2>$99.89</h2>
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
	<!-- End Pricing Plane -->
	<!-- Start Testimonial Area -->
	<section class="section-padding pt-0">
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
						<div class="testimonial-item h-100">
							<div class="testimonial-single-header">
								<div class="thumbnail">
									<img src="assets/img/team/2.webp" alt="testimonial">
								</div>
								<div class="testimonial-title">
									<h4>Sushil joshi</h4>
									<!-- <p>Regular Clients</p> -->
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
								<p>Working with the team of Tectignis IT Solutions (Especially Govind Sir head of the
									company) has been a most pleasant experience right from the start!
									Every person I worked with at Tectignis IT Solutions was knowledgeable, creative,
									prompt, and personable. Their dedication and passion for what they do is exemplified
									by their unrivaled customer support and attentiveness to the specific needs of our
									website. We look forward to a long lasting and prosperous relationship with the team
									of Tectignis IT Solutions. Keep up the fantastic work! We at Imperia Legal would
									highly recommend Tectignis IT Solutions to anyone looking to build a new website..
								</p>
							</div>
						</div>
						<!-- Single -->
						<div class="testimonial-item h-100">
							<div class="testimonial-single-header">
								<div class="thumbnail">
									<img src="assets/img/team/2.webp" alt="testimonial">
								</div>
								<div class="testimonial-title">
									<h4>Amit Jain </h4>
									<p></p>
									<div class="ratting-tes">
										<span><i class="fas fa-star"></i></span>
										<span><i class="fas fa-star"></i></span>
										<span><i class="fas fa-star"></i></span>
										<span><i class="far fa-star"></i></span>
										<span><i class="far fa-star"></i></span>
									</div>
								</div>
							</div>
							<div class="testimonial-single-footer h-100">
								<p>I really needed a Ecommerce website, they build for me. This is the best IT solution
									company in Navi Mumbai. I am also happy that I got my Ecommerce website build with
									the marketing package with best discount. Their marketing is so amazing that I am
									now getting clients from India as well as from foreign. Thanks Tectignis Team for my
									business growth has increased to a very good extend.</p>
							</div>
						</div>
						<!-- Single -->
						<div class="testimonial-item h-100">
							<div class="testimonial-single-header">
								<div class="thumbnail">
									<img src="assets/img/team/2.webp" alt="testimonial">
								</div>
								<div class="testimonial-title">
									<h4>Bhavesh Gaikar</h4>
									<!-- <p>Regular Clients</p> -->
									<div class="ratting-tes">
										<span><i class="fas fa-star"></i></span>
										<span><i class="fas fa-star"></i></span>
										<span><i class="fas fa-star"></i></span>
										<span><i class="fas fa-star"></i></span>
										<span><i class="far fa-star"></i></span>
									</div>
								</div>
							</div>
							<div class="testimonial-single-footer h-100">
								<p>I have tried many digital marketing company in navi mumbai but never got the result
									oriented service for digital marketing. But from past 1 years I have seen a more
									changes in my SEO results almost all of my keyword are ranking on google and I am
									also happy with their creative work on my social media pages. Thank you tectignis
									team..</p>
							</div>
						</div>
						<!-- Single -->
						<div class="testimonial-item h-100">
							<div class="testimonial-single-header">
								<div class="thumbnail">
									<img src="assets/img/team/2.webp" alt="testimonial">
								</div>
								<div class="testimonial-title">
									<h4>pragati ghurup</h4>
									<!-- <p>Regular Clients</p> -->
									<div class="ratting-tes">
										<span><i class="fas fa-star"></i></span>
										<span><i class="fas fa-star"></i></span>
										<span><i class="fas fa-star"></i></span>
										<span><i class="fas fa-star"></i></span>
										<span><i class="fas fa-star"></i></span>
									</div>
								</div>
							</div>
							<div class="testimonial-single-footer h-100">
								<p>Best website designing company to work with. They will first understand your requirement, suggest you options, work on a solution & deliver the best product within decided timeframe. Friendly & knowledgable staff at a reasonable cost. Thanks for all your effort in designing Tectignis IT Solutions.</p>
							</div>
						</div>
						<!-- Single -->
						<div class="testimonial-item h-100">
							<div class="testimonial-single-header">
								<div class="thumbnail">
									<img src="assets/img/team/2.webp" alt="testimonial">
								</div>
								<div class="testimonial-title">
									<h4>Madhur Chipkar</h4>
									<p>Sea Pearl Khavane</p>
									<div class="ratting-tes">
										<span><i class="fas fa-star"></i></span>
										<span><i class="fas fa-star"></i></span>
										<span><i class="fas fa-star"></i></span>
										<span><i class="fas fa-star"></i></span>
										<span><i class="far fa-star"></i></span>
									</div>
								</div>
							</div>
							<div class="testimonial-single-footer h-100">
								<p>Tectignis IT Solution built my hotel business a great website that really helps current and potential customers get a good feel for my company. I have been very happy with the customer service and the attention to detail. </p>
							</div>
						</div>
						<!-- Single -->
						<div class="testimonial-item h-100">
							<div class="testimonial-single-header">
								<div class="thumbnail">
									<img src="assets/img/team/2.webp" alt="testimonial">
								</div>
								<div class="testimonial-title">
									<h4>Bhavesh Gaikar</h4>
									<!-- <p></p> -->
									<div class="ratting-tes">
										<span><i class="fas fa-star"></i></span>
										<span><i class="fas fa-star"></i></span>
										<span><i class="fas fa-star"></i></span>
										<span><i class="fas fa-star"></i></span>
										<span><i class="far fa-star"></i></span>
									</div>
								</div>
							</div>
							<div class="testimonial-single-footer h-100">
								<p>I have tried many digital marketing company in navi mumbai but never got the result
									oriented service for digital marketing. But from past 1 years I have seen a more
									changes in my SEO results almost all of my keyword are ranking on google and I am
									also happy with their creative work on my social media pages. Thank you tectignis
									team..</p>
							</div>
						</div>
						<!-- Single -->
						<div class="testimonial-item h-100">
							<div class="testimonial-single-header">
								<div class="thumbnail">
									<img src="assets/img/team/2.webp" alt="testimonial">
								</div>
								<div class="testimonial-title">
									<h4>Bhavesh Gaikar</h4>
									<!-- <p>Regular Clients</p> -->
									<div class="ratting-tes">
										<span><i class="fas fa-star"></i></span>
										<span><i class="fas fa-star"></i></span>
										<span><i class="fas fa-star"></i></span>
										<span><i class="fas fa-star"></i></span>
										<span><i class="far fa-star"></i></span>
									</div>
								</div>
							</div>
							<div class="testimonial-single-footer h-100">
								<p>I have tried many digital marketing company in navi mumbai but never got the result
									oriented service for digital marketing. But from past 1 years I have seen a more
									changes in my SEO results almost all of my keyword are ranking on google and I am
									also happy with their creative work on my social media pages. Thank you tectignis
									team..</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End Testimonial Area -->
	<!-- Start Latest blog Area -->
	<section class="section-padding-2 pt-0">
		<div class="container">
			<!-- Section Headding -->
			<div class="row mb-40">
				<div class="col-lg-8 offset-lg-2 text-center">
					<div class="section-headding">
						<h2>Latest Blog & News</h2>
						<p>The powerful and flexible theme for all kinds of businesses</p>
					</div>
				</div>
			</div>
			<div class="row">
				<!-- Single -->
				<?php
				$sql=mysqli_query($conn,"select * from blog limit 3");
				while($fetch=mysqli_fetch_array($sql)){
				?>
				<div class="col-lg-4 col-md-6 mb-30">
					<div class="blog-item">
						<!-- Thumbanil -->
						<div class="thumbnail">
							<a href="single.php">
								<img src="assets/img/blog/1.webp" alt="img">
							</a>
							<div class="date">
								<span>
									<?php $dnk=$fetch['created_at'];
								$date=strtotime($dnk);
								echo date("d  M, Y",$date);
								?>
								</span>
							</div>
						</div>
						<!-- Content -->
						<div class="content">
							<h3><a href="single.php">
									<?php echo $fetch['meta_title']; ?>
								</a></h3>
							<p>
								<?php echo $fetch['meta_description']; ?>
							</p>
						</div>
					</div>
				</div>
				<?php } ?>

			</div>
		</div>
	</section>
	<!-- End Latest blog Area -->

	<?php include "include/footer.php";
	 ?>

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
	<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
	<script src="https://www.jqueryscript.net/demo/Infinite-Scroller-Plugin-jQuery/infiniteslidev2.js"></script>
	<script type="text/javascript">
		$(function () {
			$('.slide_margin').infiniteslide();
		});
	</script>

	<script>
		$(document).ready(function () {
			$(window).on('scroll', function () {
				var a = $(window).scrollTop();
				if (a > 400) {
					$('.request-area').slideDown(300);
				} else {
					$('.request-area').slideUp(200);
				}
			});
		});

	</script>
</body>

<?php
if(isset($_POST['submit'])){
  $name=$_POST['name'];
  $email=$_POST['email'];
  $mob_no=$_POST['phone'];
  $subject=$_POST['subject'];
  $message=$_POST['message'];
 
  $sql=mysqli_query($conn,"INSERT INTO `request_quote`(`name`, `email`, `mob_no`, `subject`, `message`) VALUES ('$name','$email','$phone','$subject','$message')");
  if($sql==1){
    echo '<script>alert("Successfully submitted");</script>';
    header("location:index.php");
}else {
    echo '<script>alert("oops...somthing went wrong");</script>';
}
        
}
?>

</html>