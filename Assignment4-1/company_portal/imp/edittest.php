<?php
include 'connect.php';
$id=$_GET['editid'];
$sql="SELECT * FROM users WHERE id='$id'";
$result=mysqli_query($conn, $sql);
$row=mysqli_fetch_assoc($result);
$name=$row['username'];
$mobile=$row['mobile'];
if(isset($_POST['submit'])){
  $name=$_POST['username'];
  $mobile=$_POST['mobile'];
  
    $sql = "UPDATE users
    SET id=$id, username='$name', mobile='$mobile'
    WHERE id=$id";
    $result=mysqli_query($conn, $sql);

if($result){
 //echo "Updated successfully";
 header('location:display_users.php');
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

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">

    <title>user_details</title>
  </head>
  <body>
  <div class="container my-5">
    <form method="post" entype="multipart/form-data">
  <div class="form-group mt-3 mb-1 w-50">
    <label>Username</label>
    <input type="text" class="form-control"  placeholder="Enter your name" name="username">
    
</div>

<div class="form-group mt-3 mb-1 w-50">
    <label>Mobile</label>
    <input type="tel" class="form-control"  placeholder="Enter your mobile number"  mobile="mobile">
</div>


  <button type="submit" class="btn btn-primary" name="submit">Update</button>
</form>
    </div>  
  </body>
</html>