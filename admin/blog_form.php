h gcy<?php
include("include/config.php");

if(isset($_POST['submit'])){

 
  $title=$_POST['title'];
  $blog_content	=$_POST['blog_content'];
  $category=$_POST['category'];
  $meta_title=$_POST['meta_title'];
  $meta_description=$_POST['meta_description'];
  $status=$_POST['status'];

  $file=$_FILES['image']['name'];  
$file_tmp=$_FILES['image']['tmp_name'];
  
  
if(move_uploaded_file($file_tmp,"images/blog/".$file)){

  $sql=mysqli_query($conn,"INSERT INTO `blog`(`title`,`blog_content`,`image`,`meta_title`,`meta_description`,`status`) 
  VALUES ('$title','$blog_content','$file','$meta_title','$meta_description','$status')");

if($sql==1){
    header("location:blog_table.php");
}
else{
    echo 'failed'; 
}

  echo "<script> alert ('New record has been added successfully !');</script>";
} else {
  echo "<script> alert ('connection failed !');</script>";
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
    <title>Blog</title>
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
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>

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
                 <!-- Basic multiple Column Form section start -->
                 <section id="multiple-column-form">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Blog</h4>
                                </div>
                                <div class="card-body">
                                    <form class="form" method="post" enctype="multipart/form-data">
                                        <div class="row">
                                            <div class="col-md-6 col-12">
                                                <div class="mb-1">
                                                    <label class="form-label" for="first-name-column">Title</label>
                                                    <input type="text" id="first-name-column" class="form-control" placeholder="First Name" name="title" />
                                                </div>
                                               
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="mb-1">
                                                    

                                                    <label class="form-label">Status  </label>
                      <p> <select required class="form-control" name="status" id="Selectstatusblog">
                          <option value="" disabled selected hidden>select</option>
                          <option value="1">Publish</option>
                          <option value="0">Draft</option>

                        </select> </p>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="mb-1">
                                                   
                                                    <textarea class="form-control" id="summernote" name="blog_content">

</textarea>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="mb-1">
                                                    <label class="form-label" for="country-floating">Upload Image</label>
                                                    <input type="file" class="form-control" name="image">
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="mb-1">
                                                    <label class="form-label" for="company-column">Meta Title</label>
                                                    <input type="text" id="meta_title" class="form-control" name="meta_title" placeholder="Meta Title" />
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="mb-1">
                                                    <label class="form-label" for="email-id-column">Meta Description</label>
                                                    <input type="text" id="meta_description" class="form-control" name="meta_description" placeholder="Meta Description" />
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <button type="submit" name="submit" class="btn btn-primary me-1">Submit</button>
                                                <button type="reset" class="btn btn-outline-secondary">Reset</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Basic Floating Label Form section end -->


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
    <script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.2/summernote.js"></script>
      <script>
        $(function () {
          // Summernote
          $('#summernote').summernote()


        })
      </script>
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