<?php
include '../conexion.php';

$ID = $_GET['cod'];

$sql = "DELETE FROM tblclientes WHERE idcliente=$ID";
$conn->exec($sql);
$conn = null;  

header('location: index.php');

?>