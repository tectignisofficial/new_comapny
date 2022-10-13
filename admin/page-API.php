<?php
include("include/config.php");

if(isset($_POST['submit-google-analytics'])){

 
  $code=$_POST['code'];
  $sql="UPDATE `google_analysis` SET `code`='$code' ";
  if (mysqli_query($conn, $sql)){
    header("location:page-API.php");
 } else {
    echo "connection failed !";
 }
 
}

if(isset($_POST['submit-razorpay'])){

 
    $secret_key=$_POST['secret_key'];
    $upi_key=$_POST['upi_key'];
    $sql="UPDATE `razorpay` SET `secret_key`='$secret_key',`upi_key`='$upi_key' ";
    if (mysqli_query($conn, $sql)){
      header("location:page-API.php");
   } else {
      echo "connection failed !";
   }
   
  }
  

?>


<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=0,minimal-ui">
    <meta name="description" content="Vuexy admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Vuexy admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <title>Security - Vuexy - Bootstrap HTML admin template</title>
    <link rel="apple-touch-icon" href="app-assets/images/ico/apple-icon-120.png">
    <link rel="shortcut icon" type="image/x-icon" href="app-assets/images/ico/favicon.ico">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/vendors.min.css">
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/forms/select/select2.min.css">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="app-assets/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/bootstrap-extended.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/colors.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/components.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/themes/dark-layout.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/themes/bordered-layout.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/themes/semi-dark-layout.css">

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="app-assets/css/core/menu/menu-types/vertical-menu.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/plugins/forms/form-validation.css">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <!-- END: Custom CSS-->

</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern  navbar-floating footer-static  " data-open="click" data-menu="vertical-menu-modern" data-col="">

<?php include "include/header.php"; ?>
	<?php include "include/sidebar.php"; ?>


    <!-- BEGIN: Content-->
    <div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper container-xxl p-0">
            <div class="content-header row">
                <div class="content-header-left col-md-9 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h2 class="content-header-title float-start mb-0">Security</h2>
                            <div class="breadcrumb-wrapper">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">Home</a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="#">Account Settings</a>
                                    </li>
                                    <li class="breadcrumb-item active">Security
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="content-header-right text-md-end col-md-3 col-12 d-md-block d-none">
                    <div class="mb-1 breadcrumb-right">
                        <div class="dropdown">
                            <button class="btn-icon btn btn-primary btn-round btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i data-feather="grid"></i></button>
                            <div class="dropdown-menu dropdown-menu-end"><a class="dropdown-item" href="app-todo.html"><i class="me-1" data-feather="check-square"></i><span class="align-middle">Todo</span></a><a class="dropdown-item" href="app-chat.html"><i class="me-1" data-feather="message-square"></i><span class="align-middle">Chat</span></a><a class="dropdown-item" href="app-email.html"><i class="me-1" data-feather="mail"></i><span class="align-middle">Email</span></a><a class="dropdown-item" href="app-calendar.html"><i class="me-1" data-feather="calendar"></i><span class="align-middle">Calendar</span></a></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-body">
                <div class="row">
                    <div class="col-12">
                    <ul class="nav nav-pills mb-2">
                            <!-- account -->
                            <li class="nav-item">
                                <a class="nav-link " href="page-account.php">
                                    <i data-feather="user" class="font-medium-3 me-50"></i>
                                    <span class="fw-bold">Account</span>
                                </a>
                            </li>
                            <!-- security -->
                            <li class="nav-item">
                                <a class="nav-link active" href="page-API.php">
                                    <i data-feather="lock" class="font-medium-3 me-50"></i>
                                    <span class="fw-bold">API</span>
                                </a>
                            </li>
                            <!-- connection -->
                            <li class="nav-item">
                                <a class="nav-link" href="page-connection.php">
                                    <i data-feather="link" class="font-medium-3 me-50"></i>
                                    <span class="fw-bold">Connections</span>
                                </a>
                            </li>
                        </ul>


                        <!-- security -->

                        <!-- Google Analytics -->

                        <div class="card">
                            <div class="card-header border-bottom">
                                <h4 class="card-title">Google Analytics</h4>
                            </div>
                            <div class="card-body pt-1">
                            <form class="needs-validation" method="POST" novalidate>
                                        <div class="row g-1">
                                        <?php 
                        
                        $sql=mysqli_query($conn,"select * from google_analysis");
                       
                         while($arr=mysqli_fetch_array($sql)){
                        ?>
                                            <div class="col-md-4 col-12 mb-3 position-relative">
                                                <label class="form-label" for="validationTooltip01">Google Analytics Code</label>
                                                <input type="text" class="form-control" name="code" id="code" placeholder="enter code"  value="<?php echo $arr['code'];?> " required />
                                                
                                            </div>
                                            <?php   } ?>
                                        </div>
                                        <button class="btn btn-primary" name="submit-google-analytics" type="submit">Submit</button>
                                    </form>
                            </div>
                        </div>
<!-- Tag Manager -->

