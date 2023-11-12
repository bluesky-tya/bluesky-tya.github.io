<?php session_start();?>
<!DOCTYPE html>
    <head>
        <tilte>Actualizar</tilte>
    </head>
    <body>
        <form action="actualizar4.php" method="POST">
            <label for="FechaSalida"> Fecha de salida: </label><input id="FechaSalida" type="date" name="FechaSalida"><br>
            <label for="Origen"> Origen: </label><input id="Origen" type="text" name="Origen"><br>
            <label for="Destino"> Estado: </label><input id="Estado" type="text" name="Estado"><br>
            <input type="submit" name="buscar" value="BUSCAR"><br>
        </form>
        <?php
            if(isset($_POST['buscar'])&&!empty($_POST['FechaSalida'])&&!empty($_POST['Origen'])&&!empty($_POST['Destino'])){

                $FechaSalida = $_POST['FechaSalida'];
                $Origen = $_POST['Origen'];
                $Destino = $_POST['Destino'];

                require("conexion.php");
                $sql = "SELECT * FROM salida WHERE FechaSalida='$FechaSalida' AND Origen='$Origen' AND Destino='$Destino'";
                $consulta = mysqli_query($conexion,$sql);
                
                if($consulta){
                    if(mysqli_num_rows($consulta)>0){
                        echo "Existe el usuario";
                        $row=mysqli_fetch_array($consulta);
                        ?>
                            <form action="actualizar4.php" method="POST">

                                <label for="FechaSalida"> Fecha de salida: </label><input id="FechaSalida" type="date" name="FechaSalida" value="<?php echo $row[1]; ?>"><br>
                                <label for="Origen"> Origen: </label><input id="Origen" type="text" name="Origen" value="<?php echo $row[2]; ?>"><br>
                                <label for="Destino"> Destino: </label><input id="Destino" type="text" name="Destino" value="<?php echo $row[3]; ?>"><br>

                                <input type="submit" name="actualizar" value="ACTUALIZAR"><br>

                            </form>
                        <?php
                    }
                    else{
                        echo "No existe el salida";
                    }


                }

            }

            if(isset($_POST['actualizar'])&&!empty($_POST['FechaSalida'])&&!empty($_POST['Origen'])&&!empty($_POST['Destino']))
            {

                $FechaSalida = $_POST['FechaSalida'];
                $Origen = $_POST['Origen'];
                $Destino = $_POST['Destino'];

                require("conexion.php");
                $sql = "UPDATE salida SET FechaSalida= '$FechaSalida', Origen= '$Origen', Destino= '$Destino'";
                $consulta = mysqli_query($conexion,$sql);

                if($consulta){
                        echo "Se realizó la actualización.";
                }else{
                        echo "No se realizó la actualización.";
                }
            }
        ?>
    </body>
</html>