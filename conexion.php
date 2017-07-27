<?php
$servername = "localhost";
$username = "root";
$password = "";

try {
    $conn = new PDO("mysql:host=$servername;dbname=bbdd_tucasa", $username, $password);
    $conn->exec("set names utf8");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //echo "Connected successfully"; 
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    
} 
/*
$servername = "mysql.hostinger.es";
$username = "u100195069_root";
$password = "Andromeda131";
$dbname = "u100195069_inmu";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
//var_dump($conn);
// Check connection
$conn->set_charset("utf8");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} */

?>