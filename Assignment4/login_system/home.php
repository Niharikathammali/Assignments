<?php 
include('functions.php');

function isAdmin()
{
	if (isset($_SESSION['user']) && $_SESSION['user']['user_type'] == 'admin' ) {
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
<head>
	<title>Registration system PHP and MySQL</title>
	<h1>Admin Page</h1>
	<!--<link rel="stylesheet" type="text/css" href="style.css">-->
  
	<style>
	.header {
		background: ;
		display: grid;
	}
	button[name=register_btn] {
		background: #003366;
	}
	</style>
</head>
<body>
<div class="container"style="position:relative; left:10px; top:20px;" >



        <button class= "btn btn-success my-5"><a href="register.php" style="color: green;"
        class="text-light">Sign_up</a>
        
        </button>
        <button class= "btn btn-danger my-5">
		     <a href="login.php" title="Log-Out"
         onclick="confirm('Are you sure you want to log out?')" style="color: red;" class="text-light">Log-Out</a><br/>
        </button>
        <br><br>
     
          <thead>
                  <table class="table table-bordered">
                   <tr>
                     <th scope="col">id</th>
                     <th scope="col">username</th>
                     <th scope="col">email</th>
                     <th scope="col">password</th>
                     <th scope="col">actions</th>
      
                    </tr>
          </thead>

    
  <tbody>
    <?php
    
      $sql="SELECT * FROM users";
      $result=mysqli_query($db,$sql);
      if($result){
        while($row=mysqli_fetch_assoc($result)) {
        $id=$row['id'];
        $name=$row['username'];
        $password=md5($row['password']);
        $email=$row['email'];
       
        
        echo'<th><tr>
        <th scope="row">'.$id.'</th>
        <td>'.$name.'</td>
        <td>'.$email.'</td>
        <td>'.$password.'</td>
        <td>
            <button class="btn btn-success">
              <a href="edit.php?editid='.$id.'" style="color: green;"class="text-light">Edit</a>
            </button>
            
            <button class="btn btn-danger">
            
              <a href="delete.php?deleteid='.$id.'" style="color: red;"class="text-light">Delete</a>
              
            </button>
        </td>
      </tr></th>';
      
      }
    }

    ?>
			
		</div>
	  </div>
  </tbody>
</table>
</body>
</center>
</html>