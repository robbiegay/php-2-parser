<?php

$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "apiViewer";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Insert into table
// $sql = "INSERT INTO foodTable (food_name, food_group, food_taste)
// VALUES ('Apple', 'Fruit', 'Yummy!')";

// if ($conn->query($sql) === TRUE) {
//     $last_id = $conn->insert_id;
//     echo "New record created successfully. Last inserted ID is: " . $last_id;
// } else {
//     echo "Error: " . $sql . "<br>" . $conn->error;
// }

// sql to delete a record
$sql = "DELETE FROM foodTable WHERE id=1";

if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();
