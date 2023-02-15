<?php
 
 session_start();
 include "Connect.php";
 if(isset($_POST['editid']))
 {
    $id=$_SESSION['id'];
    $name=$_POST['username'];
    $mobile=$_POST['mobile'];
    $email=$_POST['email'];
    $select= "select * from users where id='$id'";
    $sql = mysqli_query($conn,$select);
    $row = mysqli_fetch_assoc($sql);
    $res= $row['id'];
    if($res === $id)
    {
   
       $update = "update users set username='$name',mobile='$mobile',email='$email' where id='$id'";
       $sql2=mysqli_query($conn,$update);
if($sql2)
       { 
           /*Successful*/
           header('location:display_users.php');
       }
       else
       {
           die(mysqli_error($conn));
       }
    }
  }
?>