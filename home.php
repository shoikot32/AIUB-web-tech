<!DOCTYPE html>
<html>
<head>
    <title>Seller Registration</title>
    <link rel="stylesheet" href="home.css">
    <script src="home.js" defer></script>
</head>

<body>
    <h1>Airplane Ticket Booking</h1>
    <h2>Welcome to ABC Airplane Booking</h2>

    <form action="action.php" method="post"  onsubmit="return validateForm();">
        <h2>Flight Details</h2>
        <table cellspacing="10">
            <tr>
                <td><label for="from">From:</label></td>
                <td><input type="text" id="from" name="from" required></td>
            </tr>
            <tr>
                <td><label for="to">To:</label></td>
                <td><input type="text" id="to" name="to" required></td>
            </tr>
            <tr>
                <td><label for="departure-date">Departure Date:</label></td>
                <td><input type="date" id="departure-date" name="departure-date" required></td>
            </tr>
            <tr>
                <td><label for="return-date">Return Date:</label></td>
                <td><input type="date" id="return-date" name="return-date"></td>
            </tr>
            <tr>
                <td><label for="flight-type">Flight Type:</label></td>
                <td>
                    <select id="flight-type" name="flight-type" required>
                        <option value=""></option>
                        <option value="economy">Economy</option>
                        <option value="business">Business</option>
                        <option value="first-class">First Class</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td><label for="passengers">Number of Passengers:</label></td>
                <td><input type="number" id="passengers" name="passengers" min="1" required></td>
            </tr>
            <tr>
                <td><label for="name">Full Name:</label></td>
                <td>
                    <input type="text" id="fullName" name="name">
                    <div id="nameError" class="error-message"></div>
                </td>
            </tr>
            <tr>
                <td><label for="email">Email:</label></td>
                <td>
                    <input type="email" id="email" name="email">
                    <div id="emailError" class="error-message"></div>
                </td>
            </tr>
            <tr>
                <td><label for="phone">Phone Number:</label></td>
                <td>
                    <input type="tel" id="phone" name="phone">
                    <div id="phoneError" class="error-message"></div>
                </td>
            </tr>
            <tr>
                <td><label for="passport">Passport Number:</label></td>
                <td><input type="text" id="passport" name="passport" required></td>
            </tr>
            <tr>
                <td><label for="dob">Date of Birth:</label></td>
                <td><input type="date" id="dob" name="dob" required></td>
            </tr>
            <tr>
                <td><label for="gender">Gender:</label></td>
                <td>
                    <input type="radio" id="male" name="gender" value="male">
                    <label for="male">Male</label>
                    <input type="radio" id="female" name="gender" value="female">
                    <label for="female">Female</label>
                    
                </td>
            </tr>
            <tr>
                <td><label for="address">Address:</label></td>
                <td><input type="text" id="address" name="address" required></td>
            </tr>
            <tr>
                <td>Agreement:</td>
                <td>
                    <label><input type="checkbox" id="terms"> I agree to the Terms & Conditions</label><br>
                    <label><input type="checkbox" id="privacy"> I agree to the Privacy Policy</label>
                </td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="Book Now"></td>
            </tr>
        </table>
    </form>
</body>
</html>
