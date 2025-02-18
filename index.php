<?php
session_start();

// Dummy credentials (Replace with database authentication)
$valid_username = "admin";
$valid_password = "password";

// Initialize login attempts if not set
if (!isset($_SESSION['attempts'])) {
    $_SESSION['attempts'] = 0;
}

// Lockout after 5 failed attempts
if ($_SESSION['attempts'] >= 5) {
    die("Too many failed attempts. Try again later.");
}

// Handle login request
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = trim($_POST["username"]);
    $password = trim($_POST["password"]);

    if ($username === $valid_username && $password === $valid_password) {
        $_SESSION["user"] = $username; // Store session
        $_SESSION["attempts"] = 0; // Reset attempts
        header("Location: dashboard.php"); // Redirect to dashboard
        exit();
    } else {
        $_SESSION['attempts']++; // Increase attempt count
        $error = "Invalid username or password. Attempts: " . $_SESSION['attempts'];
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modern Login Page</title>
    <link rel="stylesheet" href="styles.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
</head>
<body>
    <div class="login-container">
        <h2>Welcome Back</h2>
        <p>Sign in to continue</p>
        <form action="#">
            <div class="input-group">
                <i class="fa fa-envelope"></i>
                <input type="" id="username" name="username" placeholder="Email" required>
            </div>
            <div class="input-group">
                <i class="fa fa-lock"></i>
                <input type="password" id="password" name="password" placeholder="Password" required>
            </div>
            <button type="submit" class="btn">Login</button>
            <p class="forgot-password"><a href="#">Forgot Password?</a></p>
            <p class="register-link">Don't have an account? <a href="#">Sign Up</a></p>
        </form>
    </div>
</body>
</html>
