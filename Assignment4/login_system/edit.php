<?php
$name = $email = $password = "";
include 'functions.php';
$id=$_GET['editid'];
$sql="SELECT * FROM users WHERE id=$id";
$result=mysqli_query($db, $sql);
$row=mysqli_fetch_assoc($result);
$name=$row['username'];
$email=$row['email'];
$password=$row['password'];
$cpassword=$row['password'];
//$image=$FILE['image']['name'];


if(isset($_POST['submit'])){
  $name=$_POST['username'];
$email=$_POST['email'];
$password=md5($_POST['password']);
$cpassword=md5($_POST['password']);
   
   

    $sql = "UPDATE users
    SET id=$id, username='$name', email='$email', password='$password'
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


<html>
<head>
	<title>Registration system PHP and MySQL</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="header">
	<h2>Register</h2>
</div>

<form method="post" action="login.php">
    
	<?php echo display_error(); ?>

	<div class="input-group">
		<label>Username</label>
		<input type="text" name="username" value="<?php echo $name; ?>">
	</div>
	<div class="input-group">
		<label>Email</label>
		<input type="email" name="email" value="<?php echo $email; ?>">
	</div>
	<div class="input-group">
		<label>Password</label>
		<input type="password" name="password_1">
	</div>
	<div class="input-group">
		<label>Confirm password</label>
		<input type="password" name="password_2">
	</div>
	<div class="input-group">
		<button type="submit" class="btn" name="register_btn">Register</button>
	</div>
	<p>
		Already a member? <a href="login.php">Sign in</a>
	</p>
    </form>
</form>
</body>
</html>