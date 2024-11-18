<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="form-container">
        <form action="register_process.php" method="POST">
            <h2>Register</h2>
            <div class="input-field">
                <input type="text" name="username" required placeholder="Enter your username">
            </div>
            <div class="input-field">
                <input type="email" name="email" required placeholder="Enter your email">
            </div>
            <div class="input-field">
                <input type="password" name="password" required placeholder="Enter your password">
                <span toggle="#password-field" class="toggle-password">👁️</span>
            </div>
            <div class="input-field">
                <input type="password" name="confirm_password" required placeholder="Confirm your password">
            </div>
            <button type="submit" class="btn">Register</button>
            <p>Already have an account? <a href="login.php">Login here</a></p>
        </form>
    </div>
    <script src="script.js"></script>
</body>
</html>
