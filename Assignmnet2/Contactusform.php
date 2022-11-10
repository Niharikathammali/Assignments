 <!DOCTYPE HTML>
<html>
<head>
<style>
.error {color: #FF0000;}

body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit]{
  background-color: #04AA6D;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
.return {background-color: #008CBA;} 
</style>
<title>
	PHP Forms - Validate E-mail and URL
</title>
</head>
<body>

<?php
// define variables and set to empty values
$nameErr = $emailErr =  $phoneErr = $birthdateErr = "" ;
$name = $email = $gender = $comment = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST")
{
   if (empty($_POST["firstname"]))
     {$nameErr = "Name is required";}
   else
     {
     $firstname = test_input($_POST["firstname"]);
     // check if name only contains letters and whitespace
     if (!preg_match("/^[a-zA-Z ]*$/",$firstname))
       {
       $nameErr = "Only letters and white space allowed";
       }
     }
	  if (empty($_POST["lastname"]))
     {$nameErr = "Name is required";}
   else
     {
     $lastname = test_input($_POST["lastname"]);
     // check if name only contains letters and whitespace
     if (!preg_match("/^[a-zA-Z ]*$/",$lastname))
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
     // check if e-mail address syntax is valid
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
?>

<h2>Contact Form</h2>
<p><span class="error">* required field.</span></p>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
   FirstName: <input type="text" name="firstname" placeholder="Your first name..">
   <span class="error">* <?php echo $nameErr;?></span>
   <br><br>
   
   
    <label for="lname">Last Name</label>
    <input type="text" id="lname" name="lastname" placeholder="Your last name..">
	
	<br><br>
   
   <label for="phone">Enter your phone number*:</label>
    <input type="tel" id="phone" name="phone" placeholder="10 digit number" >
	<span class="error">* <?php echo $phoneErr;?></span>
   <br><br>
   
   <label for="birthdate">Birthdate*:</label>
    <input type="date" id="birthdate" name="birthdate" >
	<span class="error">* <?php echo $birthdateErr;?></span>
	<br><br>
    
   <label for="email">Email*</label>
    <input type="text" placeholder="Enter Email" name="email" id="email" >
   <span class="error">* <?php echo $emailErr;?></span>
   <br><br>
   
   Message: <textarea name="message" rows="5" cols="40"></textarea>
   <br><br>
   
   <input type="submit" name="submit" value="Submit">
   
	<input type="button" name="return" value="Return" onClick="javascript:history.go(-1)" />
	
</form>

<?php
echo "<h2>Your Input:</h2>";
echo "Hello" .$firstname.' '.$lastname;
echo "<br>";
echo "Birthdate:" .$birthdate;
print_r(date('d-m',strtotime($birthdate)));
if(date('d-m',strtotime($birthdate))==date('d-m')){

        echo "Today is your birthday " .$birthdate.PHP_EOL;

        echo "Happy Birthday $firstname $lastname";

        echo "</br>";

      }

      else{

        echo " Wrong date of birth";

      }
     
/*echo $birthdate;
echo "<br>";*/
echo "Email:" .$email;
echo "<br>";
echo "Phone:" .$phone;
echo "<br>";
echo "Message:" .$message;
?>

</body>
</html>
