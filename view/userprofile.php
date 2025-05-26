<?php
session_start();
$message = "";

if (isset($_SESSION["upload_message"])) {
    $message = $_SESSION["upload_message"];
    unset($_SESSION["upload_message"]);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" type="text/css" href="../style/userprofile.css" />
</head>
<body>
  <div class="profile-container">
    <h1>User Profile</h1>
    <p>This page is under development.</p>

    <?php if (!empty($message)) {
      echo "<span>$message</span><br>";
    } ?>

    <p>Upload an Image</p>
    <form action="../control/upload_action.php" method="post" enctype="multipart/form-data">
      <input type="file" name="fileToUpload" id="fileToUpload"><br><br>
      <button type="submit" name="upload">Upload Image</button><br><br>
      <button type="submit" name="logout">Logout</button>
    </form>

    <p>Thank you for your patience!</p>
  </div>
</body>
</html>
