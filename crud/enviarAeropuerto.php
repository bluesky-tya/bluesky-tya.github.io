<?php
include ("conexion.php");

$Nombre=$_POST['Nombre'];
$Ciudad=$_POST['Ciudad'];

$sql="INSERT INTO aeropuerto (Nombre,Ciudad)
 VALUES ('$Nombre','$Ciudad')";
 $resultado=$conexion->query($sql);

 if ($resultado) {
   echo"Los datos se han insertado correctamente";
 }else {
  ?> 
        <h3 class="bad">¡Ups, ha ocurrido un error! <?php echo mysqli_errno($conectar); ?></h3>
           <?php
     echo"Los datos no se han insertado correctamente, intentalo de nuevo";
 }



?>