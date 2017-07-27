<?php 
$servername = "mysql.hostinger.es";
$username = "u100195069_root";
$password = "Andromeda131";

try {
    $conn = new PDO("mysql:host=$servername;dbname=u100195069_inmu", $username, $password);
    $conn->exec("set names utf8");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //echo "Connected successfully"; 
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    
} 
?>