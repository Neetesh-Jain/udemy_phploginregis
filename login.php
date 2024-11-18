<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="form-container">
        <form action="login_process.php" method="POST">
            <h2>Login</h2>
            <div class="input-field">
                <input type="email" name="email" required placeholder="Enter your email">
            </div>
            <div class="input-field">
                <input type="password" name="password" required placeholder="Enter your password">
                <span toggle="#password-field" class="toggle-password">👁️</span>
            </div>
            <button type="submit" class="btn">Login</button>
            <p>Don't have an account? <a href="index.php">Register here</a></p>
        </form>
    </div>
    <script src="script.js"></script>
</body>
</html>
