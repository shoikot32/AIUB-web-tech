<?php
//include '../Control/loginAction.php'; // Handle login logic
?>
<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" href="login.css">
</head>

<body>
    <h1>Airplane Ticket Booking</h1>
    <h2>Login to Your Account</h2>

    <form action="" method="post">
        <table cellspacing="10">
            <tr>
                <td><label for="username">Username:</label></td>
                <td>
                    <input type="text" id="username" name="username">
                    <span class="error-message"><?php echo $usernameErr ?? ''; ?></span>
                </td>
            </tr>
            <tr>
                <td><label for="password">Password:</label></td>
                <td>
                    <input type="password" id="password" name="password">
                    <span class="error-message"><?php echo $passwordErr ?? ''; ?></span>
                </td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="Login"></td>
            </tr>
        </table>
    </form>
</body>
</html>
