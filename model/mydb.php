<?php

function createCon(){
    return mysqli_connect("localhost", "root", "", "abc_airlines");
}

function insertUser($conn, $firstname, $lastname, $username, $email, $phone, $passport, $password, $dob, $gender, $address){
    $sql = "INSERT INTO users (firstname, lastname, username, email, phone, passport, password, dob, gender, address) 
            VALUES ('$firstname', '$lastname', '$username', '$email', '$phone', '$passport', '$password', '$dob', '$gender', '$address')";
    return mysqli_query($conn, $sql);
}

function checkUserLogin($conn, $username, $password){
    $sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
    return mysqli_query($conn, $sql);
}

function getUserByUsername($conn, $username){
    $sql = "SELECT * FROM users WHERE username = '$username'";
    $result = mysqli_query($conn, $sql);
    return mysqli_num_rows($result) > 0 ? mysqli_fetch_assoc($result) : null;
}

function getAllUsers($conn){
    $sql = "SELECT * FROM users";
    return mysqli_query($conn, $sql);
}

function getUserById($conn, $id){
    $sql = "SELECT * FROM users WHERE id = '$id'";
    $result = mysqli_query($conn, $sql);
    return mysqli_num_rows($result) > 0 ? mysqli_fetch_assoc($result) : null;
}

function updateUser($conn, $id, $firstname, $lastname, $username, $email, $phone, $passport, $password, $dob, $gender, $address){
    $sql = "UPDATE users SET 
            firstname = '$firstname',
            lastname = '$lastname',
            username = '$username',
            email = '$email',
            phone = '$phone',
            passport = '$passport',
            password = '$password',
            dob = '$dob',
            gender = '$gender',
            address = '$address'
            WHERE id = '$id'";
    return mysqli_query($conn, $sql);
}

function deleteUser($conn, $id){
    $sql = "DELETE FROM users WHERE id = '$id'";
    return mysqli_query($conn, $sql);
}

function closeCon($conn){
    mysqli_close($conn);
}
?>
