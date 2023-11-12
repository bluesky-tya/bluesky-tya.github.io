<?php
include ("conexion.php");

$ID=$_REQUEST['id'];
$sql = "DELETE FROM vuelo WHERE id=$ID";
$resultado = $conexion->query($sql);
if($resultado){
	header("location: ../formVuelo.php");
}else{
	echo "El dato no se elimino intenta de  nuevo";
}



?>