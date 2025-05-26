<?php 
include '../model/mydb.php';

$errMsg = "";
$searchError = "";
$row = null;
$searchedValue = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $conn = createCon();

    // SEARCH
    if (isset($_POST['search'])) {
        $searchedValue = trim($_POST['search_value']);

        if (empty($searchedValue)) {
            $searchError = "Please enter a username or ID.";
        } else {
            if (is_numeric($searchedValue)) {
                $row = getUserById($conn, $searchedValue);
            } else {
                $row = getUserByUsername($conn, $searchedValue);
            }

            if (!$row) {
                $searchError = "No user found with this ID or username.";
            }
        }
    }

    // UPDATE
    if (isset($_POST['update'])) {
        $id = $_POST['user_id'];
        $firstname = trim($_POST['firstname']);
        $lastname = trim($_POST['lastname']);
        $username = trim($_POST['username']);
        $email = trim($_POST['email']);
        $phone = trim($_POST['phone']);
        $passport = trim($_POST['passport']);
        $password = trim($_POST['password']);
        $dob = $_POST['dob'];
        $gender = $_POST['gender'] ?? "";
        $address = trim($_POST['address']);

        $result = updateUser($conn, $id, $firstname, $lastname, $username, $email, $phone, $passport, $password, $dob, $gender, $address);

        if ($result) {
            $errMsg = "User updated successfully.";
            $row = getUserById($conn, $id);
        } else {
            $errMsg = "Error updating user.";
        }
    }

    // DELETE
    if (isset($_POST['delete'])) {
        $id = $_POST['user_id'];

        if (deleteUser($conn, $id)) {
            $errMsg = "User deleted successfully.";
            $row = null;
        } else {
            $errMsg = "Failed to delete user.";
        }
    }

    
    if (isset($_POST['add'])) {
        closeCon($conn);
        header("Location: ../view/user_reg.php"); 
        exit();
    }
    $allUsers = getAllUsers($conn);

    closeCon($conn);
}
?>
