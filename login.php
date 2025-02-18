<?php
if ($_SESSION['attempts'] >= 5) {
    die("Too many failed attempts. Try again later.");
}

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    if ($username === $valid_username && $password === $valid_password) {
        $_SESSION["user"] = $username; // Store user session
        $_SESSION["attempts"] = 0; // Reset failed attempts
        header("Location: dashboard.php"); // Redirect to dashboard
        exit();
    } else {
        $_SESSION['attempts']++; // Increase attempts count
        $error = "Login failed. Attempts: " . $_SESSION['attempts'];
    }
}
?>