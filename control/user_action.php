<?php
include '../model/mydb.php';

$firstname = $lastname = $username = $email = $phone = $passport = $password = $dob = $gender = $address = "";
$firstnameError = $lastnameError = $usernameError = $emailError = $phoneError = $passportError = $passwordError = $dobError = $genderError = $addressError = "";

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["submit"])) {

    // Validate fields
    if (empty($_POST["firstname"])) {
        $firstnameError = "First Name is required";
    } else {
        $firstname = $_POST["firstname"];
    }

    if (empty($_POST["lastname"])) {
        $lastnameError = "Last Name is required";
    } else {
        $lastname = $_POST["lastname"];
    }

    if (empty($_POST["username"])) {
        $usernameError = "Username is required";
    } else {
        $username = $_POST["username"];
    }

    if (empty($_POST["email"])) {
        $emailError = "Email is required";
    } else {
        $email = $_POST["email"];
    }

    if (empty($_POST["phone"])) {
        $phoneError = "Phone number is required";
    } else {
        $phone = $_POST["phone"];
    }

    if (empty($_POST["passport"])) {
        $passportError = "Passport number is required";
    } else {
        $passport = $_POST["passport"];
    }

    if (empty($_POST["password"])) {
        $passwordError = "Password is required";
    } else {
        $password = $_POST["password"];
    }

    if (empty($_POST["dob"])) {
        $dobError = "Date of Birth is required";
    } else {
        $dob = $_POST["dob"];
    }

    if (empty($_POST["gender"])) {
        $genderError = "Gender is required";
    } else {
        $gender = $_POST["gender"];
    }

    if (empty($_POST["address"])) {
        $addressError = "Address is required";
    } else {
        $address = $_POST["address"];
    }

  
    if (
        empty($firstnameError) && empty($lastnameError) && empty($usernameError) &&
        empty($emailError) && empty($phoneError) && empty($passportError) &&
        empty($passwordError) && empty($dobError) && empty($genderError) &&
        empty($addressError)
    ) {
        $conn = createCon();

        if ($conn) {
            $success = insertUser($conn, $firstname, $lastname, $username, $email, $phone, $passport, $password, $dob, $gender, $address);
            closeCon($conn);

            if ($success) {
               
                header("Location: ../view/userlogin.php?");
                exit();
                 echo "User registered successfully!";
                 
            } else {
                echo " Failed to insert user.";
            }
        } 
        
        else {
            echo "Database connection failed!";
        }
    }
}