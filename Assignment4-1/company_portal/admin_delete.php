<?php
include 'connect.php';
if(isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];
    $sql="DELETE FROM companies
    WHERE company_id = $id";
    $result=mysqli_query($conn, $sql);
    if($result){
        //echo "Deleted successfull";
        header('location:display.php');
    }else{
        die(mysqli_error($conn));
    }
}
?>
<html>
<head>

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script language="JavaScript" type="text/javascript">
/*$(document).ready(function()){
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
    
  
</script>
</head>
</html>
