<?php
session_start();

// Hardcoded credentials (Weak Security)
$valid_username = "admin";
$valid_password = "password";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username === $valid_username && $password === $valid_password) {
        $_SESSION["user"] = $username; // Store session
        $_SESSION["attempts"] = 0; // Reset attempts
        header("Location: dashboard.php"); // Redirect to dashboard
        exit();
    } else {
        echo "Invalid credentials";
    }
}
?>
