<html>
<body>


Your email address is: <?php echo $_GET["email"]; ?><br>
Your pass <?php echo $_GET["password"]; ?>

 <?php 
// $severname = "192.168.60.141";
// $username = "nam";
// $password = "123456";
// $dbname = "aptech_php_14";

$severname = "localhost";
$username = "root";
$password = "";
$dbname = "aptech_php_14_nguyenhuan02";

$conn = mysqli_connect($severname, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully <br>";

//Select data
$sql = 'SELECT * 
    FROM users 
    WHERE email=' . '"' .$_GET["email"]. '"'. ' AND password ='. '"'. $_GET["password"]. '";'  ;
echo $sql. '<br>' ;
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {

    echo 'dang nhap thanh cong';

} else echo 'tai khoan khong ton tai';
?>
</body>
</html>