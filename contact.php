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
        echo "<script>window.location='contact.php';</script>";
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
	<title>Tectignis - Contact</title>
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
</style>
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
						<h2>Contact Us</h2>
						<ul>
							<li><a href="index.php">Home</a></li>
							<li>Contact Us</li>
						</ul>
					</div>
				</div>
			</div>
		</div> 
	</section>
	<!-- End Breadcrumb Area -->
	<section class="section-padding">
		<div class="container">
			<div class="row mb-20">
			<?php $sql=mysqli_query($conn,"select * from company");
				while($arr=mysqli_fetch_array($sql)){
				?>
				<!-- Single -->
				<div class="col-lg-4 col-sm-6 mb-30">
					<div class="about_item_box text-center">
						<div class="icon text-gradient">
							<i class="bi bi-envelope-open-fill"></i>
						</div>
						<h4>Email</h4>
						<a href="mailto:<?php echo $arr['email'] ?>"><?php echo $arr['email'] ?></a>
					
					</div>
				</div>
				<!-- Single -->
				<div class="col-lg-4 col-sm-6 mb-30">
					<div class="about_item_box text-center">
						<div class="icon text-gradient">
							<i class="bi bi-telephone-inbound-fill"></i>
						</div>
						<h4>Phone</h4>
						<a href="tel:<?php echo $arr['mob_no1'] ?>">+91 <?php echo $arr['mob_no1'] ?></a>
						<a href="tel:<?php echo $arr['mob_no2'] ?>">+91 <?php echo $arr['mob_no2'] ?></a>
					</div>
				</div>
				<!-- Single -->
				<div class="col-lg-4 col-sm-6 mb-30">
					<div class="about_item_box text-center">
						<div class="icon text-gradient">
							<i class="bi bi-geo-alt-fill"></i>
						</div>
						<h4>Location</h4>
						<a href="http://maps.google.com/?q=<?php echo $arr['address'] ?>" target="_blank"><?php echo $arr['address'] ?></a>
					</div>
				</div>
				<?php } ?>
			</div>
			<div class="row mb-40">
				<div class="col-lg-8 offset-lg-2 text-center">
					<div class="section-headding">
						<h2>Get In Touch.</h2>
						<p>The powerful and flexible theme for all kinds of businesses</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-7 offset-lg-2">
					<div class="contact-form">
                        <form id="contact-form" action="contactDB.php" method="POST">
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
									<input type="text" minlength="10" maxlength="10" class="form_control phone1" placeholder="Phone" name="phone" id="phone1" required>
									<span id="phone1Span" class="mb-4"></span>
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
                                        <textarea name="message" placeholder="Write Message" spellcheck="false" required></textarea>
                                        <i class="fas fa-pen"></i>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button type="submit" name="submit" id="submit">Send Message</button>
                                </div>
                            </div>
                        </form>
                        <p class="ajax-response"></p>
                    </div>
				</div>
			</div>
		</div>
	</section>

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
             $("#phone1Span").hide();
	    $(".phone1").keyup(function(){
	     mobile_check();
	   });
	   function mobile_check(){
		   let mobileno=$(".phone1").val();
		   let vali =/^\d{10}$/; 
		   if(!vali.test(mobileno)){
        validenqtMobile="no";
			    $("#phone1Span").show().html("*Invalid Mobile No").css("color","red").focus();
				mobile_err=false;
			 return false;
		   }
		   else{
        validenqtMobile="yes";
		       $("#phone1Span").hide(); 
		   }
	   }

	   $("#submit").click(function(){
       mobile_err=true;
             mobile_check();
			   
			   if((mobile_err=true)){
			      return true;
			   }
			   else{return false;}
		  });

        let  validenqtMobile;

 let submitenant = document.getElementById("submit");
     submitenant.addEventListener("click", function(){

     if(validenqtMobile == "no"){
         swal("Oops...", "Please fill all the fields", "error");
     }
         else{
             swal("Saved!", " Thank you for contacting us we will reply as soon as possible", "success");
         }
     });
        </script>
</body>
</html>