<?php
session_start();

$_SESSION = [];

session_destroy();

setcookie(
    "student_name",
    "",
    time() - 3600,
    "/"
);

header("Location: login.php");
exit();
?>
