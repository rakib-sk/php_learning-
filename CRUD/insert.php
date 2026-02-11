<?php
$hostname = "127.0.0.1";
$username = "root";
$password = "1234";
$database = "crud_db";

$conn = mysqli_connect($hostname, $username, $password, $database);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$data = "INSERT INTO student(first_name,last_name,email) VALUES
    ('Sanjida','Aktar','mst.sanjida.aktar.cnj@gmail.com'),
    ('Rakib','Hossen','rh01828315879@gmail.com'),
    ('Bristy','Sanjida','sanjidabristy57@gmail.com'),
    ('Sweety','Sanjida','sweetysanjida09@gmail.com')";

if(mysqli_query($conn,$data)){
  echo "Data added!\n";
}else{
  echo "Error: " . mysqli_error($conn);
}


mysqli_close($conn);
?>