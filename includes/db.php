<?php
$host = 'localhost';
$user = 'root';        // Default XAMPP username is 'root'
$pass = '';            // No password for XAMPP by default
$db_name = 'todo';     // Your database name

$conn = new mysqli($host, $user, $pass, $db_name);

if ($conn->connect_error) {
    die('Database connection error: ' . $conn->connect_error);
}
?>
