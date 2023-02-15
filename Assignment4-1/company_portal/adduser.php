<?php
 include('functions.php');
  $username = $email = $mobile = $password_1 = $password_2 ="";
  if(isset($_POST['submit'])){
	// call these variables with the global keyword to make them available in function
	//global $db, $errors, $username, $email;

	// receive all input values from the form. Call the e() function
    // defined below to escape form values
	$username    =  $_POST['username'];
	$email       =  $_POST['email'];
	$mobile      =  $_POST['mobile'];
	$password_1  =  $_POST['password_1'];
	$password_2  =  $_POST['password_2'];
	$sql = "INSERT INTO users (username, email, mobile, password_1, password_2) VALUES ('$username', '$email', '$mobile', $password, $password)";
$result=mysqli_query($db,$sql);
if($result){
 // echo "Data inserted successfully";
 header('location:display_users.php');
} else {
  die(mysqli_error($conn));
}

}

    // form validation: ensure that the form is correctly filled
	if (empty($username)) { 
		array_push($errors, "Username is required"); 
	}
	if (empty($email)) { 
		array_push($errors, "Email is required"); 
	}
	if (empty($password_1)) { 
		array_push($errors, "Password is required"); 
	}
	if ($password_1 != $password_2) {
		array_push($errors, "The two passwords do not match");
	}

	// register user if there are no errors in the form
	if (count($errors) == 0) {
		$password_1 = md5($password_1);

		if (isset($_POST['user_type'])) {
			$user_type = e($_POST['user_type']);
			$query = "INSERT INTO users (username, email, mobile, user_type, password)VALUES('$username', '$email', '$mobile', '$user_type', '$password_1')";
			mysqli_query($db, $query);
			$_SESSION['success']  = "New user successfully created!!";
			header('location: display_users.php');
		}
}
  
  
	if (isset($_SESSION['success'])) {
		echo "New user successfully created!!";
	}else{
		echo "No user created";
	}

  ?>
<html>
<head>
	<title>Registration system PHP and MySQL</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="header">
	<h2>New User</h2>
</div>

<form method="post" action="display_users.php">
    
	

	<div class="input-group">
		<label>Username</label>
		<input type="text" name="username" value="<?php echo $username; ?>">
	</div>
	<div class="input-group">
		<label>Email</label>
		<input type="email" name="email" value="<?php echo $email; ?>">
	</div>
	<div class="input-group">
		<label>Mobile</label>
		<input type="tel" mobile="mobile" value="<?php echo $mobile; ?>">
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
		<button type="submit" class="btn" name="register_btn">Add_User</button>
	</div>
	
    </form>
</form>
</body>
</html>