<?php
 include('functions.php');
 $mobile = $lastname = "";
  ?>
<html>
<head>
	<title>Registration system PHP and MySQL</title>
    <link rel="stylesheet" href="style.css">
	<style>
        .Required:before {
            content: "*";
            font-weight: bold;
            color: red;
        }
    </style>
</head>
<body>
<div class="header">
	<h2>Register</h2>
</div>

<form method="post" action="login.php">
    
	<?php echo display_error(); ?>

	<div class="input-group">
	First Name:<span class="Required"></span>
		<input type="text" name="username" value="<?php echo $username; ?>" Required>
	</div>
	<div class="input-group">
		<label>lastname</label>
		<input type="text" name="lastname" value="<?php echo $lastname; ?>">
	</div>
	<div class="input-group">
		
		Email:<span class="Required"></span>
		<input type="email" name="email" value="<?php echo $email; ?>" Required>
	</div>
	<div class="input-group">
		Mobile:<span class="Required"></span>
		<input type="tel" name="mobile" value="<?php echo $mobile; ?>" Required>
	</div>
	
	<div class="input-group">
		Password:<span class="Required"></span>
		<input type="password" name="password_1" Required>
	</div>
	<div class="input-group">
		Confirm password:<span class="Required"></span>
		<input type="password" name="password_2" Required>
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