<?php
include 'connect.php';
if(isset($_POST['submit'])){
   
   $name=$_POST['name'];
    $email=$_POST['email'];
    $mobile=$_POST['mobile'];
    //$image=$_FILES['file'];

    $sql = "INSERT INTO company (name, mobile, email) VALUES ('$name', '$mobile', '$email')";
$result=mysqli_query($conn,$sql);
if($result){
 // echo "Data inserted successfully";
 header('location:display.php');
} else {
  die(mysqli_error($conn));
}

}

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS--> 
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
  
  </head>
  
  <body>
  
    <div class="container my-5">
    <form method="post" entype="multipart/form-data">
  <div class="form-group mt-3 mb-1 w-50">
    <label>Name<a class="text-danger">*</a></label>
    <input type="text" class="form-control"  placeholder="Enter your name"  name="name" autocomplete="off" Required>
    
</div>
<div class="form-group mt-3 mb-1 w-50">  
    <label>Email<a class="text-danger">*</a></label>
    <input type="email" class="form-control"  placeholder="Enter your email"  name="email" autocomplete="off" Required>
</div>
<div class="form-group mt-3 mb-1 w-50">
    <label>Mobile<a class="text-danger">*</a></label>
    <input type="text" class="form-control"  placeholder="Enter your mobile number"  name="mobile" autocomplete="off" Required>
</div>

<div class="form-group mt-3 mb-1 w-50">
    <label>Image<a class="text-danger">*</a>
</label>
    <input type="file" class="form-control"  name="file" autocomplete="off" Required>
</div>
<!--<picture>
   <source srcset="..." type="image/svg+xml">
   <img src="..." class="img-fluid img-thumbnail" alt="..." autocomplete="off">
 </picture>-->
  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>
    </div>

   
  </body>
</html>