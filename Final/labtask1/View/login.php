<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <?php
        require('../Controller/action_login.php');
    ?>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
	
        <label for="id">Enter ID</label>
        <input type="text" name="id" value=<?php echo $id ?>>
        <label for="password">Enter Password</label>
        <input type="text" name="password" value=<?php echo $password ?>>
        <input type="submit" value="submit">
    </form>   
</body>
</html>