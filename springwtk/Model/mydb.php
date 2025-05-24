<?php

function createcon(){
    return new mysqli("localhost", "root", "", "events");
}

function insertdata($conn, $name, $email, $phone,  $gender, $terms){
    $sql = "INSERT INTO EVENTS (FullName, Email, PhoneNumber, Gender, Terms_Conditions) 
        VALUES ('$name', '$email', '$phone',  '$gender', '$terms')";
        

    if ($conn -> query($sql))
    {
        return true;
    }
 else {
    return false;
 }

}

function closecon($conn){
    $conn ->close();
}

function fetchuserdata($conn){
    $sql ="SELECT * FROM EVENT";
    return mysqli_query($conn, $sql) ;
} 
?>