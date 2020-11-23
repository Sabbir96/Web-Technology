<?php


	$EmailAddresserror ="";
	$Passworderror="";
	$EmailAddress=$Password="";

 
if($_SERVER["REQUEST_METHOD"] == "POST")
{
    if(empty($_REQUEST["EmailAddress"]))
    {
        $EmailAddresserror ="please enter the EmailAddress";
    }
    
    else
    {
        $EmailAddress = $_REQUEST["EmailAddress"]; 
    }
    
    if(empty($_REQUEST["Password"]))
    {
       $Passworderror ="please enter the Password";
    }
    
    else
    {
        $Password = $_REQUEST["Password"]; 
    }
    
    
    if(empty($_REQUEST["Password"]))
	{
		echo "Your Password is not updated<br> click here to <a href='/WT/view/recoverpass.php'>Try again</a>";
	}
	else
	{$fileW = fopen("../data/Updatedpassword.txt", "a") or die("Unable to open file");

 
		
        fwrite($fileW, $EmailAddress.",");
        fwrite($fileW, $Password);

		
		
		
		
		
		
        fclose($fileW);
		
		
		echo "Your Password is updated<br> click here to <a href='/WT/view/home2.php'>Continue</a>";
 

	}
   
    
}

?>


<!DOCTYPE html>
<html>
<head>
	<title>Password Recover</title>
</head>
<body>

<h1>Password Recover</h1>
<div>
	<form action="../view/recoverpass.php" method="POST">
  <label  for="EmailAddress">Email:</label><?php echo $EmailAddresserror ; ?><br>
  <input type="text" id="EmailAddress" name="EmailAddress" value="" placeholder =<?php echo $EmailAddress?>><br>
  
  <label  for="Password">Password:</label><?php echo $Passworderror ; ?><br>
  <input type="text" id="Password" name="Password" value="" placeholder =<?php echo $Password?>><br>
  

  

  <input  type="submit" value="Back" name="back">
    
 <br><br>
  
</form >

</div>

<h3>
	
    <?php include '../view/footer.php' ?>
	
</h3>
</body>
</html>

