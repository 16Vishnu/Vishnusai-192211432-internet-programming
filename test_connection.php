<?php
$host = "localhost";
$username = "root";
$password = "";
$dbname = "user_registration";
$port = 3307;

$conn = new mysqli($host, $username, $password, $dbname, $port);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully!";
$conn->close();
?>
