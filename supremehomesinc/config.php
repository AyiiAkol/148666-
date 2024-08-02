<?php
$servername = "localhost";
$username = "root"; 
$password = "";      
$dbname = "supreme_homes_db";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
