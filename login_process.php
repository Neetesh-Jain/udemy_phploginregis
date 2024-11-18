<?php
// Include the database connection
require 'db_connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Query the database for the user
    $sql = "SELECT * FROM users WHERE email='$email'";
    $result = mysqli_query($conn, $sql);

    // Check if the result is valid
    if ($result && mysqli_num_rows($result) > 0) {
        $user = mysqli_fetch_assoc($result);

        // Verify the password
        if (password_verify($password, $user['password'])) {
            session_start();
            $_SESSION['user_id'] = $user['id'];
            echo "Login successful. Welcome, " . $user['username'] . "!";
            // Redirect to a dashboard or home page
            header("Location: dashboard.php");
        } else {
            echo "Invalid credentials.";
        }
    } else {
        echo "No user found with this email address.";
    }
}
?>
