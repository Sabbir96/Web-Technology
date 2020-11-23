<?php

$FirstNameerror = "";
	$LastNameerror = "";
	$PhoneNumbererror = "";
	$Addresserror ="";
	$Passworderror="";
	$Password="";$EmailAddress="";
		$myfile = fopen("../data/user.txt", "r") or die("Unable to open file!");
	while( $line=fgets($myfile))
{
	$words = explode(",",$line);
	$EmailAddress=$words[0];
	
	
	if($_SESSION['email']=$EmailAddress)
	{
	$mypass=$words[1];
	
	
	$Password=$mypass;
	
	}
	else {echo "Something is Wrong";};
	
	
	
	
}
fclose($myfile);
	?>
<!DOCTYPE html>
<html>
<head>
	<title>Password Recover</title>
</head>
<center>
<body>
<div style="display:inline-block;">
    <?php include '../view/header.php' ?>
  </div>

<h2>Password Recover</h2>
<div>
	<form action="../controller/validation_recoverpass.php" method="POST">
  <label  for="EmailAddress">Email:</label><br>
  <input type="text" id="EmailAddress" name="EmailAddress" value="" placeholder =<?php echo $EmailAddress?>><br>
  
  <label  for="Password">Password:</label><br>
  <input type="text" id="Password" name="Password" value="" placeholder =<?php echo $Password?>><br>
  

  

  <input type="submit" value="Update" name="update">
    
  <br><br>
  
</form>
</div>
<h3>
	
    <?php include '../view/footer.php' ?>
	
</h3>
</body>
</center>
</html>