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
        <form action="login.php" method="POST">
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
