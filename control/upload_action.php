<?php
session_start();

if (isset($_POST['logout'])) {
    session_destroy();
    header("Location: ../view/userlogin.php"); // adjust path
    exit();
}
$allowed = ["jpg", "jpeg", "png", "gif"];

if (isset($_POST['upload'])) {
    $target_dir = "../upload/";
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
    $message = "";

    // Validate image
if ($_FILES["fileToUpload"]["error"] == UPLOAD_ERR_NO_FILE) {
    $message .= "No file selected.<br>";
    $uploadOk = 0;
}

    elseif ($_FILES["fileToUpload"]["size"] > 2000000) {
        $message .= "File is too large.<br>";
        $uploadOk = 0;
    }

   elseif(!in_array($imageFileType, $allowed)) {
        $message .= "Only JPG, JPEG, PNG, and GIF files are allowed.<br>";
        $uploadOk = 0;
    }

    elseif ($uploadOk) {
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
            $message .= "The file " . htmlspecialchars(basename($_FILES["fileToUpload"]["name"])) . " has been uploaded.";
        } else {
            $message .= "There was an error uploading your file.";
        }
    } else {
        $message .= "Upload failed.";
    }

    $_SESSION["upload_message"] = $message;
    header("Location: ../view/userprofile.php");
    exit();
}
?>