<div class="card">
                            <div class="card-header border-bottom">
                                <h4 class="card-title">Tag Manager</h4>
                            </div>
                            <div class="card-body pt-1">
                            <form class="needs-validation" method="POST" novalidate>
                                        <div class="row g-1">
                                        <?php 
                        
                        $sql=mysqli_query($conn,"select * from razorpay");
                       
                         while($arr=mysqli_fetch_array($sql)){
                        ?>
                                            
                                            <div class="col-md-4 col-12 mb-3 position-relative">
                                            <label class="form-label" for="validationTooltip01">Secret Key</label>
                                            <div class=" input-group input-group-merge form-password-toggle">
                                           
                                            <input class="form-control form-control-merge" id="secret_key" type="password" name="secret_key" value="<?php echo $arr['secret_key'];?>"  aria-describedby="login-password" tabindex="2" /><span class="input-group-text cursor-pointer"><i data-feather="eye"></i></span>
                                        </div>
                                            </div>

                                            <div class="col-md-4 col-12 mb-3 position-relative">
                                            <label class="form-label" for="validationTooltip02">UPI Key </label>
                                        <div class=" input-group input-group-merge form-password-toggle">
                                     
                                            <input class="form-control form-control-merge" id="upi_key" type="password" name="upi_key" value="<?php echo $arr['upi_key'];?>"  aria-describedby="login-password" tabindex="2" /><span class="input-group-text cursor-pointer"><i data-feather="eye"></i></span>
                                        </div>
                                            </div>

                                           


                                            
                                            <?php   } ?>
                                        </div>
                                        <button class="btn btn-primary" name="submit-razorpay" type="submit">Submit</button>
                                    </form>
                            </div>
                        </div>

                        <!-- Razorpay -->
                        
                        <div class="card">
                            <div class="card-header border-bottom">
                                <h4 class="card-title">Razorpay</h4>
                            </div>
                            <div class="card-body pt-1">
                            <form class="needs-validation" method="POST" novalidate>
                                        <div class="row g-1">
                                        <?php 
                        
                        $sql=mysqli_query($conn,"select * from razorpay");
                       
                         while($arr=mysqli_fetch_array($sql)){
                        ?>
                                            
                                            <div class="col-md-4 col-12 mb-3 position-relative">
                                            <label class="form-label" for="validationTooltip01">Secret Key</label>
                                            <div class=" input-group input-group-merge form-password-toggle">
                                           
                                            <input class="form-control form-control-merge" id="secret_key" type="password" name="secret_key" value="<?php echo $arr['secret_key'];?>"  aria-describedby="login-password" tabindex="2" /><span class="input-group-text cursor-pointer"><i data-feather="eye"></i></span>
                                        </div>
                                            </div>

                                            <div class="col-md-4 col-12 mb-3 position-relative">
                                            <label class="form-label" for="validationTooltip02">UPI Key </label>
                                        <div class=" input-group input-group-merge form-password-toggle">
                                     
                                            <input class="form-control form-control-merge" id="upi_key" type="password" name="upi_key" value="<?php echo $arr['upi_key'];?>"  aria-describedby="login-password" tabindex="2" /><span class="input-group-text cursor-pointer"><i data-feather="eye"></i></span>
                                        </div>
                                            </div>

                                           


                                            
                                            <?php   } ?>
                                        </div>
                                        <button class="btn btn-primary" name="submit-razorpay" type="submit">Submit</button>
                                    </form>
                            </div>
                        </div>

                        
                        <!-- Facebook Pixel -->

                        <div class="card">
                            <div class="card-header border-bottom">
                                <h4 class="card-title">Facebook Pixel</h4>
                            </div>
                            <div class="card-body pt-1">
                            <form class="needs-validation" method="POST" novalidate>
                                        <div class="row g-1">
                                        <?php 
                        
                        $sql=mysqli_query($conn,"select * from razorpay");
                       
                         while($arr=mysqli_fetch_array($sql)){
                        ?>
                                            
                                            <div class="col-12 mb-3 position-relative">
                                            <label class="form-label" for="validationTooltip01">Secret Key</label>
                                            <div class=" input-group input-group-merge form-password-toggle">
                                           
                                            <textarea class="form-control form-control-merge" id="secret_key" type="password" name="secret_key" value=""  aria-describedby="login-password" tabindex="2" ><?php echo $arr['secret_key'];?></textarea>
                                        </div>
                                            </div>

                                           

                                           


                                            
                                            <?php   } ?>
                                        </div>
                                        <button class="btn btn-primary" name="submit-razorpay" type="submit">Submit</button>
                                    </form>
                            </div>
                        </div>

                

                        <!--/ security -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END: Content-->

    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>


    <?php include "include/footer.php" ?>


    <!-- BEGIN: Vendor JS-->
    <script src="app-assets/vendors/js/vendors.min.js"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="app-assets/vendors/js/forms/select/select2.full.min.js"></script>
    <script src="app-assets/vendors/js/forms/validation/jquery.validate.min.js"></script>
    <script src="app-assets/vendors/js/forms/cleave/cleave.min.js"></script>
    <script src="app-assets/vendors/js/forms/cleave/addons/cleave-phone.us.js"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="app-assets/js/core/app-menu.js"></script>
    <script src="app-assets/js/core/app.js"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="app-assets/js/scripts/pages/modal-two-factor-auth.js"></script>
    <script src="app-assets/js/scripts/pages/page-account-settings-security.js"></script>
    <!-- END: Page JS-->

    <script>
        $(window).on('load', function() {
            if (feather) {
                feather.replace({
                    width: 14,
                    height: 14
                });
            }
        })
    </script>
</body>
<!-- END: Body-->

</html>