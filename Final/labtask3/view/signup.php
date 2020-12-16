<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
</head>
<body>
    <?php
          require('../controller/signup_controller.php');
    ?>
      <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
                        <label for="userName" >User Name</label>
                        <br>
                        <br>
                        <input type="text" name="userName" id="userName" placeholder="User Name" value="<?php echo $userName?>">
                        <br>
                        <br>
                        <label for="id" >ID</label>
                        <br>
                        <br>
                        <input type="text" name="id" id="id" placeholder="ID" value="<?php echo $id?>">
                        <br>
                        <br>
                        <label for="password" >Password</label>
                        <br>
                        <br>
                        <input type="password" name="password" id="password" placeholder="Password" value="<?php echo $password?>">
                        <br>
                        <br>
                        <label for="email" >Email</label>
                        <br>
                        <br>
                        <input type="text" name="email" id="email" placeholder="Email" value="<?php echo $email?>">
                        <br>
                        <br>
                        <label for="dob" >Date of Birth</label>
                        <br>
                        <br>
                        <input type="date" name="dob" id="dob" placeholder="Date of Birth" value="<?php echo $dob?>">
                        <br>
                        <br>
                        <input type="submit" value="SignUp" name="signUp" >
                    </form>


</body>
</html>