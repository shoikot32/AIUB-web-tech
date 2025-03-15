<!DOCTYPE html>
<head>
    <title>User Registration</title>
</head>
<body>
    <h1>ABC Airlines User Registration</h1>

    <image src="./image/plane.jpg" alt="airplane" width="450" height="200"> <br> <br> <br>

    <form action="submit.php" method="post" target="_blank">

        <table  cellspacing="10">

            <tr>
                <td><label for="firstname">First Name :</label>  <br><br></td>
                <td><input type="text" id="firstname" name="firstname" required>  <br><br></td>
            </tr>

            <tr>
                <td><label for="lastname">Last Name :</label> <br><br></td>
                <td><input type="text" id="lastname" name="lastname" required> <br><br></td>
            </tr>

            <tr>
                <td><label for="email">Email :</label> <br><br></td>
                <td><input type="email" id="email" name="email" required> <br><br></td>
            </tr>

            <tr>
                <td><label for="phone">Phone :</label><br><br> </td>
                <td><input type="text" id="phone" name="phone" required> <br><br></td>
            </tr>

            <tr>
                <td><label for="passport">Passport Number :</label>  <br><br></td>
                <td><input type="text" id="passport" name="passport" required> <br><br></td>
            </tr>

            <tr>
                <td><label for="password">Password :</label> <br><br> </td>
                <td><input type="password" id="password" name="password" required> <br><br></td>
            </tr>

            <tr>
                <td><label for="dob">Date of Birth :</label>  <br><br> </td>
                <td><input type="date" id="dob" name="dob" required> <br><br></td>
            </tr>

            <tr>
                <td><label for="gender">Gender:</label> <br><br> </td>
                
                <td>
                <input type="checkbox" id="male" name="gender" value="male">
                <label for="male">Male

                <input type="checkbox" id="female" name="gender" value="female">
                <label for="female">Female <br><br>
                </td>
            </tr>
            <tr>
                <td> <label for="address">Address : </label>  <br><br> </td>
                <td> <input type = "textarea" id="address" name="address" require>  <br><br> </td>	
            </tr>

                <td> 
                <br><br><br><br>
                </td>
                 
                <td>
                      <input type="submit" value="Submit">
                </td>
            

        </table>

    </form>

</body>
</html>
