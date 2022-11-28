 <!DOCTYPE HTML>
<html>
<head>
<style>
.error {color: #FF0000;}
/* Style inputs with type="text", select elements and textareas */
input[type=text], select, textarea {
  width: 100%; /* Full width */
  padding: 12px; /* Some padding */ 
  border: 1px solid #ccc; /* Gray border */
  border-radius: 4px; /* Rounded borders */
  box-sizing: border-box; /* Make sure that padding and width stays in place */
  margin-top: 6px; /* Add a top margin */
  margin-bottom: 16px; /* Bottom margin */
  resize: vertical /* Allow the user to vertically resize the textarea (not horizontally) */
}

/* Style the submit button with a specific background color etc */
input[type=submit] {
  background-color: #04AA6D;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

/* When moving the mouse over the submit button, add a darker green color */
input[type=submit]:hover {
  background-color: #45a049;
}

/* Add a background color and some padding around the form */
.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
</style>

<title>
	PHP Forms - Validate E-mail and URL
</title>
</head>
<body style="background-color:#1c87c9;">

<?php
// define variables and set to empty values
$nameErr = $emailErr =  $phoneErr = $birthdateErr = "" ;
$firstname = $lastname = $email = $phone = $birthdate = $message = "";

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
<!--<p><span class="error">* required field.</span></p>-->

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    <lable for="fname">First Name:<span class="error">*</span></lable>
    <input type="text" name="firstname" placeholder="Your first name..">
   <span class="error"><?php echo $nameErr;?></span>

   <label for="lname">Last Name:</label>
    <input type="text" id="lname" name="lastname" placeholder="Your last name.."><br><br>
	 
   
   <label for="phone">Mobile:<span class="error">*</label>
    <input type="tel" id="phone" name="phone" placeholder="10 digit number" >
	<span class="error"><?php echo $phoneErr;?></span>
   
   
   <label for="birthdate">Birthdate:<span class="error">*   </label>
    <input type="date" id="birthdate" name="birthdate" >
	<span class="error"><?php echo $birthdateErr;?></span><br><br>
	
    
   <label for="email">Email: <span class="error">*  </label>
    <input type="text" placeholder="Enter Email" name="email" id="email" >
   <span class="error"><?php echo $emailErr;?></span><br><br>
   
   <tr>
   <label for="message">Message:
    <textarea name="textarea" rows="5" cols="70"></textarea>
    
    <br><br>
   </tr>
   
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
     
/*echo $birthdate;*/
echo "<br>";
echo "Email:" .$email;
echo "<br>";
echo "Phone:" .$phone;
echo "<br>";
echo "Message:" .$message;
?>
</body>
</html>



