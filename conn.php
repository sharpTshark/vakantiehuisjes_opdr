<?php

$servername = "localhost";
$username = "root";
$password = "";

// connection
$conn = new mysqli($servername, $username, $password);

// check connection
if ($conn->connect_error) {
    echo "Connected successfully";
    die("Connection failed: " . $conn->connect_error);
}

?>