<?php
include ("conexion.php");

$ID=$_REQUEST['id'];
$sql = "DELETE FROM aerolinea WHERE id=$ID";
$resultado = $conexion->query($sql);
if($resultado){
	header("location: ../formAerolinea.php");
}else{
	echo "El dato no se elimino intenta de  nuevo";
}



?>