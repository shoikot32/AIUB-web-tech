<?php
session_start();
include "../model/mydb.php";

if(isset($_REQUEST['submit'])) {
    $conn = createCon();
    $res = checkUserLogin($conn, $_REQUEST['username'], $_REQUEST['password']);
    
    if(mysqli_num_rows($res) > 0) {
        $user = mysqli_fetch_assoc($res);
        $_SESSION['username'] = $user['username'];
        header("Location: ../view/userprofile.php");
        exit(); 
    } else {
        echo "Invalid username or password";
    }

    closeCon($conn);
}

?>