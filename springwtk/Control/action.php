<?php
include "../model/mydb.php";
session_start();
$nameErr = $emailErr = $phoneErr  = $genderErr = $termsErr = "";
$name = $email = $phone = $gender = $terms =  "";
$haserror= 0;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Full Name
    if (isset($_REQUEST['name']) && $_POST['name'] == "") {
        $nameErr = "Name is required.";
        $haserror =1;
    } else {
        $name = $_POST['name'];
    }

    // Email
    if (empty($_POST['email']) && $_POST['email'] == "") {
        $emailErr = "Email is required.";
        $haserror =1;
    } else {
        $email = $_POST['email'];
    }

    // Phone
    if (isset($_POST['phone']) && $_POST['phone'] == "") {
        $phoneErr = "Phone is required.";
        $haserror =1;
    } else {
        $phone = $_POST['phone'];
    }

   // Gender
    if (!isset($_POST['gender'])) {
        $genderErr = "Gender is required.";
        $haserror =1;
    } else {
        $gender = $_POST['gender'];
    }

    // Terms
    if (!isset($_POST['terms'])) {
        $termsErr = "You must agree to terms.";
        $haserror =1;
    } else {
        $terms = $_POST['terms'];
    }

    // If all errors are empty
    if ($nameErr == "" || $emailErr == "" || $phoneErr == "" ||  $genderErr == "" || $termsErr == "") {
        echo "<h2>Registration Successful</h2>";
        echo "<p>Full Name: $name</p>";
        echo "<p>Email: $email</p>";
        echo "<p>Phone: $phone</p>";
        echo "<p>Gender: $gender</p>";
        echo "<p>Terms Agreed: $terms</p>";
    } 
    else {
        echo "<p>Full Name: $nameErr</p>";
        echo "<p>Email: $emailErr</p>";
        echo "<p>Phone: $phoneErr</p>";
        echo "<p>Gender: $genderErr</p>";
        echo "<p>Terms Agreed: $termsErr</p>";
    }
    if ($haserror == 0) {
        // Insert into DB
        $conn = createcon();
        if(insertdata($conn, $name, $email, $phone,  $gender, $terms))
        {
                header("location: ../view/login.php");
        }
        else {
           $message = mysqli_error($conn);
        }
        closecon($conn);
    } 
}
?>