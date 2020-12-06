<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User</title>
</head>
<body>
    <?php
        require('../Controller/action_user.php');
    ?>
    <table>
        <th>
            <td>user name</td>
            <td>balance</td>
        </th>
        <tr>
            <td><?php echo $userName ?></td>
            <td><?php echo $balance ?></td>
        </tr>
    </table>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
	
        <label for="amount">Enter Amount</label>
        <input type="text" name="amount" value=<?php echo $amount ?>>
        <input type="submit" name="add" value="add">
        <input type="submit" name="withdraw" value="withdraw">
    </form>   
</body>
</html>