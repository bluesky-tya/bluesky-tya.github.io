<?php
include ("conexion.php");

$Numero=$_POST['Numero'];
$Clase=$_POST['Clase'];
$idAvion=$_POST['idAvion'];

$sql="INSERT INTO puesto (Numero,Clase,idAvion)
 VALUES ('$Numero','$Clase','$idAvion')";
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