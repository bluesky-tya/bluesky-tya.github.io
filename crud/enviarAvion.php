<?php
include ("conexion.php");

$Modelo=$_POST['Modelo'];
$Capacidad=$_POST['Capacidad'];

$sql="INSERT INTO avion (Modelo,Capacidad)
 VALUES ('$Modelo','$Capacidad')";
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