<!DOCTYPE html>
<html>
<center>
<head>
	<title>Dashboard</title>
</head>
<body>
<div style="display:inline-block;">
    <?php include '../view/header.php' ?>
  </div>
</center>
 <h2>Place Orders</h2>
	<?php
      $myfile = fopen("../data/orders.txt", "r") or die("Unable to open file!");
      #echo fread($myfile, filesize("data/orders.txt"));
      while ($line = fgets($myfile)) 
	  {
		  echo "<br>";
        echo $line."<br>"."<button>Place order to user</button>";
		echo "<br>";
		
      }
      fclose($myfile);
    ?>
	</ol>
	
	<div>

<form action="/WT/view/signup.php" method="post">
	<input type="submit" value="Sign Up" >
</form>
<form action="/WT/view/login.php" method="post">
	<input type="submit" value="Log Out" >
</form>

</div>
<center>	
<h3>
	
    <?php include '../view/footer.php' ?>
	
</h3>
</center>
</body>

</html>
