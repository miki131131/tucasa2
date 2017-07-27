<?php
include 'conexion.php';

$ID = $_GET['cod'];
echo $ID;
// eliminamos fotos asociadas a Inmuebles

$sql = "DELETE FROM tblimagenes WHERE idinmueble=$ID";
echo $sql;
$conn->exec($sql);

$sql = "DELETE FROM tblinmuebles WHERE idinmueble=$ID";
$conn->exec($sql);

$conn = null;  

header('location: VerInmuebles.php'); 

?>