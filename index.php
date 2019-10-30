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

$json = json_decode(file_get_contents("./data.json"));

// foreach ($json as $key => $value) {
//     // echo $key . " => " . $value->name . "<br>";
//     // echo $key . " => " . $value->group . "<br>";
//     // echo $key . " => " . $value->taste . "<br>";
//     // echo "----------------------------------" . "<br>";

//     // Insert into table
//     $sql = "INSERT INTO foodTable (food_name, food_group, food_taste) 
//     VALUES ('$value->name', '$value->group', '$value->taste')";

//     if ($conn->query($sql) === TRUE) {
//         $last_id = $conn->insert_id;
//         echo "New record successfully created. Last inserted ID is: " . $last_id . "<br>";
//     } else {
//         echo "Error: " . $sql . "<br>" . $conn->error;
//     }
// }

$conn->close();

// Read method
function getAllData($num)
{
    $servername = "localhost";
    $username = "root";
    $password = "root";
    $dbname = "apiViewer";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    $query = mysql_query("select * from foodTable LIMIT $num", $conn);

    print_r($query);
    print_r("hello\n\n\n\n\nbye");

    $conn->close();
}
