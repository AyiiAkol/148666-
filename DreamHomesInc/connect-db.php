<?php
$servername = "localhost";  
$username = "root";        
$password = "";            
$dbname = "supreme homes inc."; 

try {
    $pdo = new PDO("mysql:host=$servername localhost; dbname=$ supreme homes inc.", $username root, $password "");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>
