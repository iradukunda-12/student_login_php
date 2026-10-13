<?php
session_start();

$savedName = $_COOKIE['student_name'] ?? '';

if (isset($_SESSION['student_name'])) {
    header("Location: dashbord.php");
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = trim($_POST['student_name']);

    if ($name != "") {
        $_SESSION['student_name'] = $name;

        setcookie(
            "student_name",
            $name,
            time() + (7 * 24 * 60 * 60),
            "/"
        );

        header("Location: dashbord.php");
        exit();
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Student Login</title>
</head>
<body>
    <h2>Student Login</h2>

    <form method="POST" action="login.php">
        <label>Enter Student Name:</label><br>

        <input
            type="text"
            name="student_name"
            value="<?php echo htmlspecialchars($savedName, ENT_QUOTES, 'UTF-8'); ?>"
            required
        >

        <br><br>
        <button type="submit">Login</button>
    </form>
</body>
</html>