<?php

session_start();

$id=$_SESSION['id'];
if(!isset($_SESSION['id']))
{                                                                                       
  header("location:adminlogin.php");
}

include("include/config.php");

if(isset($_POST['update'])){

$facebook_link=$_POST['facebook_link'];

  $sql="UPDATE `connectivity` SET `facebook_link`='$facebook_link' ";

  if (mysqli_query($conn, $sql)){
    header("location:page-connection.php");
 } else {
    echo "connection failed !";
 }
 
}

if(isset($_POST['update1'])){

    $twitter_link=$_POST['twitter_link'];
    
      $sql="UPDATE `connectivity` SET `twitter_link`='$twitter_link' ";
      
      if (mysqli_query($conn, $sql)){
        header("location:page-connection.php");
     } else {
        echo "connection failed !";
     }
     
    }

    if(isset($_POST['update2'])){

        $linkedin_link=$_POST['linkedin_link'];
        
          $sql="UPDATE `connectivity` SET `linkedin_link`='$linkedin_link'";
          
          if (mysqli_query($conn, $sql)){
            header("location:page-connection.php");
         } else {
            echo "connection failed !";
         }
         
        }

        if(isset($_POST['update3'])){

            $dribbble_link=$_POST['dribbble_link'];
            
              $sql="UPDATE `connectivity` SET `dribbble_link`='$dribbble_link' ";
              
              if (mysqli_query($conn, $sql)){
                header("location:page-connection.php");
             } else {
                echo "connection failed !";
             }
             
            }

            if(isset($_POST['update4'])){

                $instagram_link=$_POST['instagram_link'];
                
                  $sql="UPDATE `connectivity` SET `instagram_link`='$instagram_link' ";
                  
                  if (mysqli_query($conn, $sql)){
                    header("location:page-connection.php");
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
    <meta name="description"
        content="Vuexy admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords"
        content="admin template, Vuexy admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <title>Connections - Vuexy - Bootstrap HTML admin template</title>
    <link rel="apple-touch-icon" href="app-assets/images/ico/apple-icon-120.png">
    <link rel="shortcut icon" type="image/x-icon" href="app-assets/images/ico/favicon.ico">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600"
        rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/vendors.min.css">
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
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <!-- END: Custom CSS-->

</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern  navbar-floating footer-static  " data-open="click"
    data-menu="vertical-menu-modern" data-col="">

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
                            <h2 class="content-header-title float-start mb-0">Connections</h2>
                            <div class="breadcrumb-wrapper">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">Home</a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="#">Account Settings</a>
                                    </li>
                                    <li class="breadcrumb-item active">Connection
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="content-header-right text-md-end col-md-3 col-12 d-md-block d-none">
                    <div class="mb-1 breadcrumb-right">
                        <div class="dropdown">
                            <button class="btn-icon btn btn-primary btn-round btn-sm dropdown-toggle" type="button"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i
                                    data-feather="grid"></i></button>
                            <div class="dropdown-menu dropdown-menu-end"><a class="dropdown-item"
                                    href="app-todo.html"><i class="me-1" data-feather="check-square"></i><span
                                        class="align-middle">Todo</span></a><a class="dropdown-item"
                                    href="app-chat.html"><i class="me-1" data-feather="message-square"></i><span
                                        class="align-middle">Chat</span></a><a class="dropdown-item"
                                    href="app-email.html"><i class="me-1" data-feather="mail"></i><span
                                        class="align-middle">Email</span></a><a class="dropdown-item"
                                    href="app-calendar.html"><i class="me-1" data-feather="calendar"></i><span
                                        class="align-middle">Calendar</span></a></div>
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
                                <a class="nav-link" href="page-account.php">
                                    <i data-feather="user" class="font-medium-3 me-50"></i>
                                    <span class="fw-bold">Account</span>
                                </a>
                            </li>
                            <!-- security -->
                            <li class="nav-item">
                                <a class="nav-link" href="page-API.php">
                                    <i data-feather="lock" class="font-medium-3 me-50"></i>
                                    <span class="fw-bold">API</span>
                                </a>
                            </li>
                            <!-- connection -->
                            <li class="nav-item">
                                <a class="nav-link active" href="page-connection.php">
                                    <i data-feather="link" class="font-medium-3 me-50"></i>
                                    <span class="fw-bold">Connections</span>
                                </a>
                            </li>
                        </ul>


                        <!-- connection -->

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header border-bottom">
                                        <h4 class="card-title">Connected accounts</h4>
                                    </div>
                                    <div class="card-body pt-2">
                                        <p>Display content from social accounts on your site</p>
                                        <!-- Social Accounts -->
                                        <form method="post">
                                            <?php 
                        
                        $sql=mysqli_query($conn,"select * from connectivity");
                       
                          $arr=mysqli_fetch_array($sql);
                        ?>
                                            <div class="d-flex mt-2">
                                                <div class="flex-shrink-0">
                                                    <img src="app-assets/images/icons/social/facebook.png"
                                                        alt="facebook" class="me-1" height="38" width="38" />
                                                </div>
                                                <div class="d-flex justify-content-between flex-grow-1">
                                                        <div class="col-md-12 col-lg-10 col-sm-12  position-relative">

                                                            <input type="text" class="form-control" name="facebook_link"
                                                                id="facebook_link" placeholder="enter link "
                                                                value="<?php echo $arr['facebook_link'];?>" required />

                                                        </div>
                                                 
                                                    <div class="mt-50 mt-sm-0">
                                                        <button class="btn btn-primary" name="update"
                                                            type="update">Update</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                        <form method="post">
                                            
                                            <div class="d-flex align-items-start mt-2">
                                                <div class="flex-shrink-0">
                                                    <img src="app-assets/images/icons/social/twitter.png" alt="twitter"
                                                        class="me-1" height="38" width="38" />
                                                </div>
                                                <div class="d-flex justify-content-between flex-grow-1">
                                                    <div class="col-md-12 col-lg-10 col-sm-12  position-relative">

                                                            <input type="text" class="form-control" name="twitter_link"
                                                                id="twitter_link" placeholder="enter link "
                                                                value="<?php echo $arr['twitter_link'];?>" required />

                                                        </div>
                                                    
                                                    <div class="mt-50 mt-sm-0">
                                                        <button class="btn btn-primary" name="update1"
                                                            type="update">Update</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                        <form method="post">
                                           
                                            <div class="d-flex mt-2">
                                                <div class="flex-shrink-0">
                                                    <img src="app-assets/images/icons/social/linkedin.png"
                                                        alt="linkedin" class="me-1" height="38" width="38" />
                                                </div>
                                                <div class="d-flex justify-content-between flex-grow-1">
                                                    <div class="col-md-12 col-lg-10 col-sm-12  position-relative">
                                                        <input type="text" class="form-control" name="linkedin_link"
                                                            id="linkedin_link" placeholder="enter link "
                                                            value="<?php echo $arr['linkedin_link'];?>" required />
                                                    </div>
                                                    <div class="mt-50 mt-sm-0">
                                                        <button class="btn btn-primary" name="update2"
                                                            type="update">Update</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                        <form method="post">
                                           
                                            <div class="d-flex mt-2">
                                                <div class="flex-shrink-0">
                                                    <img src="app-assets/images/icons/social/instagram.png"
                                                        alt="instagram" class="me-1" height="38" width="38" />
                                                </div>
                                                <div class="d-flex justify-content-between flex-grow-1">
                                                    <div class="col-md-12 col-lg-10 col-sm-12  position-relative">
                                                        <input type="text" class="form-control" name="instagram_link"
                                                            id="instagram_link" placeholder="enter link "
                                                            value="<?php echo $arr['instagram_link'];?>" required />
                                                    </div>
                                                    <div class="mt-50 mt-sm-0">
                                                        <button class="btn btn-primary" name="update4"
                                                            type="update">Update</button>
                                                    </div>
                                                </div>
                                            </div>
                                           
                                        </form>
                                        <form method="post">
                                           
                                            <div class="d-flex mt-2">
                                                <div class="flex-shrink-0">
                                                    <img src="app-assets/images/icons/social/dribbble.png"
                                                        alt="dribbble" class="me-1" height="38" width="38" />
                                                </div>
                                                <div class="d-flex justify-content-between flex-grow-1">
                                                    <div class="col-md-12 col-lg-10 col-sm-12  position-relative">
                                                        <input type="text" class="form-control" name="dribbble_link"
                                                            id="dribbble_link" placeholder="enter link "
                                                            value="<?php echo $arr['dribbble_link'];?>" required />
                                                    </div>
                                                    <div class="mt-50 mt-sm-0">
                                                        <button class="btn btn-primary" name="update3"
                                                            type="update">Update</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>

                                        <!-- /Social Accounts -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!--/ connection -->
        </div>
    </div>

    </div>
    </div>
    </div>
    <!-- END: Content-->

    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>

    <!-- BEGIN: Footer-->
        <?php include"include/footer.php";?>
 <!-- END: Footer-->


    <!-- BEGIN: Vendor JS-->
    <script src="app-assets/vendors/js/vendors.min.js"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="app-assets/js/core/app-menu.js"></script>
    <script src="app-assets/js/core/app.js"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <!-- END: Page JS-->

    <script>
        $(window).on('load', function () {
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