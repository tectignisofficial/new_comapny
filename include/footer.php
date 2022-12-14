<!-- Start Footer Area -->
<footer class="footer">
	<!-- Footer Top -->
	<div class="footer-top pt-70 pb-20">
		<div class="container">
			<div class="row">
				<?php $sql=mysqli_query($conn,"select * from company");
				$arr=mysqli_fetch_array($sql)
				?>
				<!-- Single -->
				<div class="col-lg-3 col-sm-6 mb-30">
					<div class="f-widgets-item">
						<div class="f-logo">
							<a href="#">
								<img src="assets/img/tlogo.png" width="70%" alt="logo">
							</a>
						</div>

						<ul>
							<li>
								<a
								href="http://maps.google.com/?q=<?php echo $arr['address'] ?>"
								target="_blank">	<i class="bi bi-geo-alt-fill"></i> <?php echo $arr['address'] ?></a>
								</li>

							<li> <i class="bi bi-telephone-inbound"></i> <a href="tel:<?php echo $arr['mob_no1'] ?>">+91
									<?php echo $arr['mob_no1'] ?>
								</a>
							</li>
							<li><i class="bi bi-telephone-inbound"></i> <a href="tel:<?php echo $arr['mob_no2'] ?>">+91
									<?php echo $arr['mob_no2'] ?>
								</a>
							</li>
							<li><i class="bi bi-envelope"></i> <a
									href="mailto:<?php echo $arr['email'] ?>"><?php echo $arr['email'] ?></a></li>
						</ul>
					</div>
					<div class="footer_social mt-2" style="float:left;">
						<ul>
							<li><img src="assets/img/iso1.webp" width="100" alt=""></i></li>
							<li><img src="assets/img/iso.webp" width="90" alt=""></li>
						</ul>
					</div>
				</div>
				<!-- Single -->
				<div class="col-lg-3 col-sm-6 mb-30">
					<div class="f-widgets-item">
						<h3>Services</h3>
						<ul>
							<li><a href="website-designing.php">Website Designing</a></li>
							<li><a href="ecommerce-website-design-development.php">Ecommerce Website</a></li>
							<li><a href="software-development.php">Software Development</a></li>
							<li><a href="mobile-app-development.php">Mobile App Development</a></li>
							<li><a href="graphics-designing.php">Graphic Designing</a></li>
							<li><a href="digital-marketing.php">Digital Marketing</a></li>
							<li><a href="hardware-networking.php">Hardware Networking</a></li>
							<li><a href="cctv-camera.php">CCTV camera</a></li>
							<li><a href="it-consulting.php">IT Consulting</a></li>
						</ul>
					</div>
				</div>
				<!-- Single -->
				<div class="col-lg-3 col-sm-6 mb-30">
					<div class="f-widgets-item">
						<h3>Company</h3>
						<ul>
							<li><a href="about.php">About Us</a></li>
							<!-- <li><a href="careers.php">Careers<span>We're hiring</span></a></li> -->
							<li><a href="ceo-govind-bavkar.php">CEO</a></li>
							<li><a href="team.php">Team</a></li>
							<li><a href="portfolio.php">Portfolio </a></li>
							<li><a href="contact.php">Contact Us</a></li>
							<!-- <li><a href="blog.php">Blog</a></li> -->
						</ul>
					</div>
				</div>
				<!-- Single -->
				<div class="col-lg-3 col-sm-6 mb-30">
					<div class="f-widgets-item">
						<h3>Useful Links</h3>
						<ul>
							
							<li><a href="terms-&-condition.php">Terms and Condition</a></li>
							<li><a href="privacy-policy.php">Privacy Policy</a></li>
							<li><a href="refund-policy.php">Refund Policy</a></li>
						</ul>
					</div>
					<?php $sql=mysqli_query($conn,"select * from connectivity");
				$row=mysqli_fetch_array($sql)
				?>
					<div class="footer_social mt-2" style="float:left;">
						<ul>
							<li><a href="<?php echo $row['facebook_link'] ?>" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
							<li><a href="<?php echo $row['twitter_link'] ?>" target="_blank"><i class="fab fa-twitter"></i></a></li>
							<li><a href="<?php echo $row['instagram_link'] ?>" target="_blank"><i class="fab fa-instagram"></i></a></li>
							<li><a href="<?php echo $row['linkedin_link'] ?>" target="_blank"><i class="fab fa-linkedin"></i></a></li>

						</ul>
					</div>
				</div>
			</div>

		</div>
	</div>
	<!-- Footer Bottom -->
	<?php $sql=mysqli_query($conn,"select * from account");
				$ar1=mysqli_fetch_array($sql)
				?>
	
	<div class="footer-bottom pt-30 pb-30">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 align-self-center">
					<div class="copy-f-text">
						<p>??2022 <a><?php echo $ar1['companyName'] ?></a>. All Rights Reserved | CIN -
							<?php echo $ar1['CIN'] ?> | GST - <?php echo $ar1['GST'] ?></p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div id="footer" class="request-area">


		<a class="footer-button" data-bs-toggle="modal" data-bs-target="#exampleModal">
			Request A Quote
		</a>
		<a class="whatsApp_icon"
			href="https://api.whatsapp.com/send?phone=+919987805688&amp;text=Hello,%20I%20am%20interested%20in%20your%20services."
			rel="nofollow" target="_blank">
			<i class="fab fa-whatsapp"></i>
		</a>

		<a class="scroll-area" id="scroll"><i class="bi bi-arrow-up"></i></a>




	</div>
	
</footer>


<!-- End Footer Area -->