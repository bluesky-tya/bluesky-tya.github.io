<?php
include ("conexion.php");

$ID=$_REQUEST['id'];
$sql = "DELETE FROM reserva WHERE id=$ID";
$resultado = $conexion->query($sql);
if($resultado){
	header("location: ../formReserva.php");
}else{
	echo "El dato no se elimino intenta de  nuevo";
}



?>