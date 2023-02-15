<?php
include 'connect.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>

<!--<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script language="JavaScript" type="text/javascript">
$(document).ready(function()){
    $("a.delete").click(function(e)){
        if(!confirm('Are you sure?')){
            e.preventDefault();
            return false;
        }
        return true;
    });
});*/

window.addEventListener('load',function(){
});
function delete() {
swal({
  title: "Are you sure?",
  text: "Once deleted, you will not be able to recover this imaginary file!",
  icon: "warning",
  buttons: true,
  dangerMode: true,
})
.then((willDelete) => {
  if (willDelete) {
     swal("Poof! Your imaginary file has been deleted!", {
      icon: "success",
    });
  } else {
    swal("Your imaginary file is safe!");
  }

});
}
    }
  }
</script>-->

  <style>
  <style>
      label {
        display: grid;
        width: 130px;
      }
    </style>

</style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add new company</title>
    <link rel="stylesheet" 
    href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">

</head>
<body>
    <div class="container">
        <button class= "btn btn-success my-5"><a href="comp.php" 
        class="text-light">Add new company</a>
        
</button>

        <button class= "btn btn-primary my-5" onclick="history.back()"><a href="home.php" 
        class="text-light">Return</a></button>
        <table class="table table-bordered">
  <thead class="thead-dark">
    <tr>
      <th scope="col">company_id</th>
      <th scope="col">companyname</th>
      <th scope="col">company_email</th>
      <th scope="col">contact_no</th>
      <th scope="col">actions</th>
      <!--<th scope="col">image</th>-->
    </tr>
  </thead>
  <tbody>
    <?php
    
      $sql="SELECT * FROM companies";
      $result=mysqli_query($conn,$sql);
      if($result){
        while($row=mysqli_fetch_assoc($result)) {
        $id=$row['company_id'];
        $name=$row['companyname'];
        
        $email=$row['company_email'];
        $mobile=$row['contact_no'];
       //$image=$row['file']
       
        echo'<tr>
        <th scope="row">'.$id.'</th>
        <td><button type="button" class="btn btn-link">
        <a href="niha.php?"">'.$name.'</a>
        </button></td>
        <td>'.$email.'</td>
        <td>'.$mobile.'</td>
        <td>
        <button class="btn btn-success">
        <a href="admin_edit.php?admin_editid='.$id.'" class="text-light">Edit</a>
        </button>
        
        <button class="btn btn-danger">
            
              <a href="admin_delete.php?admin_deleteid='.$id.'" class="text-light delete">Delete</a>
              
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