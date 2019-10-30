<?php

$servername = "localhost";
$username = "root";
$password = "root";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Create Database
$sql = "CREATE DATABASE apiViewer";
if ($conn->query($sql) === TRUE) {
    echo "Database created successfully";
} else {
    echo "Error creating database: " . $conn->error;
}

$conn->close();

$dbname = "apiViewer";

// Create connection with newly created DB
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection (with new DB) failed: " . $conn->connect_error);
}

// sql to create table
$sql = "CREATE TABLE foodTable (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
    food_name VARCHAR(30) NOT NULL,
    food_group VARCHAR(30) NOT NULL,
    food_taste VARCHAR(50)
    )";

if ($conn->query($sql) === TRUE) {
    echo "Table foodTable created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
