<!DOCTYPE html>
<html>
<center>
<head>
	<title>Login</title>
</head>
<body>
<div style="display:inline-block;">
    <?php include 'header.php' ?>
  </div>

<h1>Login</h1>
<div>
	<form action="/WT/controller/validation.php" method="post">
		<label>Email:</label>
		<input type="text" name="email" required>
		<br>
		
		<label>Password:</label>
		<input type="text" name="password" required>
		<br>
		<input type="submit" value="Login" name="login">
		
		</form>
		
</div>
<h3>
	
    <?php include '../view/footer.php' ?>
	
</h3>
</body>
</center>
</html>