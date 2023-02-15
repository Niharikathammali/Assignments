<?php 
include('functions.php');

function isAdmin()
{
	if (isset($_SESSION['user']) && $_SESSION['user']['user_type'] == 'Admin' ) {
		return true;
	}else{
		return false;
	}
}
if (!isLoggedIn()) {
	$_SESSION['msg'] = "You must log in first";
	header('location: login.php');
}

if (isset($_GET['logout'])) {
	session_destroy();
	unset($_SESSION['user']);
	header("location: login.php");
}
?>
<!DOCTYPE html>
<html>
	<center>

<head>
	<title>Registration system PHP and MySQL</title>
	<h1>Admin Page</h1>
	<!--<link rel="stylesheet" type="text/css" href="style.css">-->
  
	<style>
	.header {
		background:#ed90bf ;
		display: grid;
	}
	button[name=register_btn] {
		background: #003366;
	}
	</style>
	
	
</head>
<body>
<div class="container"style="position:relative; left:10px; top:20px;" >

        <button class= "btn btn-success my-5"><a href="display_users.php" style="color: green;"
        class="text-light">Users_List</a>
        
        </button>
        
        <button class= "btn btn-success my-5"><a href="display.php" style="color: green;"
        class="text-light">Companies_List</a>
        
        </button>
        <button class= "btn btn-danger my-5">
		     <a href="login.php" title="Log-Out"
         onclick="confirm('Are you sure you want to log out?')" style="color: red;" class="text-light">Log-Out</a><br/>
        </button>
		
		
        <br><br>       
</table>
</body>
</center>
</html>