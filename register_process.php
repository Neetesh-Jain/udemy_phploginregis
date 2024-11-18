<?php
// Add your database connection here
require 'db_connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    // Validate inputs
    if ($password !== $confirm_password) {
        echo "Passwords do not match.";
        exit;
    }

    // Hash password
    $hashed_password = password_hash($password, PASSWORD_BCRYPT);

    // Store user in database
    $sql = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$hashed_password')";
    
    if (mysqli_query($conn, $sql)) {
        echo "Registration successful.";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>
