<html>
<head>   
<script src="http://code.jquery.com/sweetslert.min.js"></script>
<script language="JavaScript" type="text/javascript">
$(document).ready(function(){
    $("a.deleteid").click(function(e){
        if(!confirm('Are you sure?')){
            e.preventDefault();
            return false;
        }
        return true;
    });
});
</script>

</head>
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
