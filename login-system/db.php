<?php
$host = "localhost";
$user = "root";
$pass = "31415926535";
$db   = "login_system";
$port = 3306;

$conn = new mysqli($host, $user, $pass, $db, $port);

if ($conn->connect_error) {
    die("Database connection failed: " . $conn->connect_error);
}
?>