<?php
$hostname = "127.0.0.1"; // 🔑 magic line
$username = "root";
$password = "1234";
$database = "crud_db";

$conn = mysqli_connect($hostname, $username, $password, $database); #Connecting database

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}



mysqli_close($conn); #Disconect database
?>