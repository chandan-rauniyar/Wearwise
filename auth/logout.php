<?php
session_start();
unset($_SESSION["user_id"]);
unset($_SESSION["username"]);
unset($_SESSION["profile_pic"]);
session_destroy();
header("Location: ../index.php");
exit();
?>
