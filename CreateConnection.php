<?php
$host = "db4free.net";
$port = "3306";
$user = "thanhmon1999";
$password = "thanhmon1999";
$db = "gwcoursebymon";

$conn = new mysqli($host . ":". $port , $user, $password, $db);

if ($conn->connect_errno) {
    die("Connection failed: " . $conn->connect_errno);
}

echo "done";
?>