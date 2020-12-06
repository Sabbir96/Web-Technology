<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>

<div>
<?php

	$myfile = fopen("../data/user.txt", "r") or die("Unable to open file!");
	while( $line=fgets($myfile))
{
	$words = explode(",",$line);
	$myemail=$words[0];
	$mypass=$words[1];
	
}
fclose($myfile);
	if(isset($_POST['login']))
	{
		$email=$_POST['email'];
		
		$password=$_POST['password'];
		
		if($email==$myemail and $password==$mypass)
		{
		
			session_start();
			$_SESSION['email']=$email;
			
			header("location:/WT/view/home2.php");
			
			
		}
		else
		{
			echo "Email or Password is Invalid.<br> click here to <a href='/WT/view/login.php'>Try again</a>";
		}
	}
	else
	{header("location:login.php");}

?>
</div>
<center>
<h3>
	
     <?php include '../view/footer.php' ?>
	
</h3>
</center>
</body>
</html>