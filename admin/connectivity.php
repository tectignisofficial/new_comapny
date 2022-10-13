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
    header("location:connectivity.php");
 } else {
    echo "connection failed !";
 }
 
}

if(isset($_POST['update1'])){

    $twitter_link=$_POST['twitter_link'];
    
      $sql="UPDATE `connectivity` SET `twitter_link`='$twitter_link' ";
      
      if (mysqli_query($conn, $sql)){
        header("location:connectivity.php");
     } else {
        echo "connection failed !";
     }
     
    }

    if(isset($_POST['update2'])){

        $linkedin_link=$_POST['linkedin_link'];
        
          $sql="UPDATE `connectivity` SET `linkedin_link`='$linkedin_link'";
          
          if (mysqli_query($conn, $sql)){
            header("location:connectivity.php");
         } else {
            echo "connection failed !";
         }
         
        }

        if(isset($_POST['update3'])){

            $dribbble_link=$_POST['dribbble_link'];
            
              $sql="UPDATE `connectivity` SET `dribbble_link`='$dribbble_link' ";
              
              if (mysqli_query($conn, $sql)){
                header("location:connectivity.php");
             } else {
                echo "connection failed !";
             }
             
            }

            if(isset($_POST['update4'])){

                $behance_link=$_POST['behance_link'];
                
                  $sql="UPDATE `connectivity` SET `behance_link`='$behance_link' ";
                  
                  if (mysqli_query($conn, $sql)){
                    header("location:connectivity.php");
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
    <title>Connectivity</title>
    <link rel="apple-touch-icon" href="app-assets/images/ico/apple-icon-120.png">
    <link rel="shortcut icon" type="image/x-icon" href="app-assets/images/ico/favicon.ico">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600" rel="stylesheet">

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

<body class="vertical-layout vertical-menu-modern  navbar-floating footer-static  " data-open="click" data-menu="vertical-menu-modern" data-col="">

    <!-- BEGIN: Header-->
    <?php include"include/header.php";?>
   <!-- END: Header-->
   <?php include"include/sidebar.php";?>
    <!-- BEGIN: Content-->
    <div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper container-xxl p-0">
            
            <div class="content-body">
                <!-- Basic Inputs start -->
                <section id="basic-input">
                    <div class="row">
                    <div class="col-12">

<!-- /.card -->

<div class="card">

    <!-- /.card-header -->
    <div class="card-body">
    <div class=" col-12">
                                <div class="card" >
                                    <div class="card-header border-bottom">
                                        <h4 class="card-title">Social accounts</h4>
                                    </div>
                                    <div class="card-body pt-2">
                                        <p>Display content from social accounts on your site</p>
                                        <!-- Social Accounts -->
                                        <form method="post">
                                        <?php 
                        
                        $sql=mysqli_query($conn,"select * from connectivity");
                       
                         while($arr=mysqli_fetch_array($sql)){
                        ?>
                                        <div class="d-flex mt-2">
                                            <div class="flex-shrink-0">
                                                <img src="app-assets/images/icons/social/facebook.png" alt="facebook" class="me-1" height="38" width="38" />
                                            </div>
                                            <div class="d-flex justify-content-between flex-grow-1">
                                                <div class="me-1">
                                                <div class="col-md-12 col-12  position-relative">
                                                
                                                <input type="text" class="form-control" name="facebook_link" id="facebook_link" placeholder="enter link " value="<?php echo $arr['facebook_link'];?>"  required />
                                                
                                            </div>
                                                </div>
                                                <div class="mt-50 mt-sm-0">
                                                <button class="btn btn-primary" name="update" type="update">Update</button>
                                                </div>
                                            </div>
                                        </div>
                                        <?php   } ?>
                                        </form>
                                        <form method="post">
                                        <?php 
                        
                        $sql=mysqli_query($conn,"select * from connectivity");
                       
                         while($arr=mysqli_fetch_array($sql)){
                        ?>
                                        <div class="d-flex align-items-start mt-2">
                                            <div class="flex-shrink-0">
                                                <img src="app-assets/images/icons/social/twitter.png" alt="twitter" class="me-1" height="38" width="38" />
                                            </div>
                                            <div class="d-flex justify-content-between flex-grow-1">
                                                <div class="me-1">
                                                <input type="text" class="form-control" name="twitter_link" id="twitter_link" placeholder="enter link " value="<?php echo $arr['twitter_link'];?>" required />
                                                </div>
                                                <div class="mt-50 mt-sm-0">
                                                <button class="btn btn-primary" name="update1" type="update">Update</button>
                                                </div>
                                            </div>
                                        </div>
                                        <?php   } ?>
                                        </form>
                                        <form method="post">
                                        <?php 
                        
                        $sql=mysqli_query($conn,"select * from connectivity");
                       
                         while($arr=mysqli_fetch_array($sql)){
                        ?>
                                        <div class="d-flex mt-2">
                                            <div class="flex-shrink-0">
                                                <img src="app-assets/images/icons/social/linkedin.png" alt="instagram" class="me-1" height="38" width="38" />
                                            </div>
                                            <div class="d-flex justify-content-between flex-grow-1">
                                                <div class="me-1">
                                                <input type="text" class="form-control" name="linkedin_link" id="linkedin_link" placeholder="enter link " value="<?php echo $arr['linkedin_link'];?>"  required />
                                                </div>
                                                <div class="mt-50 mt-sm-0">
                                                <button class="btn btn-primary" name="update2" type="update">Update</button>
                                                </div>
                                            </div>
                                        </div>
                                        <?php   } ?>
                                        </form>
                                        <form method="post">
                                        <?php 
                        
                        $sql=mysqli_query($conn,"select * from connectivity");
                       
                         while($arr=mysqli_fetch_array($sql)){
                        ?>
                                        <div class="d-flex mt-2">
                                            <div class="flex-shrink-0">
                                                <img src="app-assets/images/icons/social/dribbble.png" alt="dribbble" class="me-1" height="38" width="38" />
                                            </div>
                                            <div class="d-flex justify-content-between flex-grow-1">
                                                <div class="me-1">
                                                <input type="text" class="form-control" name="dribbble_link" id="dribbble_link" placeholder="enter link " value="<?php echo $arr['dribbble_link'];?>"  required />
                                                </div>
                                                <div class="mt-50 mt-sm-0">
                                                <button class="btn btn-primary" name="update3" type="update">Update</button>
                                                </div>
                                            </div>
                                        </div>
                                        <?php   } ?>
                                        </form>
                                        <form method="post">
                                        <?php 
                        
                        $sql=mysqli_query($conn,"select * from connectivity");
                       
                         while($arr=mysqli_fetch_array($sql)){
                        ?>
                                        <div class="d-flex mt-2">
                                            <div class="flex-shrink-0">
                                                <img src="app-assets/images/icons/social/behance.png" alt="behance" class="me-1" height="38" width="38" />
                                            </div>
                                            <div class="d-flex justify-content-between flex-grow-1">
                                                <div class="me-1">
                                                <input type="text" class="form-control" name="behance_link" id="behance_link" placeholder="enter link " value="<?php echo $arr['behance_link'];?>" required />
                                                </div>
                                                <div class="mt-50 mt-sm-0">
                                                <button class="btn btn-primary" name="update4" type="update">Update</button>
                                                </div>
                                            </div>
                                        </div>
                                        <?php   } ?>
                                        </form>
                                        <!-- /Social Accounts -->
                                    </div>
                                </div>
                            </div>
    </div>
    <!-- /.card-body -->
</div>
<!-- /.card -->
</div>
                    </div>
                </section>
                <!-- Basic Inputs end -->


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
    <script src="app-assets/js/scripts/forms/form-tooltip-valid.js"></script>
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