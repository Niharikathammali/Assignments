<?php
include 'connect.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add new company</title>
    <link rel="stylesheet" 
    href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">

</head>
<body>
    <div class="container">
        <button class= "btn btn-primary my-5"><a href="comp.php" 
        class="text-light">Add new company</a>
        
        </button>
        <table class="table table-bordered">
  <thead class="table-dark">
    <tr>
      <th scope="col">Id</th>
      <th scope="col">name</th>
      <th scope="col">mobile</th>
      <th scope="col">email</th>
      <th scope="col">actions</th>
      <!--<th scope="col">image</th>-->
    </tr>
  </thead>
  <tbody>
    <?php
      $sql="SELECT * FROM company";
      $result=mysqli_query($conn,$sql);
      if($result){
        while($row=mysqli_fetch_assoc($result)) {
        $Id=$row['id'];
        $name=$row['name'];
        $mobile=$row['mobile'];
        $email=$row['email'];
       //$image=$row['file']
        echo'<tr>
        <th scope="row">'.$Id.'</th>
        <td>'.$name.'</td>
        <td>'.$mobile.'</td>
        <td>'.$email.'</td>
        <td>
        <button class="btn btn-success">
        <a href="edit.php?editid='.$Id.'" class="text-light">Edit</a>
        </button>
        <button class="btn btn-danger">
        <a href="delete.php?deleteid='.$Id.'" class="text-light">Delete</a>
        </button>
        </td>
      </tr>';
      }
    }

    ?>
    
  </tbody>
</table>
</div>
</body>
</html>