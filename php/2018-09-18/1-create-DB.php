<?php 
$severname = "localhost";
$username = "root";
$password = "";

$conn = mysqli_connect($severname, $username, $password);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
//Create database
$sql = "CREATE DATABASE aptech_php_14_nguyenhuan02";
if ($conn->query($sql) === true) {
    echo "Database created sucessfully";
} else {
    echo "Error" . $conn->error;
}
$conn->close();
?>