<!DOCTYPE html>
<html>
<head>
    <title>Seller Registration</title>
</head>


<body>

    <h1>Airplane Ticket Booking</h1>

    <h2>Welcome to ABC Airplane Booking</h2>

    <form action="Airplane booking.php" method="post" target="_blank">

    <h2>Flight Details</h2>

        <table cellspacing="10">
            <tr>
                <td><label for="from">From:</label> <br><br></td>
                <td><input type="text" id="from" name="from" required> <br><br></td>
            </tr>
            <tr>
                <td><label for="to">To:</label> <br><br></td>
                <td><input type="text" id="to" name="to" required> <br><br></td>
                </tr>
           
                <tr>
                <td><label for="departure-date">Departure Date:</label> <br><br></td>
                <td><input type="date" id="departure-date" name="departure-date" required> <br><br></td>
                </tr>

            <tr>
                <td><label for="return-date">Return Date:</label> <br><br></td>
                <td><input type="date" id="return-date" name="return-date"> <br><br></td>
             </tr>

              <tr>
                <td><label for="flight-type">Flight Type:</label> <br><br></td>
                

                 <td>
                    <select id="flight-type" name="flight-type" required>
                        <option value = ""></option>
                        <option value="economy">Economy</option>
                        <option value="business">Business</option>
                        <option value="first-class">First Class</option>
                    </select> <br><br>
                </td>
            
            </tr>

            <tr>

                <td><label for="passengers">Number of Passengers:</label> <br><br></td>
                <td><input type="number" id="passengers" name="passengers" min="1" required> <br><br></td>
  </tr>
  <tr>
                <td><label for="name">Full Name:</label> <br><br></td>
                <td><input type="text" id="name" name="name" required> <br><br></td>
                </tr>

                <tr>
                <td><label for="email">Email:</label> <br><br></td>
                <td><input type="email" id="email" name="email" required> <br><br></td>
                </tr>

              <tr>
                <td><label for="phone">Phone Number:</label> <br><br></td>
                <td><input type="tel" id="phone" name="phone" required> <br><br></td>
                </tr>

              <tr>
                <td><label for="passport">Passport Number:</label> <br><br></td>
                <td><input type="text" id="passport" name="passport" required> <br><br></td>
                </tr>
            
            </tr>

            <tr>

            <td><label for="dob">Date of Birth:</label> <br><br></td>
            <td><input type="date" id="dob" name="dob" required> <br><br></td>
            </tr>

                <td><label for="gender">Gender:</label> <br><br></td>
                <td>
                    <input type="radio" id="male" name="gender" value="male">
                    <label for="male">Male</label>
                    <input type="radio" id="female" name="gender" value="female">
                    <label for="female">Female</label> <br><br>
                </td>

              </tr>
              <tr>
                <td><label for="address">Address:</label> <br><br></td>
                <td><input type="text" id="address" name="address" required> <br><br></td>
                
            </tr>

            <tr>
                <td><br><br><br><br></td>
                <td><input type="submit" value="Book Now"></td>
            </tr>
        </table>

    </form>
</body>
</html>
