<?php
include ("conexion.php");

$nombre=$_POST['nombre'];
$email=$_POST['email'];
$contrasena=$_POST['contrasena'];

$sql="INSERT INTO usuario (nombre,email,contrasena)
 VALUES ('$nombre','$email','$contrasena')";
 $resultado=$conectar->query($sql);

 if ($resultado) {
   echo"Los datos se han insertado correctamente";
 }else {
  ?> 
        <h3 class="bad">¡Ups, ha ocurrido un error! <?php echo mysqli_errno($conectar); ?></h3>
           <?php
     echo"Los datos no se han insertado correctamente, intentalo de nuevo";
 }



?>