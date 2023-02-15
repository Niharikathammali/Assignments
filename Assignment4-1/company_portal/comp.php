<?php
include 'connect.php';
if(isset($_POST['submit'])){
   
   $name=$_POST['companyname'];
    $email=$_POST['company_email'];
    $mobile=$_POST['contact_no'];
    //$image=$_FILES['file'];

    $sql = "INSERT INTO companies (companyname, company_email, contact_no) VALUES ('$name', '$email', '$mobile')";
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
    <label>Company Name<a class="text-danger">*</a></label>
    <input type="text" class="form-control"  placeholder="Enter your name"  name="companyname" autocomplete="off" Required>
  </div>
  
<div class="form-group mt-3 mb-1 w-50">  
    <label>Company Email<a class="text-danger">*</a></label>
    <input type="email" class="form-control"  placeholder="Enter your email"  name="company_email" autocomplete="off" Required>
</div>
<div class="form-group mt-3 mb-1 w-50">
    <label>Contact<a class="text-danger">*</a></label>
    <input type="tel" class="form-control"  placeholder="Enter your mobile number"  name="contact_no" autocomplete="off" Required>
</div>


  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
  <button class= "btn btn-primary my-5" onclick="history.back()"><a href="home.php" 
        class="text-light">Return</a></button>
</form>
    </div>

   
  </body>
</html>