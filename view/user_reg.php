<?php include '../control/user_action.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>User Registration</title>
    <link rel="stylesheet" href="../style/style.css">
</head>
<body>
<h1>ABC Airlines User Registration</h1>

<img src="../image/plane.jpg" alt="airplane" width="450" height="200"><br><br><br>

<fieldset>
    <legend>Personal Information</legend>

    <form id="form" action="" method="post">
        <table cellspacing="10">

            <!-- First Name -->
            <tr>
                <td></td>
                <td><span class="error"><?php echo $firstnameError; ?></span></td>
            </tr>
            <tr>
                <td><label for="firstname">First Name :</label></td>
                <td><input type="text" id="firstname" name="firstname" value="<?php echo htmlspecialchars($firstname); ?>"></td>
            </tr>

            <!-- Last Name -->
            <tr>
                <td></td>
                <td><span class="error"><?php echo $lastnameError; ?></span></td>
            </tr>
            <tr>
                <td><label for="lastname">Last Name :</label></td>
                <td><input type="text" id="lastname" name="lastname" value="<?php echo htmlspecialchars($lastname); ?>"></td>
            </tr>

            <!-- Username -->
            <tr>
                <td></td>
                <td><span class="error"><?php echo $usernameError; ?></span></td>
            </tr>
            <tr>
                <td><label for="username">Username :</label></td>
                <td><input type="text" id="username" name="username" value="<?php echo htmlspecialchars($username); ?>"></td>
            </tr>

            <!-- Email -->
            <tr>
                <td></td>
                <td><span class="error"><?php echo $emailError; ?></span></td>
            </tr>
            <tr>
                <td><label for="email">Email :</label></td>
                <td><input type="text" id="email" name="email" value="<?php echo htmlspecialchars($email); ?>"></td>
            </tr>

            <!-- Phone -->
            <tr>
                <td></td>
                <td><span class="error"><?php echo $phoneError; ?></span></td>
            </tr>
            <tr>
                <td><label for="phone">Phone :</label></td>
                <td><input type="text" id="phone" name="phone" value="<?php echo htmlspecialchars($phone); ?>"></td>
            </tr>

            <!-- Passport -->
            <tr>
                <td></td>
                <td><span class="error"><?php echo $passportError; ?></span></td>
            </tr>
            <tr>
                <td><label for="passport">Passport Number :</label></td>
                <td><input type="text" id="passport" name="passport" value="<?php echo htmlspecialchars($passport); ?>"></td>
            </tr>

            <!-- Password -->
            <tr>
                <td></td>
                <td><span class="error"><?php echo $passwordError; ?></span></td>
            </tr>
            <tr>
                <td><label for="password">Password :</label></td>
                <td><input type="password" id="password" name="password"></td>
            </tr>

            <!-- DOB -->
            <tr>
                <td></td>
                <td><span class="error"><?php echo $dobError; ?></span></td>
            </tr>
            <tr>
                <td><label for="dob">Date of Birth :</label></td>
                <td><input type="date" id="dob" name="dob" value="<?php echo htmlspecialchars($dob); ?>"></td>
            </tr>

            <!-- Gender -->
            <tr>
                <td></td>
                <td><span class="error"><?php echo $genderError; ?></span></td>
            </tr>
            <tr>
                <td><label>Gender:</label></td>
                <td>
                    <input type="radio" id="male" name="gender" value="male" <?php if ($gender === 'male') echo "checked"; ?>>
                    <label for="male">Male</label>
                    <input type="radio" id="female" name="gender" value="female" <?php if ($gender === 'female') echo "checked"; ?>>
                    <label for="female">Female</label>
                </td>
            </tr>

            <!-- Address -->
            <tr>
                <td></td>
                <td><span class="error"><?php echo $addressError; ?></span></td>
            </tr>
            <tr>
                <td><label for="address">Address :</label></td>
                <td><textarea id="address" name="address"><?php echo htmlspecialchars($address); ?></textarea></td>
            </tr>

            <!-- Submit -->
            <tr>
                <td><a href="http://localhost/view/firstlab/view/userlogin.php" class="link">Back</a></td>
                <td><input type="submit" name="submit" value="Submit"></td>
            </tr>

        </table>
    </form>
</fieldset>
</body>
</html>
