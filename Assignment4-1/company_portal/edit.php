<?php
include 'functions.php';
$id=$_GET['editid'];
$sql="SELECT * FROM users WHERE id=$id";
$result=mysqli_query($db, $sql);
$row=mysqli_fetch_assoc($result);
$name=$row['username'];
//$email=$row['email'];
$mobile=$row['mobile'];
//$password=$row['password'];
//$cpass=$row['cpassword'];
//$image=$FILE['image']['name'];


if(isset($_POST['submit'])){
  $name=$_POST['username'];
//$email=$_POST['email'];
$mobile=$_POST['mobile'];
//$cpass=$_POST['cpassword'];
   
   

    $sql = "UPDATE users
    SET id=$id, username='$name', mobile='$mobile'
    WHERE id=$id";
$result=mysqli_query($db, $sql);



if($result){
 //echo "Updated successfully";
 header('location:home.php');
} else {
  die(mysqli_error($db));
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
    <link rel="stylesheet" href="style.css">

    <title>Admin - Home Page</title>
  </head>
  <body>
    <div class="container my-5">
    <form method="post">
  <div class="form-group">
    <label>Name</label>
    <input type="text" class="form-control" name="username" value="<?php echo $name;?>">
  </div>
  <div class="form-group">
    <label>Mobile</label>
    <input type="tel" class="form-control" name="mobile"  value="<?php echo $mobile;?>">
   </div>

  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>
    </div>

   
  </body>
</html>