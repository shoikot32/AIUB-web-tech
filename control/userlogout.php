<?php
session_start();
session_destroy();  
header("Location: ../view/userlogin.php?logout=success");
exit();
?>