<?php
$username = $_POST['username'];
$password = $_POST['password'];

$host = "localhost";
$dbname = "login_db";
$username = "root";
$password = "";

$conn = mysqli_connect($host, $username, $password, $dbname);

if (mysqli_connect_errno()) {
    # code... 
    die("Connection error: " . mysqli_connect_error());
}

$sql = "INSERT INTO login (username, password)
        VALUES ('$username', '$password)";
        

echo "Record saved successfully";

mysqli_close($conn);
?>