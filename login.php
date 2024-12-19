<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';

    // Hardcoded example credentials (use a database in production)
    $valid_username = 'admin';
    $valid_password = 'password';

    if ($username === $valid_username && $password === $valid_password) {
        echo "Login successful! Welcome, $username.";
    } else {
        echo "Invalid username or password.";
    }
} else {
    echo "Access denied.";
}
?>
