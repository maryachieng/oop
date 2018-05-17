<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname="oop";

// Create connection
$conn = mysqli_connect($servername, $username, $password,$dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

/* Create database
$sql = "CREATE DATABASE oop";
if (mysqli_query($conn, $sql)) {
    echo "Database created successfully";
} else {
    echo "Error creating database: " . mysqli_error($conn);
}

// sql to create table
$sql = "CREATE TABLE user (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
name TEXT NOT NULL,
phone_number VARCHAR(30) NOT NULL,
country_id INT
)";
*/
$sql = "CREATE TABLE role (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
name TEXT NOT NULL
)";
/*
$sql = "CREATE TABLE permission (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
name TEXT NOT NULL
)";
*/
/*
$sql = "CREATE TABLE role_permission (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
role_id INT,
permission_id INT,
user_id INT
)";
*/
if (mysqli_query($conn, $sql)) {
    echo "Table MyGuests created successfully";
} else {
    echo "Error creating table: " . mysqli_error($conn);
}


mysqli_close($conn);
?>
