<?php
include 'functions.php';
$id=$_GET['editid'];
$sql="SELECT * FROM companies WHERE company_id=$company_id";
$result=mysqli_query($db, $sql);
$row=mysqli_fetch_assoc($result);
$name=$row['companyname'];
$email=$row['company_email'];
$mobile=$row['contact_no'];
//$image=$FILE['image'];


if(isset($_POST['submit'])){
   
   $name=$_POST['companyname'];
    $email=$_POST['company_email'];
    $mobile=$_POST['contact_no'];
    //$image=$_FILE['file'];

    $sql = "UPDATE companies
    SET company_id=$company_id, companyname='$name', company_email='$email', contact_no='$mobile'
    WHERE company_id=$id";
$result=mysqli_query($db, $sql);



if($result){
 //echo "Updated successfully";
 header('location:display.php');
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

    <title>comp_details</title>
  </head>
  <body>
  <div class="container my-5">
    <form method="post">
  <div class="form-group">
    <label>Company Name</label>
    <input type="text" class="form-control" name="companyname" value="<?php echo $name;?>">
    
</div>
<div class="form-group">  
    <label>Company Email</label>
    <input type="email" class="form-control"  name="company_email" value="<?php echo $email;?>">
</div>
<div class="form-group">
    <label>Contact</label>
     <!--<input type="tel" id="mobile"  name="contact_no" value="">-->
   <input type="tel" class="form-control" name="contact_no" value="<?php echo $mobile;?>">
</div>


  <button type="submit" class="btn btn-primary" name="submit">Update</button>
</form>
    </div>
  </body>
</html>