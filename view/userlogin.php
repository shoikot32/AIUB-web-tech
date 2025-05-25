<?php include '../control/login_action.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>User Login</title>
    <link rel="stylesheet" href="../style/userlogin.css">
</head>
<body>
    <h1>ABC Airlines Login</h1>

    <img src="https://media0.giphy.com/media/v1.Y2lkPTc5MGI3NjExZm01dm52aDhjZ2w4bmNkb3hmOXZ2ejVkaWRybzIwaHdpbXRtamp3biZlcD12MV9pbnRlcm5hbF9naWZfYnlfaWQmY3Q9dg/YXcPVq2smFQHsXoXYt/giphy.gif" alt="airplane" width="450" height="200"><br><br><br>

    <fieldset>
        <legend>Login Information</legend>

        <form id="loginForm" action="userlogin.php" method="post">
            <table cellspacing="5">

                <!-- Username -->
                <tr>
                    <td><label for="username">Username :</label></td>
                    <td><input type="text" id="username" name="username" ></td>
                </tr>

                <!-- Password -->
                <tr>
                    <td><label for="password">Password :</label></td>
                    <td><input type="password" id="password" name="password" ></td>
                </tr>

                <!-- Submit -->
                <tr>
                    <td> <a href="http://localhost/view/firstlab/view/user_reg.php" class="link">Sign Up </a></td>
                    <td><input type="submit" name="submit" value="login"></td>
                </tr>

            </table>
        </form>
    </fieldset>
</body>
</html>
