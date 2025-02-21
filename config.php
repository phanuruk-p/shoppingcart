<?php

$base_url = "https://hosting.udru.ac.th/its66040233150/shoppingcart"; 

$servername = "localhost"; // Change if necessary
$username = "its66040233150"; // Change if necessary
$password = "K9fgT7A8"; // Change if necessary
$database = "its66040233150"; // Change to your actual database name

$conn = mysqli_connect($servername, $username, $password, $database);
$dsn = "mysql:host=$servername;dbname=$database;charset=utf8mb4"; // Use $servername and $database here

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// ตั้งค่าชุดอักขระ
mysqli_set_charset($conn, "utf8");

// แสดงข้อความถ้าเชื่อมต่อสำเร็จ //////////////////////////////////////
echo "Connection successful";
?>
