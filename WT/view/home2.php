<!DOCTYPE html>
<html>

<head>
	<title>Home</title>
</head>
<body>
<center>
<div style="display:inline-block;">
    <?php include 'header.php' ?>
  </div>

<div>

<?php


session_start();
echo "<h3>Welcome,</h3>".$_SESSION['email'];

echo "<br>";

?>


<h2> Take Products Order </h2>
	
	<?php
      $myfile = fopen("../data/orders.txt", "r") or die("Unable to open file!");
      
      while ($line = fgets($myfile)) {
		  echo "<br>";
        echo $line."<br>"."<button>Take Orders</button>";
		echo "<br>";
		
      }
      fclose($myfile);
    ?>
	</br>
<form action="/WT/controller/validation_logout.php" method="post">
	
	<input  type="submit" value="Log Out" name="" >
</form>
<br>
<form action="/WT/view/recoverpass.php" method="post">
	
	<input  type="submit" value="Recover pass" name="" >
</form>
<br>
<form action="/WT/view/updateinfo.php" method="post">
	<input  type="submit" value="Update Personal Info." >
</form>

</div>



<center>
<h3>
	
    <?php include '../view/footer.php' ?>
	
</h3>
</center>

</body>

</html>
