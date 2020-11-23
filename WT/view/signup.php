<?php

$FirstNameerror = "";
	$LastNameerror = "";
	$PhoneNumbererror = "";
	$EmailAddresserror ="";
	$Addresserror ="";
	$Passworderror="";
	$FirstName=$LastName=$PhoneNumber=$EmailAddress=$Address=$Password="";
	?>

<!DOCTYPE html>
<html>
<head>
	<title>Sign up</title>
</head>
<center>
<body>
<div style="display:inline-block;">
    <?php include '../view/header.php' ?>
  </div>

<h1>Sign up </h1>
<div>
	<form action="../controller/validation_signup.php" method="POST">
  <label  for="FirstName">First name:</label><?php echo $FirstNameerror ; ?><br>
  <input type="text" id="FirstName" name="FirstName" value=""><br>
  
  <label  for="LastName">Last name:</label><?php echo $LastNameerror ; ?><br>
  <input type="text" id="LastName" name="LastName" value=""><br>
  
  <label   for="PhoneNumber">Phone Number:</label><?php echo $PhoneNumbererror ; ?><br>
  <input type="text" id="rPhoneNumber" name="PhoneNumber" value=""><br>
  
  <label  for="EmailAddress">Email Address:</label><?php echo $EmailAddresserror ; ?><br>
  <input type="email" id="EmailAddress" name="EmailAddress" value=""><br>
  <label  for="Address">Address:</label><?php echo $Addresserror;?><br>
  <input type="address" id="Address" name="Address" value=""><br>
  
  <label   for="Password">Password:</label><?php echo $Passworderror ; ?><br>
  <input type="text" id="Password" name="Password" value="" placeholder ="enter your password"><br><br>
  <input    type="submit" value="Submit" name="submit">
    <input  type="submit" value="Back">
  <br><br>
  
</form>
</div>
<h3>
	
    <?php include '../view/footer.php' ?>
	
</h3>


</body>
</center>
</html>

	
	