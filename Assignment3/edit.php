<?php
include 'connect.php';
$id=$_GET['editid'];
$sql="SELECT * FROM company WHERE Id=$id";
$result=mysqli_query($conn, $sql);
$row=mysqli_fetch_assoc($result);
$name=$row['name'];
$mobile=$row['mobile'];
$email=$row['email'];
//$image=$FILE['image'];


if(isset($_POST['submit'])){
   
   $name=$_POST['name'];
    $email=$_POST['email'];
    $mobile=$_POST['mobile'];
    //$image=$_FILE['file'];

    $sql = "UPDATE company
    SET Id=$id, name='$name', email='$email', mobile='$mobile'
    WHERE Id=$id";
$result=mysqli_query($conn, $sql);



if($result){
 //echo "Updated successfully";
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

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">

    <title>comp_details</title>
  </head>
  <body>
    <div class="container my-5">
    <form method="post">
  <div class="form-group">
    <label>Name</label>
    <input type="text" class="form-control"  placeholder="Enter your name"  
    name="name" autocomplete="off" value=<?php echo $name;?>>
</div>
<div class="form-group">
    <label>Email</label>
    <input type="email" class="form-control"  placeholder="Enter your email"  
    name="email" autocomplete="off" value=<?php echo $email;?>>
</div>
<div class="form-group">
    <label>Mobile</label>
    <input type="text" class="form-control"  placeholder="Enter your mobile number"  
    name="mobile" autocomplete="off" value=<?php echo $mobile;?>>
</div>
<div class="form-group">
    <label>Image</label>
    <input type="file" class="form-control"  name="file" autocomplete="off">
</div>
  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>
    </div>

   
  </body>
</html>