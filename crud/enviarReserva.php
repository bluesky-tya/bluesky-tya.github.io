<?php
include ("conexion.php");

$Estado=$_POST['Estado'];
$FechaReserva=$_POST['FechaReserva'];

$sql="INSERT INTO reserva (Estado,FechaReserva)
 VALUES ('$Estado','$FechaReserva')";
 $resultado=$conexion->query($sql);

 if ($resultado) {
   echo"Los datos se han insertado correctamente";
 }else {
  ?> 
        <h3 class="bad">¡Ups, ha ocurrido un error! <?php echo mysqli_errno($conexion); ?></h3>
           <?php
     echo"Los datos no se han insertado correctamente, intentalo de nuevo";
 }



?>