<?php 
$severname = "192.168.60.141";
$username = "nam";
$password = "123456";
$dbname = "aptech_php_14";

$conn = mysqli_connect($severname, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully <br>";

// $sql = "INSERT INTO users (name,email,password)
// VALUE 
// ('Huan','nguyenhuandn@gmail.com','sadffdfsdf'),
// ('Phong','vanphong@gmail.com','sadfdfsdf'), 
// ('Nam','namnh@gmail.com','1234dfdfsdf'),
// ('Thai','thai94@gmail.com','sadfd344fsdf')
// ";
$sql = "DELETE FROM users 
WHERE name = 'Huan' ";
if ($conn->query($sql) === true) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
