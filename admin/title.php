<?php

session_start();

$id=$_SESSION['id'];
if(!isset($_SESSION['id']))
{                                                                                       
  header("location:adminlogin.php");
}
include("include/config.php");

if(isset($_POST['submitindex'])){

 
  $title=$_POST['title'];
  $keyword=$_POST['keyword'];
  $description=$_POST['description'];


  $sql="UPDATE `title` SET `title`='$title', `keyword`='$keyword', `description`='$description' where heading='Index'";
  if (mysqli_query($conn, $sql)){
    header("location:title.php");
 } else {
    echo "connection failed !";
 }
 
}
if(isset($_POST['submitAbout'])){

 
    $title=$_POST['title'];
    $keyword=$_POST['keyword'];
    $description=$_POST['description'];
  
  
    $sql="UPDATE `title` SET `title`='$title', `keyword`='$keyword', `description`='$description' where heading='About us'";
    if (mysqli_query($conn, $sql)){
      header("location:title.php");
   } else {
      echo "connection failed !";
   }
   
  }

  if(isset($_POST['submitceo'])){

 
    $title=$_POST['title'];
    $keyword=$_POST['keyword'];
    $description=$_POST['description'];
  
  
    $sql="UPDATE `title` SET `title`='$title', `keyword`='$keyword', `description`='$description' where heading='CEO'";
    if (mysqli_query($conn, $sql)){
      header("location:title.php");
   } else {
      echo "connection failed !";
   }
   
  }

  if(isset($_POST['submitteam'])){

 
    $title=$_POST['title'];
    $keyword=$_POST['keyword'];
    $description=$_POST['description'];
  
  
    $sql="UPDATE `title` SET `title`='$title', `keyword`='$keyword', `description`='$description' where heading='Team'";
    if (mysqli_query($conn, $sql)){
      header("location:title.php");
   } else {
      echo "connection failed !";
   }
   
  }
  if(isset($_POST['submitwebsite'])){

 
    $title=$_POST['title'];
    $keyword=$_POST['keyword'];
    $description=$_POST['description'];
  
  
    $sql="UPDATE `title` SET `title`='$title', `keyword`='$keyword', `description`='$description' where heading='Website Designing'";
    if (mysqli_query($conn, $sql)){
      header("location:title.php");
   } else {
      echo "connection failed !";
   }
   
  }
  if(isset($_POST['submitecommerce'])){

 
    $title=$_POST['title'];
    $keyword=$_POST['keyword'];
    $description=$_POST['description'];
  
  
    $sql="UPDATE `title` SET `title`='$title', `keyword`='$keyword', `description`='$description' where heading='Ecommerce'";
    if (mysqli_query($conn, $sql)){
      header("location:title.php");
   } else {
      echo "connection failed !";
   }
   
  }
  if(isset($_POST['submitsoftware'])){

 
    $title=$_POST['title'];
    $keyword=$_POST['keyword'];
    $description=$_POST['description'];
  
  
    $sql="UPDATE `title` SET `title`='$title', `keyword`='$keyword', `description`='$description' where heading='Software'";
    if (mysqli_query($conn, $sql)){
      header("location:title.php");
   } else {
      echo "connection failed !";
   }
   
  }

  if(isset($_POST['submitmobile'])){

 
    $title=$_POST['title'];
    $keyword=$_POST['keyword'];
    $description=$_POST['description'];
  
  
    $sql="UPDATE `title` SET `title`='$title', `keyword`='$keyword', `description`='$description' where heading='Mobile App'";
    if (mysqli_query($conn, $sql)){
      header("location:title.php");
   } else {
      echo "connection failed !";
   }
   
  }

  if(isset($_POST['submitdigital'])){

 
    $title=$_POST['title'];
    $keyword=$_POST['keyword'];
    $description=$_POST['description'];
  
  
    $sql="UPDATE `title` SET `title`='$title', `keyword`='$keyword', `description`='$description' where heading='Digital Marketing'";
    if (mysqli_query($conn, $sql)){
      header("location:title.php");
   } else {
      echo "connection failed !";
   }
   
  }

  if(isset($_POST['submitgraphics'])){

 
    $title=$_POST['title'];
    $keyword=$_POST['keyword'];
    $description=$_POST['description'];
  
  
    $sql="UPDATE `title` SET `title`='$title', `keyword`='$keyword', `description`='$description' where heading='Graphics Designing'";
    if (mysqli_query($conn, $sql)){
      header("location:title.php");
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
    <title>Account - Vuexy - Bootstrap HTML admin template</title>
    <link rel="apple-touch-icon" href="app-assets/images/ico/apple-icon-120.png">
    <link rel="shortcut icon" type="image/x-icon" href="app-assets/images/ico/favicon.ico">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600"
        rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/vendors.min.css">
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/forms/select/select2.min.css">
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/animate/animate.min.css">
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/extensions/sweetalert2.min.css">
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
    <link rel="stylesheet" type="text/css" href="app-assets/css/plugins/extensions/ext-component-sweet-alerts.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/plugins/forms/form-validation.css">
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


            </div>
            <div class="content-body">
                <div class="row">
                    <div class="col-12">


                        <!-- profile -->
                        <?php 
                        
                                        $sql=mysqli_query($conn,"select * from title where heading='Index'");
                                    
                                        $arr=mysqli_fetch_array($sql)
                                        ?>
                        <div class="card">
                            <div class="card-header border-bottom">
                                <h4 class="card-title"><?php echo $arr['heading'];?></h4>
                            </div>
                            <div class="card-body">


                                <!-- form -->

                                <form class="validate-form" method="POST" novalidate>

                                    <div class="row">
                                        <div class="col-12 col-sm-12 mb-1">
                                            <label class="form-label" for="accountFirstName">Title</label>
                                            <input type="text" class="form-control" id="accountFirstName" name="title"
                                                placeholder="John" value="<?php echo $arr['title'];?>"
                                                data-msg="Please enter first name" />
                                        </div>
                                        <div class="col-12 col-sm-12 mb-1">
                                            <label class="form-label" for="accountKeyword">Keyword</label>
                                            <input type="text" class="form-control" id="accountKeyword" name="keyword"
                                                placeholder="Keyword" value="<?php echo $arr['keyword'];?>" />
                                        </div>
                                        <div class="col-12 col-sm-12 mb-1">
                                            <label class="form-label" for="accountLastName">Description</label>
                                            <input type="text" class="form-control" id="accountLastName"
                                                name="description" placeholder="Doe"
                                                value="<?php echo $arr['description'];?>"
                                                data-msg="Please enter last name" />
                                        </div>

                                        <div class="col-12">
                                            <button type="submit" class="btn btn-primary mt-1 me-1"
                                                name="submitindex">Save
                                                changes</button>
                                        </div>
                                    </div>


                                </form>


                                <!--/ form -->
                            </div>

                        </div>

                    </div>
                </div>
                <div class="row">
                    <div class="col-12">


                        <!-- profile -->
                        <?php 
                        
                        $sql=mysqli_query($conn,"select * from title where heading='About us'");
                        $arr=mysqli_fetch_array($sql)
                        ?>
                        <div class="card">
                            <div class="card-header border-bottom">
                                <h4 class="card-title"><?php echo $arr['heading'];?></h4>
                            </div>
                            <div class="card-body">


                                <!-- form -->

                                <form class="validate-form" method="POST" novalidate>

                                    <div class="row">
                                        <div class="col-12 col-sm-12 mb-1">
                                            <label class="form-label" for="accountFirstName">Title</label>
                                            <input type="text" class="form-control" id="accountFirstName" name="title"
                                                placeholder="John" value="<?php echo $arr['title'];?>"
                                                data-msg="Please enter first name" />
                                        </div>
                                        <div class="col-12 col-sm-12 mb-1">
                                            <label class="form-label" for="accountKeyword">Keyword</label>
                                            <input type="text" class="form-control" id="accountKeyword" name="keyword"
                                                placeholder="Keyword" value="<?php echo $arr['keyword'];?>" />
                                        </div>
                                        <div class="col-12 col-sm-12 mb-1">
                                            <label class="form-label" for="accountLastName">Description</label>
                                            <input type="text" class="form-control" id="accountLastName"
                                                name="description" placeholder="Doe"
                                                value="<?php echo $arr['description'];?>"
                                                data-msg="Please enter last name" />
                                        </div>

                                        <div class="col-12">
                                            <button type="submit" class="btn btn-primary mt-1 me-1"
                                                name="submitAbout">Save
                                                changes</button>
                                        </div>
                                    </div>


                                </form>


                                <!--/ form -->
                            </div>

                        </div>

                    </div>
                </div>

                <div class="row">
                    <div class="col-12">


                        <!-- profile -->
                        <?php 
                        
                        $sql=mysqli_query($conn,"select * from title where heading='CEO'");
                        $arr=mysqli_fetch_array($sql)
                        ?>
                        <div class="card">
                            <div class="card-header border-bottom">
                                <h4 class="card-title"><?php echo $arr['heading'];?></h4>
                            </div>
                            <div class="card-body">


                                <!-- form -->

                                <form class="validate-form" method="POST" novalidate>

                                    <div class="row">
                                        <div class="col-12 col-sm-12 mb-1">
                                            <label class="form-label" for="accountFirstName">Title</label>
                                            <input type="text" class="form-control" id="accountFirstName" name="title"
                                                placeholder="John" value="<?php echo $arr['title'];?>"
                                                data-msg="Please enter first name" />
                                        </div>
                                        <div class="col-12 col-sm-12 mb-1">
                                            <label class="form-label" for="accountKeyword">Keyword</label>
                                            <input type="text" class="form-control" id="accountKeyword" name="keyword"
                                                placeholder="Keyword" value="<?php echo $arr['keyword'];?>" />
                                        </div>
                                        <div class="col-12 col-sm-12 mb-1">
                                            <label class="form-label" for="accountLastName">Description</label>
                                            <input type="text" class="form-control" id="accountLastName"
                                                name="description" placeholder="Doe"
                                                value="<?php echo $arr['description'];?>"
                                                data-msg="Please enter last name" />
                                        </div>

                                        <div class="col-12">
                                            <button type="submit" class="btn btn-primary mt-1 me-1"
                                                name="submitceo">Save
                                                changes</button>
                                        </div>
                                    </div>


                                </form>


                                <!--/ form -->
                            </div>

                        </div>

                    </div>
                </div>
                
                <div class="row">
                    <div class="col-12">


                        <!-- profile -->
                        <?php 
                        
                        $sql=mysqli_query($conn,"select * from title where heading='Team'");
                        $arr=mysqli_fetch_array($sql)
                        ?>
                        <div class="card">
                            <div class="card-header border-bottom">
                                <h4 class="card-title"><?php echo $arr['heading'];?></h4>
                            </div>
                            <div class="card-body">


                                <!-- form -->

                                <form class="validate-form" method="POST" novalidate>

                                    <div class="row">
                                        <div class="col-12 col-sm-12 mb-1">
                                            <label class="form-label" for="accountFirstName">Title</label>
                                            <input type="text" class="form-control" id="accountFirstName" name="title"
                                                placeholder="John" value="<?php echo $arr['title'];?>"
                                                data-msg="Please enter first name" />
                                        </div>
                                        <div class="col-12 col-sm-12 mb-1">
                                            <label class="form-label" for="accountKeyword">Keyword</label>
                                            <input type="text" class="form-control" id="accountKeyword" name="keyword"
                                                placeholder="Keyword" value="<?php echo $arr['keyword'];?>" />
                                        </div>
                                        <div class="col-12 col-sm-12 mb-1">
                                            <label class="form-label" for="accountLastName">Description</label>
                                            <input type="text" class="form-control" id="accountLastName"
                                                name="description" placeholder="Doe"
                                                value="<?php echo $arr['description'];?>"
                                                data-msg="Please enter last name" />
                                        </div>

                                        <div class="col-12">
                                            <button type="submit" class="btn btn-primary mt-1 me-1"
                                                name="submitteam">Save
                                                changes</button>
                                        </div>
                                    </div>


                                </form>


                                <!--/ form -->
                            </div>

                        </div>

                    </div>
                </div>
                <div class="row">
                    <div class="col-12">


                        <!-- profile -->
                        <?php 
                        
                        $sql=mysqli_query($conn,"select * from title where heading='Website Designing'");
                        $arr=mysqli_fetch_array($sql)
                        ?>
                        <div class="card">
                            <div class="card-header border-bottom">
                                <h4 class="card-title"><?php echo $arr['heading'];?></h4>
                            </div>
                            <div class="card-body">


                                <!-- form -->

                                <form class="validate-form" method="POST" novalidate>

                                    <div class="row">
                                        <div class="col-12 col-sm-12 mb-1">
                                            <label class="form-label" for="accountFirstName">Title</label>
                                            <input type="text" class="form-control" id="accountFirstName" name="title"
                                                placeholder="John" value="<?php echo $arr['title'];?>"
                                                data-msg="Please enter first name" />
                                        </div>
                                        <div class="col-12 col-sm-12 mb-1">
                                            <label class="form-label" for="accountKeyword">Keyword</label>
                                            <input type="text" class="form-control" id="accountKeyword" name="keyword"
                                                placeholder="Keyword" value="<?php echo $arr['keyword'];?>" />
                                        </div>
                                        <div class="col-12 col-sm-12 mb-1">
                                            <label class="form-label" for="accountLastName">Description</label>
                                            <input type="text" class="form-control" id="accountLastName"
                                                name="description" placeholder="Doe"
                                                value="<?php echo $arr['description'];?>"
                                                data-msg="Please enter last name" />
                                        </div>

                                        <div class="col-12">
                                            <button type="submit" class="btn btn-primary mt-1 me-1"
                                                name="submitwebsite">Save
                                                changes</button>
                                        </div>
                                    </div>


                                </form>


                                <!--/ form -->
                            </div>

                        </div>

                    </div>
                </div>
                <div class="row">
                    <div class="col-12">


                        <!-- profile -->
                        <?php 
                        
                        $sql=mysqli_query($conn,"select * from title where heading='Ecommerce'");
                        $arr=mysqli_fetch_array($sql)
                        ?>
                        <div class="card">
                            <div class="card-header border-bottom">
                                <h4 class="card-title"><?php echo $arr['heading'];?></h4>
                            </div>
                            <div class="card-body">


                                <!-- form -->

                                <form class="validate-form" method="POST" novalidate>

                                    <div class="row">
                                        <div class="col-12 col-sm-12 mb-1">
                                            <label class="form-label" for="accountFirstName">Title</label>
                                            <input type="text" class="form-control" id="accountFirstName" name="title"
                                                placeholder="John" value="<?php echo $arr['title'];?>"
                                                data-msg="Please enter first name" />
                                        </div>
                                        <div class="col-12 col-sm-12 mb-1">
                                            <label class="form-label" for="accountKeyword">Keyword</label>
                                            <input type="text" class="form-control" id="accountKeyword" name="keyword"
                                                placeholder="Keyword" value="<?php echo $arr['keyword'];?>" />
                                        </div>
                                        <div class="col-12 col-sm-12 mb-1">
                                            <label class="form-label" for="accountLastName">Description</label>
                                            <input type="text" class="form-control" id="accountLastName"
                                                name="description" placeholder="Doe"
                                                value="<?php echo $arr['description'];?>"
                                                data-msg="Please enter last name" />
                                        </div>

                                        <div class="col-12">
                                            <button type="submit" class="btn btn-primary mt-1 me-1"
                                                name="submitwecommerce">Save
                                                changes</button>
                                        </div>
                                    </div>


                                </form>


                                <!--/ form -->
                            </div>

                        </div>

                    </div>
                </div>
                <div class="row">
                    <div class="col-12">


                        <!-- profile -->
                        <?php 
                        
                        $sql=mysqli_query($conn,"select * from title where heading='Mobile App'");
                        $arr=mysqli_fetch_array($sql)
                        ?>
                        <div class="card">
                            <div class="card-header border-bottom">
                                <h4 class="card-title"><?php echo $arr['heading'];?></h4>
                            </div>
                            <div class="card-body">


                                <!-- form -->

                                <form class="validate-form" method="POST" novalidate>

                                    <div class="row">
                                        <div class="col-12 col-sm-12 mb-1">
                                            <label class="form-label" for="accountFirstName">Title</label>
                                            <input type="text" class="form-control" id="accountFirstName" name="title"
                                                placeholder="John" value="<?php echo $arr['title'];?>"
                                                data-msg="Please enter first name" />
                                        </div>
                                        <div class="col-12 col-sm-12 mb-1">
                                            <label class="form-label" for="accountKeyword">Keyword</label>
                                            <input type="text" class="form-control" id="accountKeyword" name="keyword"
                                                placeholder="Keyword" value="<?php echo $arr['keyword'];?>" />
                                        </div>
                                        <div class="col-12 col-sm-12 mb-1">
                                            <label class="form-label" for="accountLastName">Description</label>
                                            <input type="text" class="form-control" id="accountLastName"
                                                name="description" placeholder="Doe"
                                                value="<?php echo $arr['description'];?>"
                                                data-msg="Please enter last name" />
                                        </div>

                                        <div class="col-12">
                                            <button type="submit" class="btn btn-primary mt-1 me-1"
                                                name="submitmobile">Save
                                                changes</button>
                                        </div>
                                    </div>


                                </form>


                                <!--/ form -->
                            </div>

                        </div>

                    </div>
                </div>
                <div class="row">
                    <div class="col-12">


                        <!-- profile -->
                        <?php 
                        
                        $sql=mysqli_query($conn,"select * from title where heading='Software'");
                        $arr=mysqli_fetch_array($sql)
                        ?>
                        <div class="card">
                            <div class="card-header border-bottom">
                                <h4 class="card-title"><?php echo $arr['heading'];?></h4>
                            </div>
                            <div class="card-body">


                                <!-- form -->

                                <form class="validate-form" method="POST" novalidate>

                                    <div class="row">
                                        <div class="col-12 col-sm-12 mb-1">
                                            <label class="form-label" for="accountFirstName">Title</label>
                                            <input type="text" class="form-control" id="accountFirstName" name="title"
                                                placeholder="John" value="<?php echo $arr['title'];?>"
                                                data-msg="Please enter first name" />
                                        </div>
                                        <div class="col-12 col-sm-12 mb-1">
                                            <label class="form-label" for="accountKeyword">Keyword</label>
                                            <input type="text" class="form-control" id="accountKeyword" name="keyword"
                                                placeholder="Keyword" value="<?php echo $arr['keyword'];?>" />
                                        </div>
                                        <div class="col-12 col-sm-12 mb-1">
                                            <label class="form-label" for="accountLastName">Description</label>
                                            <input type="text" class="form-control" id="accountLastName"
                                                name="description" placeholder="Doe"
                                                value="<?php echo $arr['description'];?>"
                                                data-msg="Please enter last name" />
                                        </div>

                                        <div class="col-12">
                                            <button type="submit" class="btn btn-primary mt-1 me-1"
                                                name="submitsoftware">Save
                                                changes</button>
                                        </div>
                                    </div>


                                </form>


                                <!--/ form -->
                            </div>

                        </div>

                    </div>
                </div>
                <div class="row">
                    <div class="col-12">


                        <!-- profile -->
                        <?php 
                        
                        $sql=mysqli_query($conn,"select * from title where heading='Digital Marketing'");
                        $arr=mysqli_fetch_array($sql)
                        ?>
                        <div class="card">
                            <div class="card-header border-bottom">
                                <h4 class="card-title"><?php echo $arr['heading'];?></h4>
                            </div>
                            <div class="card-body">


                                <!-- form -->

                                <form class="validate-form" method="POST" novalidate>

                                    <div class="row">
                                        <div class="col-12 col-sm-12 mb-1">
                                            <label class="form-label" for="accountFirstName">Title</label>
                                            <input type="text" class="form-control" id="accountFirstName" name="title"
                                                placeholder="John" value="<?php echo $arr['title'];?>"
                                                data-msg="Please enter first name" />
                                        </div>
                                        <div class="col-12 col-sm-12 mb-1">
                                            <label class="form-label" for="accountKeyword">Keyword</label>
                                            <input type="text" class="form-control" id="accountKeyword" name="keyword"
                                                placeholder="Keyword" value="<?php echo $arr['keyword'];?>" />
                                        </div>
                                        <div class="col-12 col-sm-12 mb-1">
                                            <label class="form-label" for="accountLastName">Description</label>
                                            <input type="text" class="form-control" id="accountLastName"
                                                name="description" placeholder="Doe"
                                                value="<?php echo $arr['description'];?>"
                                                data-msg="Please enter last name" />
                                        </div>

                                        <div class="col-12">
                                            <button type="submit" class="btn btn-primary mt-1 me-1"
                                                name="submitdigital">Save
                                                changes</button>
                                        </div>
                                    </div>


                                </form>


                                <!--/ form -->
                            </div>

                        </div>

                    </div>
                </div>
                <div class="row">
                    <div class="col-12">


                        <!-- profile -->
                        <?php 
                        
                        $sql=mysqli_query($conn,"select * from title where heading='Graphics Designing'");
                        $arr=mysqli_fetch_array($sql)
                        ?>
                        <div class="card">
                            <div class="card-header border-bottom">
                                <h4 class="card-title"><?php echo $arr['heading'];?></h4>
                            </div>
                            <div class="card-body">


                                <!-- form -->

                                <form class="validate-form" method="POST" novalidate>

                                    <div class="row">
                                        <div class="col-12 col-sm-12 mb-1">
                                            <label class="form-label" for="accountFirstName">Title</label>
                                            <input type="text" class="form-control" id="accountFirstName" name="title"
                                                placeholder="John" value="<?php echo $arr['title'];?>"
                                                data-msg="Please enter first name" />
                                        </div>
                                        <div class="col-12 col-sm-12 mb-1">
                                            <label class="form-label" for="accountKeyword">Keyword</label>
                                            <input type="text" class="form-control" id="accountKeyword" name="keyword"
                                                placeholder="Keyword" value="<?php echo $arr['keyword'];?>" />
                                        </div>
                                        <div class="col-12 col-sm-12 mb-1">
                                            <label class="form-label" for="accountLastName">Description</label>
                                            <input type="text" class="form-control" id="accountLastName"
                                                name="description" placeholder="Doe"
                                                value="<?php echo $arr['description'];?>"
                                                data-msg="Please enter last name" />
                                        </div>

                                        <div class="col-12">
                                            <button type="submit" class="btn btn-primary mt-1 me-1"
                                                name="submitgraphics">Save
                                                changes</button>
                                        </div>
                                    </div>


                                </form>


                                <!--/ form -->
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END: Content-->

    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>

    <!-- BEGIN: Footer-->
    <footer class="footer footer-static footer-light">
        <p class="clearfix mb-0"><span class="float-md-start d-block d-md-inline-block mt-25">COPYRIGHT &copy; 2021<a
                    class="ms-25" href="https://1.envato.market/pixinvent_portfolio" target="_blank">Pixinvent</a><span
                    class="d-none d-sm-inline-block">, All rights Reserved</span></span><span
                class="float-md-end d-none d-md-block">Hand-crafted & Made with<i data-feather="heart"></i></span></p>
    </footer>
    <button class="btn btn-primary btn-icon scroll-top" type="button"><i data-feather="arrow-up"></i></button>
    <!-- END: Footer-->


    <!-- BEGIN: Vendor JS-->
    <script src="app-assets/vendors/js/vendors.min.js"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="app-assets/vendors/js/forms/select/select2.full.min.js"></script>
    <script src="app-assets/vendors/js/extensions/sweetalert2.all.min.js"></script>
    <script src="app-assets/vendors/js/forms/validation/jquery.validate.min.js"></script>
    <script src="app-assets/vendors/js/forms/cleave/cleave.min.js"></script>
    <script src="app-assets/vendors/js/forms/cleave/addons/cleave-phone.us.js"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="app-assets/js/core/app-menu.js"></script>
    <script src="app-assets/js/core/app.js"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="app-assets/js/scripts/pages/page-account-settings-account.js"></script>
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