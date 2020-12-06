<?php

$FirstNameerror = "";
	$LastNameerror = "";
	$PhoneNumbererror = "";
	$EmailAddresserror ="";
	$Addresserror ="";
	$Passworderror="";
	$FirstName=$LastName=$PhoneNumber=$EmailAddress=$Address=$Password="";
		$myfile = fopen("../data/updateuser.txt", "r") or die("Unable to open file!");
	while( $line=fgets($myfile))
{
	$words = explode(",",$line);
	$myemail=$words[0];
	session_start();
	
	if($_SESSION['email']=$myemail)
	{
	$myfirstname=$words[1];
	$mylastname=$words[2];
	$myphonenumber=$words[3];
	$myaddress=$words[4];
	
	
	$FirstName=$myfirstname;
	$LastName=$mylastname;
	$PhoneNumber=$myphonenumber;
	$Address=$myaddress;
	}
	else {echo "Something is Wrong";};
	
	
}
fclose($myfile);
?>

<!DOCTYPE html>
<html>
<head>
	<title>Personal Information</title>
</head>
<center>
<body>
<div style="display:inline-block;">
    <?php include '../view/header.php' ?>
  </div>

<h2>Personal Information</h2>
<div>
	<form action="../controller/validation_updateinfo.php" method="POST">
  <label  for="FirstName">First name:</label><?php echo $FirstNameerror ; ?><br>
  <input type="text" id="FirstName" name="FirstName" value="" placeholder =<?php echo $FirstName?>><br>
  
  <label  for="LastName">Last name:</label><?php echo $LastNameerror ; ?><br>
  <input type="text" id="LastName" name="LastName" value="" placeholder =<?php echo$LastName?>><br>
  
  <label   for="PhoneNumber">Phone Number:</label><?php echo $PhoneNumbererror ; ?><br>
  <input type="text" id="rPhoneNumber" name="PhoneNumber" value="" placeholder =<?php echo$PhoneNumber?>><br>
  
  
 
  <label  for="Address">Address:</label><?php echo $Addresserror;?><br>
  <input type="address" id="Address" name="Address" value="" placeholder =<?php echo$Address?>><br>
  

  <input  type="submit" value="Update" name="update">
 
  <br><br>
  
</form>
</div>

<h3>
	
    <?php include '../view/footer.php' ?>
	
</h3>


</body>
</center>
</html>