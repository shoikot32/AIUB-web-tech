<!DOCTYPE html>
<html>
<head>
    <title>User Registration</title>
    <link rel="stylesheet" href="style.css">
    <script defer src="index.js"></script>
</head>
<body>
    <h1>ABC Airlines User Registration</h1>

    <img src="./image/plane.jpg" alt="airplane" width="450" height="200"><br><br><br>

    <fieldset>
        <legend>Personal Information</legend>

        <form id="form" action="submit.php" method="post">
            <table cellspacing="10">

                <!-- First Name -->
                <tr>
                    <td></td>
                    <td><span id="errorFirstname" class="error"></span></td>
                </tr>
                <tr>
                    <td><label for="firstname">First Name :</label></td>
                    <td><input type="text" id="firstname" name="firstname"></td>
                </tr>

                <!-- Last Name -->
                <tr>
                    <td></td>
                    <td><span id="errorLastname" class="error"></span></td>
                </tr>
                <tr>
                    <td><label for="lastname">Last Name :</label></td>
                    <td><input type="text" id="lastname" name="lastname"></td>
                </tr>

                <!-- Email -->
                <tr>
                    <td></td>
                    <td><span id="errorEmail" class="error"></span></td>
                </tr>
                <tr>
                    <td><label for="email">Email :</label></td>
                    <td><input type="text" id="email" name="email"></td>
                </tr>

                <!-- Phone -->
                <tr>
                    <td></td>
                    <td><span id="errorPhone" class="error"></span></td>
                </tr>
                <tr>
                    <td><label for="phone">Phone :</label></td>
                    <td><input type="text" id="phone" name="phone"></td>
                </tr>

                <!-- Passport -->
                <tr>
                    <td></td>
                    <td><span id="errorPassport" class="error"></span></td>
                </tr>
                <tr>
                    <td><label for="passport">Passport Number :</label></td>
                    <td><input type="text" id="passport" name="passport"></td>
                </tr>

                <!-- Password -->
                <tr>
                    <td></td>
                    <td><span id="errorPassword" class="error"></span></td>
                </tr>
                <tr>
                    <td><label for="password">Password :</label></td>
                    <td><input type="password" id="password" name="password"></td>
                </tr>

                <!-- DOB -->
                <tr>
                    <td></td>
                    <td><span id="errorDOB" class="error"></span></td>
                </tr>
                <tr>
                    <td><label for="dob">Date of Birth :</label></td>
                    <td><input type="date" id="dob" name="dob"></td>
                </tr>

                <!-- Gender -->
                <tr>
                    <td></td>
                    <td><span id="errorGender" class="error"></span></td>
                </tr>
                <tr>
                    <td><label>Gender:</label></td>
                    <td>
                        <input type="radio" id="male" name="gender" value="male">
                        <label for="male">Male</label>
                        <input type="radio" id="female" name="gender" value="female">
                        <label for="female">Female</label>
                    </td>
                </tr>

                <!-- Address -->
                <tr>
                    <td></td>
                    <td><span id="errorAddress" class="error"></span></td>
                </tr>
                <tr>
                    <td><label for="address">Address :</label></td>
                    <td><textarea id="address" name="address"></textarea></td>
                </tr>

                <!-- Submit -->
                <tr>
                    <td></td>
                    <td><input type="submit" value="Submit"></td>
                </tr>

            </table>
        </form>
    </fieldset>
</body>
</html>
