<?php
$hostname = "127.0.0.1";
$username = "root";
$password = "1234";
$database = "crud_db";

$conn = mysqli_connect($hostname, $username, $password, $database);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


$select = "SELECT * FROM student ORDER BY id LIMIT 2";
$result = mysqli_query($conn, $select);

if ($result && mysqli_num_rows($result) > 0) {
  
    while($data = mysqli_fetch_assoc($result)){
        echo $data["id"] .  "    ";
        echo $data["first_name"].  "    ";
        echo $data["last_name"].  "    ";
        echo $data["email"].  "    \n";
    }
} else {
    echo "Data not found\n";
}

mysqli_close($conn);
?>