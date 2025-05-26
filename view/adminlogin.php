<?php
session_start();

$errMsg = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';

    if ($username === "admin" && $password === "admin") {
        $_SESSION['admin_logged_in'] = true;
        header("Location: admin_dashboard.php");
        exit();
    } else {
        $errMsg = "Invalid username or password.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Admin Login - ABC Airlines</title>
    <style>
        body {
            font-family: Arial;
            background-color: #f4f4f4;
            text-align: center;
            padding-top: 100px;
            background-image: url('../image/admin.jpg');
            background-position: center; 
            background-size: cover;
            height: 100vh;
            margin: 0;
        }

        form {
            display: inline-block;
            padding: 20px;
            border: 1px solid #ccc;
            background: #fff;
        }

        input[type="text"], input[type="password"] {
            padding: 8px;
            width: 200px;
            margin-bottom: 10px;
        }

        input[type="submit"] {
            padding: 8px 16px;
            background-color: #0d6efd;
            color: white;
            border: none;
        }

        .error {
            color: red;
        }
        .link {
            display: inline-block;
            margin-top: 10px;
            color: #0d6efd;
            text-decoration: none;
        }
    </style>
</head>
<body>

    <h2>Admin Login - ABC Airlines</h2>

    <form method="POST" action="useredit.php">
        <div><input type="text" name="username" placeholder="Username"></div>
        <div><input type="password" name="password" placeholder="Password"></div>
        <div><input type="submit" value="Login"></div>
        <div><a href="http://localhost/view/firstlab/view/userlogin.php" class="link">Back</a></div>


        <div class="error"><?php echo $errMsg; ?></div>
    </form>

</body>
</html>
