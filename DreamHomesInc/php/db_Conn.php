<?php
$servername = "localhost"; 
$username = "localhost";
$password = "";
$dbname = "supremedatabase";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
