
<?php

$FirstNameerror = "";
	$LastNameerror = "";
	$PhoneNumbererror = "";
	$EmailAddresserror ="";
	$Addresserror ="";
	$Passworderror="";
	$FirstName=$LastName=$PhoneNumber=$EmailAddress=$Address=$Password="";

 
if($_SERVER["REQUEST_METHOD"] == "POST")
{
    if(empty($_REQUEST["FirstName"]))
    {
        $FirstNameerror ="please enter the First name";
    }
    
    else
    {
        $FirstName = $_REQUEST["FirstName"]; 
    }
    
    if(empty($_REQUEST["LastName"]))
    {
        $LastNameerror ="please enter the Last name";
    }
    
    else
    {
        $LastName = $_REQUEST["LastName"]; 
    }
    
    
    if(empty($_REQUEST["PhoneNumber"]))
    {
        $PhoneNumbererror ="please enter the Phone number";
    }
    
    else
    {
        $PhoneNumber = $_REQUEST["PhoneNumber"]; 
    }
    
    
    if(empty($_REQUEST["EmailAddress"]))
    {
        $EmailAddresserror ="please enter the Email address";
    }
    
    else
    {
        $EmailAddress = $_REQUEST["EmailAddress"]; 
    }
    
    if(empty($_REQUEST["Address"]))
    {
        $Addresserror ="please enter the Address";
    }
    
    else
    {
        $Address = $_REQUEST["Address"]; 
    }
    
    
    if(empty($_REQUEST["Password"]))
    {
        $Passworderror ="please enter the Password";
    }
    
    else
    {
        $Password = $_REQUEST["Password"]; 
    }
    

 

        $fileW = fopen("../data/newuser.txt", "a+") or die("Unable to open file");

		fwrite($fileW, $EmailAddress.",");
        fwrite($fileW, $FirstName.",");
        fwrite($fileW, $LastName.",");
		fwrite($fileW, $PhoneNumber.",");
		fwrite($fileW, $Address);
		fwrite($fileW, "\n");
		fclose($fileW);
		
		
		$fileW = fopen("../data/user.txt", "a+") or die("Unable to open file");
		fwrite($fileW, "\n");
		fwrite($fileW, $EmailAddress.",");
		fwrite($fileW, $Password);
		
		fclose($fileW);
		
		
		
		
		
       
		
		
		
 

}

?><!DOCTYPE html>
<html>
<head>
	<title>Sign up</title>
</head>
<center>
<body>

<h1>Sign up</h1>
<div>
<form action="../view/signup.php" method="POST">
  <label  for="FirstName">First name:</label><?php echo $FirstNameerror ; ?><br>
  <input type="text" id="FirstName" name="FirstName" value=""><br>
  
  <label  for="LastName">Last name:</label><?php echo $LastNameerror ; ?><br>
  <input type="text" id="LastName" name="LastName" value=""><br>
  
  <label  for="PhoneNumber">Phone Number:</label><?php echo $PhoneNumbererror ; ?><br>
  <input type="text" id="rPhoneNumber" name="PhoneNumber" value=""><br>
  
  <label   for="EmailAddress">Email Address:</label><?php echo $EmailAddresserror ; ?><br>
  <input type="email" id="EmailAddress" name="EmailAddress" value=""><br>
  <label  for="Address">Address:</label><?php echo $Addresserror;?><br>
  <input type="address" id="Address" name="Address" value=""><br>
  
  <label  for="Password">Password:</label><?php echo $Passworderror ; ?><br>
  <input type="text" id="Password" name="Password" value="" placeholder ="enter your password"><br><br>
  
    <input  type="submit" value="Back">
  <br><br>
  

</form>
<form action="/WT/view/login.php" method="post">
	<input  type="submit" value="Log in" >
</form>
</div>
<h1>
	
    <?php include '../view/footer.php' ?>
	
</h1>
</body>
</center>
</html>

