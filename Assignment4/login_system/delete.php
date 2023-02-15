<html>
    
<form action="delete.php" method="POST">

<button onclick="return confirm('Are you sure! want to delete?')" type="submit" name="id" value="<?=$record['id'];?>" >Delete</button>


<?php
include 'functions.php';
if(isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];
    $sql="DELETE FROM users
    WHERE id = $id";
    $result=mysqli_query($db, $sql);
    if($result){
        //echo "Deleted successfull";
        
        header('location:home.php');
    }else{
        die(mysqli_error($conn));
    }
}
?>
</form>
</html>
