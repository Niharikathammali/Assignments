<?php 
include('functions.php');
$mobile="";

function isAdmin()
{
	if (isset($_SESSION['user']) && $_SESSION['user']['user_type'] == 'Admin') {
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
<script src="http://code.jquery.com/sweetalert.min.js"></script>
<script language="JavaScript" type="text/javascript">
$(document).ready(function(){
    $("a.delete").click(function(e){
        if(!confirm('Are you sure?')){
            e.preventDefault();
            return false;
        }
        return true;
    });
});
</script>


	<title>Registration system PHP and MySQL</title>
  
	

	<!--<link rel="stylesheet" type="text/css" href="style.css">-->
  <link rel="stylesheet" 
    href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">

  
	<style>
	.header {
		background: ;
		display: block;
	}
	button[name=register_btn] {
		background: #003366;
	}
	</style>
</head>
<body>
<div class="container"style="position:relative; left:10px; top:20px;" >
<h1>Admin Page</h1>



        <button class= "btn btn-success my-5"><a href="adduser.php" style="color: green;"
        class="text-light">Add New User</a>
        
        </button>
        
        
        
        <button class= "btn btn-primary my-5" onclick="history.back()"><a href="home.php" 
        class="text-light">Return</a></button>
        <br>
        <table class="table table-bordered">
          <thead class = "thead-dark">
                  
                   <tr>
                     <th scope="col">id</th>
                     <th scope="col">username</th>
                     <th scope="col">email</th>
                     <th scope="col">mobile</th>
                     <th scope="col">password</th>
                     <th scope="col">actions</th>
      
                    </tr>
          </thead>

    
  <tbody>
    <?php
    
      $sql="SELECT * FROM users";
      $result=mysqli_query($db, $sql);
      if($result){
        while($row=mysqli_fetch_assoc($result)) {
        $id=$row['id'];
        $name=$row['username'];
        $password=md5($row['password']);
        $email=$row['email'];
        $mobile=$row['mobile'];
       
        
        echo'<tr>
        <th scope="row">'.$id.'</th>
        <td>'.$name.'</td>
        <td>'.$email.'</td>
        <td>'.$mobile.'</td>
        <td>'.$password.'</td>
        <td>
            <button class="btn btn-success">

              <a href="edit.php?editid='.$id.'" style="color: green;" class="text-light">Edit</a>

            </button>
            
            <button class="btn btn-danger">
            
              <a href="delete.php?deleteid='.$id.'" style="color: red;" class="text-light delete">Delete</a>
              
            </button>
            
        </td>
      </tr>';
      
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