<?php
include("include/config.php");
?>

<?php
if(isset($_POST['dnkk'])){
    $query=mysqli_query($conn,"select * from blog where id='".$_POST['dnkk']."'");
    $row=mysqli_fetch_array($query);
    echo ' 
    <h1 class="text-center mb-1" id="addNewCardTitle"> Edit Blog</h1>
     <div class="row">
    <div class="col-md-12">
    <div class="row">
    <div class="col-md-12">
      <div class="form-group">
        <label for="date">
       <b>  Title </b> <span class="text-danger">*</span>
        </label>
        <div class="input-group">
        <input type="hidden" name="id" value="'.$row['id'].'">

          <input class="form-control" name="title" type="text" value="'.$row['title'].'" data-dtp="dtp_dl6pL">
          
        </div>
      </div>
    </div>
  </div>
 </br>

  
      </br>
      <div class="col-md-12">
      <div class="form-group">
      <label for="clock_in">
      <b> Blog Content</b> <span class="text-danger">*</span>
      </label>
      <div class="input-group">
        <input class="form-control" name="blog_content" type="text" value="'.$row['blog_content'].'"  data-dtp="dtp_qHHzf">
        
      </div>
    </div>
    </div>

</br>
 
      <div class="row">
                <div class="col-md-12">
          <div class="form-group">
            <label for="clock_in">
            <b> Status</b> <span class="text-danger">*</span>
            </label>
            <div class="input-group">
              
              <p> <select required class="form-control" name="status" id="Selectstatusblog" value="'.$row['status'].'"  data-dtp="dtp_qHHzf">
              <option value="" disabled selected hidden>select</option>
              <option value="1">Publish</option>
              <option value="0">Draft</option>

            </select> </p>
            </div>
          </div>
        </div>
       
      </div>
      </br>
      
  </div>
</br>
    </div>
  </div>
  <div class="modal-footer">
                            <button type="submit" class="btn btn-primary" name="submit1">Save changes</button>
                            </div>

  ';
  }
  
  if(isset($_POST['submit1'])){
    $id=$_POST['id'];
    $title=$_POST['title'];
    $blog_content=$_POST['blog_content'];
    $status=$_POST['status'];
   
   
   
    $sql="UPDATE `blog` SET `title`='$title',`blog_content`='$blog_content',`status`='$status' WHERE id='$id'";

    if (mysqli_query($conn, $sql)){
      header("location:blog_table.php");
   } else {
      echo "connection failed !";
   }
  }

  ?>