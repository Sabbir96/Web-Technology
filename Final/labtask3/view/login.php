<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
</head>
<body>
        <?php
            require('../controller/login_controller.php');
        ?>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" >
            <label for="id">ID</label>
            <br>
            <input type="text" name="id" id="id" placeholder="ID" value="<?php echo $id?>" >
            <br>
            <br>
            <label for="password" >Password</label>
            <br>
            <input type="password" name="password" id="password" placeholder="Password" value="<?php echo $password?>">
            <br>
            <br>
            <input type="submit" value="Login" name="login">
        </form>
    
</body>
</html>
