<?php
  
  if($_POST) {
    $first_name = "";
    $last_name= "";
    $phone= "";
    $birthdate= "";
    $email= "";
    $message = "";
     $fileName = "";
    $fileUpload = "";
    $fileSize = "";
    $fileType ="";
    $email_body = "<div>";
    $nameErr = "";
    $emailErr = "";
    $phoneErr = "";
    $birthdateErr = "";
    $name = $_FILES["file"]["name"];
  
    // Store the file extension or type
    $type = $_FILES["file"]["type"];
  
    // Store the file size
    $size = $_FILES["file"]["size"];
  }



    if ($_SERVER["REQUEST_METHOD"] == "POST")
{
   if (empty($_POST["first_name"]))
     {$nameErr = "Name is required";}
   else
     {
     $firstname = test_input($_POST["first_name"]);
     // check if name only contains letters and whitespace
     if (!preg_match("/^[a-zA-Z ]*$/",$first_name))
       {
       $nameErr = "Only letters and white space allowed";
       }
     }
	  if (empty($_POST["last_name"]))
     {$nameErr = "Name is required";}
   else
     {
     $lastname = test_input($_POST["last_name"]);
     // check if name only contains letters and whitespace
     if (!preg_match("/^[a-zA-Z ]*$/",$last_name))
       {
       $nameErr = "Only letters and white space allowed";
       }
     }
  
   if (empty($_POST["email"]))
     {$emailErr = "Email is required";}
   else
     {
     $email = test_input($_POST["email"]);
     // check if e-mail address syntax is valid
     if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/",$email))
       {
       $emailErr = "Invalid email format";
       }
     }
	 
	 if (empty($_POST["phone"]))
     {
		 $phoneErr = "Phone Number is required";}
   else
     {
     $phone = test_input($_POST["phone"]);
     
     if (!preg_match("/^\d{9}$/",$phone))
       {
       $phoneErr = "Invalid Phone Number ";
       }
     }
	 
	if (empty($_POST["birthdate"]))
     {$birthdateErr = "birthdate is required";}
   else
     {
     $birthdate = test_input($_POST["birthdate"]);
	 
	 
     }

   if (empty($_POST["message"]))
     {$message = "";}
   else
     {$message = test_input($_POST["message"]);}


    

}
  

function test_input($data)
{
     $data = trim($data);
     $data = stripslashes($data);
     $data = htmlspecialchars($data);
     return $data;
}
        
        
        echo "Hello" .$first_name.' '.$last_name;
        echo "<br>";
        echo "Birthdate:" .$birthdate;
        //print_r(date('d-m',strtotime($birthdate)));
        if(date('d-m',strtotime($birthdate))==date('d-m')){
        
               echo "<br>"; 
               echo "Today is your birthday " .$birthdate.PHP_EOL;
                echo"<br>";
        
                echo "Happy Birthday $first_name $last_name";
        
                echo "</br>";
        
              }
        
              else{
        
                echo " Wrong date of birth";
        
              }
              //echo "</br>";
             
        /*echo $birthdate;*/
    
        echo "Email:" .$email;
        echo "<br>";
        echo "Phone:" .$phone;
        echo "<br>";
        echo "Message:" .$message;
        echo "<br>";
        echo "File actual name is $name"."<br>";
        echo "File has .$type extension" . "<br>";
        echo "File has $size of size"."<br>";
            
          
        
 
?>
 <input type="submit" name="return" value="Return" onClick="javascript:history.go(-1)" \>
            
          