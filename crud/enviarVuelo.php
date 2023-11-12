<?php
include ("conexion.php");

$FechaSalida=$_POST['FechaSalida'];
$Origen=$_POST['Origen'];
$Destino=$_POST['Destino'];

$sql="INSERT INTO vuelo (FechaSalida,Origen,Destino)
 VALUES ('$FechaSalida','$Origen','$Destino')";
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