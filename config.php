<?php
// config.php - DATABASE CONNECTION & AUTO SETUP
$servername = "localhost";
$username = "root";
$password = ""; // Default XAMPP password
$dbname = "football_agent_sl_final";

// 1. Connect to MySQL
$conn = new mysqli($servername, $username, $password);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// 2. Create Database
$sql = "CREATE DATABASE IF NOT EXISTS $dbname";
if ($conn->query($sql) === TRUE) {
    $conn->select_db($dbname);
} else {
    die("Error creating database: " . $conn->error);
}

// 3. Create Users Table (for Login/Register)
$tableUsers = "CREATE TABLE IF NOT EXISTS users (
    id INT(11) AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL,
    email VARCHAR(100) NOT NULL,
    password VARCHAR(255) NOT NULL
)";
$conn->query($tableUsers);

// 4. Create Players Table (For CRUD)
$tablePlayers = "CREATE TABLE IF NOT EXISTS players (
    id INT(11) AUTO_INCREMENT PRIMARY KEY,
    fullname VARCHAR(100) NOT NULL,
    position VARCHAR(50) NOT NULL,
    club VARCHAR(100) NOT NULL,
    agent VARCHAR(100) NOT NULL,
    market_value DECIMAL(15,2) NOT NULL
)";
$conn->query($tablePlayers);
?>