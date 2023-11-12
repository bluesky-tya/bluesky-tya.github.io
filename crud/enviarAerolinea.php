<?php
include ("conexion.php");

$nombre=$_POST['Nombre'];

$sql="INSERT INTO aerolinea(Nombre)
 VALUES ('$nombre')";
 $resultado=$conexion->query($sql);

 if ($resultado) {

  ?>

  <h3 class="bad">¡Ups, ha ocurrido un error!</h3>
  
<?php

 }else {
  ?> 
        <h3 class="bad">¡Ups, ha ocurrido un error! <?php echo mysqli_errno($conexion); ?></h3>
           <?php
     echo"Los datos no se han insertado correctamente, intentalo de nuevo";
 }



?>