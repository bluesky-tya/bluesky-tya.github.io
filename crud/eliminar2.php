<?php
include ("conexion.php");

$ID=$_REQUEST['id'];
$sql = "DELETE FROM aeropuerto WHERE id=$ID";
$resultado = $conexion->query($sql);
if($resultado){
	header("location: ../formAeropuerto.php");
}else{
	echo "El dato no se elimino intenta de  nuevo";
}



?>