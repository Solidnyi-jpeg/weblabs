<?php
$host = "db";       // Docker service name
$user = "user";
$password = "password";
$database = "mydb";

$conn = new mysqli($host, $user, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
