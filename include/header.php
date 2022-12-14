<?php
$page=substr($_SERVER['SCRIPT_NAME'],strrpos($_SERVER['SCRIPT_NAME'],"/")+1);
?>

<style>
	/* Chrome, Safari, Edge, Opera */
input::-webkit-outer-spin-button,
input::-webkit-inner-spin-button {
  -webkit-appearance: none;
  margin: 0;
}

/* Firefox */
input[type=number] {
  -moz-appearance: textfield;
}
.menu-active{
	color:#ffffff;
}
</style>	
	
	<!-- Start Header Area -->
	<header class="header">
		<div class="container">
			<div class="row">
				<!-- Logo -->
				<div class="col-lg-3 align-self-center">
					<div class="logo">
						<a href="index.php">
							<img src="assets/img/logo.png" alt="Tectignis">
						</a>
					</div>
					<div class="canvas_open">
						<a href="javascript:void(0)">
							<span></span>
							<span></span>
							<span></span>
						</a>
					</div>
				</div>
				<!-- Right -->
				<div class="col-lg-9">
					<!-- Header Right Button -->
					<div class="hr_btn">
						<a class="button-2" data-bs-toggle="modal" data-bs-target="#exampleModal">Get Quote</a>
					</div>
					<!-- Menu -->
					<div class="menu">
						<nav>
							<ul>
								<li class="menu <?= $page == 'index.php' ? 'menu-active':'' ?>">
								<a href="index.php">Home</a>
								</li>
								<li class="menu-item-has-children">
									<a class="nav-link <?= $page == 'about.php' ? 'active':'' ?>" href="about.php">About Us</a>
									<ul>
										<li><a class="<?= $page == 'ceo-govind-bavkar.php' ? 'active':'' ?>" href="ceo-govind-bavkar.php">CEO</a></li>
										<li><a class="<?= $page == 'team.php' ? 'nav-active':'' ?>" href="team.php">Team</a></li>
									</ul>
								</li>
								<!-- <li class="menu-item-has-children">
									<a href="services.html">Services</a>
									<ul>
										<li><a href="website-designing.html">Website Designing</a></li>
										<li><a href="ecommerce-website-design-development.html">Ecommerce Website</a></li>
										<li><a href="software-development.html">Software Development</a></li>
										<li><a href="mobile-app-development.html">Mobile App Development</a></li>
										<li><a href="digital-marketing.html">Digital Marketing</a></li>
										<li><a href="graphics-designing.html">Graphics Designing</a></li>
										<li><a href="hardware-networking.html">Hardware Networking</a></li>
										<li><a href="cctv-camera.html">CCTV Camera</a></li>
										<li><a href="it-consulting.html">IT Consulting</a></li>
									</ul>
								</li> -->
								<li class="nav-dropdown menu-item-has-children"><a class="nav-link <?= $page == 'services.php' ? 'active':'' ?>" href="services.php">Services <i
											class="icon-down-arrow"></i></a>
									<div class="mega-menu tech-menu py-4">
										<ul class="menu-col">
											<li class="nav-heading"><span><i class="far fa-eye"></i></span>
												Web<br>Technologies</li>
											<li><a class="nav-link <?= $page == 'website-designing.php' ? 'active':'' ?>" href="website-designing.php">Website Designing</a></li>
											<li><a class="nav-link <?= $page == 'ecommerce-website-design-development.php' ? 'active':'' ?>" href="ecommerce-website-design-development.php">Ecommerce
													Website</a></li>
										</ul>
										<ul class="menu-col">
											<li class="nav-heading"><span><i class="far fa-eye"></i></span>
												Software & <br>App Development</li>
											<li><a class="nav-link <?= $page == 'mobile-app-development.php' ? 'active':'' ?>" href="mobile-app-development.php">Mobile App Development</a></li>
											<li><a class="nav-link <?= $page == 'software-development.php' ? 'active':'' ?>" href="software-development.php">Software Development</a></li>
										</ul>
										<ul class="menu-col">
											<li class="nav-heading"><span><i class="far fa-eye"></i></span>
												Marketing<br>& Graphics</li>
											<li><a class="nav-link <?= $page == 'digital-marketing.php' ? 'active':'' ?>" href="digital-marketing.php">Digital Marketing</a></li>
											<li><a class="nav-link <?= $page == 'graphics-designing.php' ? 'active':'' ?>" href="graphics-designing.php">Graphics Designing</a></li>
										</ul>
										<ul class="menu-col">
											<li class="nav-heading"><span><i class="far fa-eye"></i></span>
												Other<br>Technologies</li>
											<li><a class="nav-link <?= $page == 'hardware-networking.php' ? 'active':'' ?>" href="hardware-networking.php">Hardware Networking</a></li>
											<li><a class="nav-link <?= $page == 'cctv-camera.php' ? 'active':'' ?>" href="cctv-camera.php">CCTV Camera</a></li>
											<li><a class="nav-link <?= $page == 'it-consulting.php' ? 'active':'' ?>" href="it-consulting.php">IT Consulting</a></li>
										</ul>
										<!-- <ul class="menu-col">
											<li class="nav-heading"><span class="icon-mobile-app-Android"></span>
												Mobile<br>Technologies</li>
											<li><a href="swift-mobile-app-development-services">Swift</a></li>
											<li><a href="jquery-mobile-app-development">jQuery Mobile</a></li>
											<li><a href="ionic-development-services">Ionic Development</a></li>
											<li><a href="flutter-app-development-services">Flutter App Development</a>
											</li>
										</ul> -->
										<!-- <ul class="menu-bottom">
											<li><a href="assets/images/webguru-infosystems.pdf" target="_blank"><span
														class="icon-brochure"></span> Brochure</a></li>
											<li><a href="team"><span class="icon-team"></span>Our Team</a></li>
											<li><a href="about-us"><span class="icon-user"></span>About Us</a></li>
											<li><a href="services"><span class="icon-gear"></span>Services</a></li>
										</ul> -->
									</div>
								</li>
								<li class="menu <?= $page == 'pricing.php' ? 'menu-active':'' ?>">
								<a class="nav-link <?= $page == 'pricing.php' ? 'active':'' ?>" href="pricing.php">Pricing</a>
								</li>
								<li>
								<a class="nav-link <?= $page == 'portfolio.php' ? 'active':'' ?>" href="portfolio.php">Portfolio</a>
								</li>
								<!-- <li>
									<a href="blog.php">Blog</a>
								</li> -->
								<li>
								<a class="nav-link <?= $page == 'contact.php' ? 'active':'' ?>" href="contact.php">Contact Us</a>
								</li>
							</ul>
						</nav>
					</div>
				</div>
			</div>
		</div>
	</header>
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
						<img src="assets/img/logo.webp" alt="logo" />
					</a>
				</div>
				<div id="menu" class="text-left">
					<ul class="offcanvas_main_menu">
						<li>
						<li><a class="nav-link <?= $page == 'index.php' ? 'active':'' ?>" href="index.php">Home</a></li>

						</li>
						<li class="menu-item-has-children">
						<a class="nav-link <?= $page == 'about.php' ? 'active':'' ?>" href="about.php">About Us</a>
							<ul class="sub-menu">
						<a class="nav-link <?= $page == 'ceo-govind-bavkar.php' ? 'active':'' ?>" href="ceo-govind-bavkar.php">CEO</a>
						<a class="nav-link <?= $page == 'team.php' ? 'active':'' ?>" href="team.php">Teams</a>
							</ul>
						</li>
						<li class="menu-item-has-children">
						<a class="nav-link <?= $page == 'services.php' ? 'active':'' ?>" href="services.php">Services</a>
							<ul class="sub-menu">
								<li><a class="nav-link <?= $page == 'website-designing.php' ? 'active':'' ?>" href="website-designing.php">Website Designing</a></li>
								<li><a class="nav-link <?= $page == 'ecommerce-website-design-development.php' ? 'active':'' ?>" href="ecommerce-website-design-development.php">Ecommerce Website</a></li>
								<li><a class="nav-link <?= $page == 'software-development.php' ? 'active':'' ?>" href="software-development.php">Software Development</a></li>
								<li><a class="nav-link <?= $page == 'mobile-app-development.php' ? 'active':'' ?>" href="mobile-app-development.php">Mobile App Development</a></li>
								<li><a class="nav-link <?= $page == 'digital-marketing.php' ? 'active':'' ?>" href="digital-marketing.php">Digital Marketing</a></li>
								<li><a class="nav-link <?= $page == 'graphics-designing.php' ? 'active':'' ?>" href="graphics-designing.php">Graphics Designing</a></li>
								<li><a class="nav-link <?= $page == 'hardware-networking.php' ? 'active':'' ?>" href="hardware-networking.php">Hardware Networking</a></li>
								<li><a class="nav-link <?= $page == 'cctv-camera.php' ? 'active':'' ?>" href="cctv-camera.php">CCTV Camera</a></li>
								<li><a class="nav-link <?= $page == 'it-consulting.php' ? 'active':'' ?>" href="it-consulting.php">IT Consulting</a></li>
							</ul>
						</li>
						<li>
							<a class="nav-link <?= $page == 'pricing.php' ? 'active':'' ?>" href="pricing.php">Pricing</a>
						</li>
						<li>
							<a class="nav-link <?= $page == 'portfolio.php' ? 'active':'' ?>" href="portfolio.php">Portfolio</a>
						</li>
						<!-- <li>
							<a href="blog.php">Blog</a>
						</li> -->
						<li><a class="nav-link <?= $page == 'contact.php' ? 'active':'' ?>" href="contact.php">Contact</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
						<h2 class="modal-title" id="exampleModalLabel" style="font-size: x-large;">Request A Quote</h2>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body">
				<form method="POST">
					<div class="contact-form">
					
							<div class="row">
								<div class="col-md-6">
									<div class="single-input">
										<input type="text" name="name" placeholder="Your Name" required>
										<i class="fas fa-user"></i>
									</div>
								</div>
								<div class="col-md-6">
									<div class="single-input">
										<input type="email" name="email" placeholder="Your Email" required>
										<i class="far fa-envelope"></i>
									</div>
								</div>
								<div class="col-md-6">
									<div class="single-input">
										<input type="number" name="phone" placeholder="Your Phone" maxlength="10" minlength="10" required>
										<i class="fas fa-mobile-alt"></i>
									</div>
								</div>
								<div class="col-md-6">
									<div class="single-input">
										<input type="text" name="subject" placeholder="Your Subjects" required>
										<i class="fas fa-file-alt"></i>
									</div>
								</div>
								
								<div class="col-12">
									<div class="single-input">
										<textarea name="message" placeholder="Write Message"
											spellcheck="false" required></textarea>
										<i class="fas fa-pen"></i>
									</div>
								</div>
								<div class="col-12">
									<button type="submit" name="submit">Send Message</button>
								</div>
							</div>
						
						<!-- <p class="ajax-response"></p> -->
					</div>
</form>
				</div>

			</div>
		</div>
	</div>

	<!--offcanvas menu area end-->
