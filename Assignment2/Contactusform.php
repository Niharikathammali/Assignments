 <!DOCTYPE HTML>
<html>
<head>
<style>
.error {color: #FF0000;}

.elem-group{
	align-items:center;
	display:grid;
    grid-template-columns: 1fr 2fr;
   
 
}

.form{
	width:100%;
    padding-right:10px;
    
}
.table, {
  border: 0px solid;
}
	

		body {
			background: #ffffff;
            
            margin: 8px;
		}

		form {
			max-width: 420px;
			margin: 50px auto;
		}
        
        
		
        
		textarea {
			height: 150px;
			line-height: 150%;
			resize: grid;
		}

		
        
		[type="submit"] {
			font-family: sans-serif;
			width: 25%;
			background-color:MediumSeaGreen;
			border-radius: 5px;
			border: 0;
			cursor: pointer;
			color: white;
			font-size: 22px;
			padding-top: 10px;
			padding-bottom: 10px;
			transition: all 0.3s;
			margin-top: 2px;
			font-weight: 700;
		}

		[type="submit"]:hover {
			background: #993333;
		}

		.caption-style-1 {
			margin: auto;
			list-style-type: none;
			padding: 0px;
		}
</style>
<?php
$first_name = $last_name = $phone = $birthdate = $email = $message = "";
$nameErr = $emailErr =  $phoneErr = $birthdateErr = "" ;
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
   if (empty($_POST["first_name"]))
     {$nameErr = "Name is required";}
   else
     {
     $first_name = test_input($_POST["first_name"]);
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
     $last_name = test_input($_POST["last_name"]);
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

?>

<center>
<H1> Contact Form </H1>
</center>
<p><span class="error"></span></p>

<form action="test2.php" method="post">
  <div class="elem-group">
    <label for="First Name">First Name:<span class="error">*</span></label>
    <input type="text" id="name" name="first_name" placeholder="Your first_name" pattern=[A-Z\sa-z]{3,20} >
    <span class="error"><?php echo $nameErr;?></span> 
  </div><br>

  <div class="elem-group">
    <label for="Last Name">Last Name:</label>
    <input type="text" id="name" name="last_name" placeholder="Your last_name">
  </div><br>

  <div class="elem-group">
    <label for="Mobile">Mobile Number:<span class="error">*</span></label>
    <input type="tel" id="phone" name="phone" placeholder="Your contact number">
    <span class="error"><?php echo $phoneErr;?></span>
  </div><br>

  <div class="elem-group">
    <label for="birthdate">Birthdate:<span class="error">*</span></label>
    <input type="date" id="birthdate" name="birthdate">
    <span class="error"><?php echo $birthdateErr;?></span>
  </div><br>

  <div class="elem-group">
    <label for="email">Mail:<span class="error">*</span></label>
    <input type="email" id="email" name="email"  placeholder="Your email" >
    <span class="error"><?php echo $emailErr;?></span>
  </div><br>
  
  <div class="elem-group">
    <label for="Message">Message:</label>
    <textarea id="message" name="message" placeholder="Say whatever you want.."></textarea>
  </div>
  <input type="submit" name="submit" value="Submit">
   
  <input type="submit" name="return" value="Return" onClick="javascript:history.go(-1)" \>
</form>
    
</body>
</html>



