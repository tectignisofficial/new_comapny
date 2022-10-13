<?php
include("include/config.php");
?>

<?php
if(isset($_POST['dnkk'])){
    $query=mysqli_query($conn,"select * from portfolio where id='".$_POST['dnkk']."'");
    $row=mysqli_fetch_array($query);
    echo ' 
    <h1 class="text-center mb-1" id="addNewCardTitle"> Enter Information</h1>
     <div class="row">
    <div class="col-md-12">
    <div class="row">
    <div class="col-md-12">
      <div class="form-group">
        <label for="date">
       <b>  Name </b> <span class="text-danger">*</span>
        </label>
        <div class="input-group">
        <input type="hidden" name="id" value="'.$row['id'].'">

          <input class="form-control" name="name" type="text" value="'.$row['name'].'" data-dtp="dtp_dl6pL">
          
        </div>
      </div>
    </div>
  </div>
 </br>

  
      </br>
      <div class="col-md-12">
      <div class="form-group">
        <label for="date">
        <b> Photo </b> <span class="text-danger">*</span>
        </label>
        <div class="input-group">
        <input type="file" name="image" value=="../assets/img/portfolio/'.$row['image'].'">
        <img src="../assets/img/portfolio/'.$row['image'].'" style="height:150px; width:150px;">
      

       
          
        </div>
      </div>
    </div>

</br>
 
      <div class="row">
                <div class="col-md-12">
          <div class="form-group">
            <label for="clock_in">
            <b> Url</b> <span class="text-danger">*</span>
            </label>
            <div class="input-group">
              <input class="form-control" name="url" type="text" value="'.$row['url'].'"  data-dtp="dtp_qHHzf">
              
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
    $name=$_POST['name'];
    $url=$_POST['url'];
   
    $file=$_FILES['image']['name'];  
    $file_tmp=$_FILES['image']['tmp_name'];
   
   
    $sql="UPDATE `portfolio` SET `name`='$name',`url`='$url',`image`='$file' WHERE id='$id'";

    if (mysqli_query($conn, $sql)){
      header("location:portfolio.php");
   } else {
      echo "connection failed !";
   }
  }

  ?>