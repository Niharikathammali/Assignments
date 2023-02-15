<?php include('functions.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Registration system PHP and MySQL</title>
	<link rel="stylesheet" type="text/css" href="style.css">
    <style>
	.container {
	width: 80%;
	margin: 50px auto 0px;
	color: white;
	background: #ed90bf;
	text-align: left;
	border: 0px solid #020508;
	border-bottom: none;
	border-radius: 10px 10px 0px 0px;
	padding: 20px;
}
</style>
</head>
	
<body>


<div class = "container">
<center>
<H1>Company Portal</H1>
</center>
	
    <button type="button" class="btn btn-link"><a href="user_login.php" 
    class="text-light">User_Login</a>
    </button>
    <button class= "btn btn-primary my-5"><a href="admin_login.php" 
    class="text-light">Admin_Login</a>
     </button>

</div>



	<div class="header">
	
		<h2>Admin_Login</h2>
	</div>
	<form method="post" action="home.php" >

		<?php echo display_error(); ?>

		<div class="input-group">
			<label>Username</label>
			<input type="text" name="username" >
		</div>
		<div class="input-group">
			<label>Password</label>
			<input type="password" name="password">
		</div>
		<div class="input-group">
			<button type="submit" class="btn" name="login_btn">Login</button>
		</div>
		<p>
			Not yet a member? <a href="register.php">Sign up</a>
		</p>
	</form>
</body>
</html>