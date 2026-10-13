<?php
session_start();

if (!isset($_SESSION['student_name'])) {
    header("Location: login.php");
    exit();
}

$name = $_SESSION['student_name'];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Student Dashboard</title>
</head>
<body>
    <h1>Welcome, AMINA <?php echo htmlspecialchars($name, ENT_QUOTES, 'UTF-8'); ?>!</h1>

    <p>You have successfully logged in.</p>

    <p>Your name is stored in a session and a cookie.</p>

    <a href="logout.php">Logout</a>
</body>
</html>
