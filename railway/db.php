<link rel="stylesheet" href="style.css" />
<?php
$servername = "localhost:3306";
$username = "root";
$password = "1234";
$dbname = "railway";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) 
{
 die("Connection failed: " . $conn->connect_error);
} 
?>
