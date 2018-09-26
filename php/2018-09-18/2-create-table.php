<?php 
$severname = "localhost";
$username = "root";
$password = "";
$dbname = "aptech_php_14_nguyenhuan02";

$conn = mysqli_connect($severname, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";

//sql to create table
$sql = "CREATE TABLE users (
    id int(6) AUTO_INCREMENT PRIMARY KEY,
    name varchar(50),
    email varchar(50),
    password varchar(50) 
    ) ";

if ($conn->query($sql) === true) {
    echo "table created sucessfully";
} else {
    echo "Error" . $conn->error;
}
$conn->close();

?>