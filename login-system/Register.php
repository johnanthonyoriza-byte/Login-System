<?php
require "db.php";

$email = trim($_POST['email']);
$password = $_POST['password'];

// Hash password
$hashedPassword = password_hash($password, PASSWORD_DEFAULT);

// Check if email already exists
$stmt = $conn->prepare("SELECT id FROM users WHERE email = ?");
$stmt->bind_param("s", $email);
$stmt->execute();
$stmt->store_result();

if ($stmt->num_rows > 0) {
    die("Email already registered.");
}
$stmt->close();

// Insert user
$stmt = $conn->prepare("INSERT INTO users (email, password) VALUES (?, ?)");
$stmt->bind_param("ss", $email, $hashedPassword);

if ($stmt->execute()) {
    echo "Registration successful. <a href='login.html'>Login</a>";
} else {
    echo "Error: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>