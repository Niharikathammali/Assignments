<?php
include 'connect.php';
if(isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];
    $sql="DELETE FROM company
    WHERE id = $id";
    $result=mysqli_query($conn, $sql);
    if($result){
        //echo "Deleted successfull";
        header('location:display.php');
    }else{
        die(mysqli_error($conn));
    }
}