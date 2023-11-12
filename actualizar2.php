<?php session_start();?>
<!DOCTYPE html>
    <head>
        <tilte>Actualizar</tilte>
    </head>
    <body>
        <form action="actualizar2.php" method="POST">
            <label for="Modelo"> Modelo: </label><input id="Modelo" type="text" name="Modelo"><br>
            <label for="Capacidad"> Capacidad: </label><input id="Capacidad" type="text" name="Capacidad"><br>
            <input type="submit" name="buscar" value="BUSCAR"><br>
        </form>
        <?php
            if(isset($_POST['buscar'])&&!empty($_POST['Modelo'])&&!empty($_POST['Capacidad'])){

                $Modelo = $_POST['Modelo'];
                $Capacidad = $_POST['Capacidad'];

                require("conexion.php");
                $sql = "SELECT * FROM avion WHERE Modelo='$Modelo' AND Capacidad='$Capacidad'";
                $consulta = mysqli_query($conexion,$sql);
                
                if($consulta){
                    if(mysqli_num_rows($consulta)>0){
                        echo "Existe el usuario";
                        $row=mysqli_fetch_array($consulta);
                        ?>
                            <form action="actualizar2.php" method="POST">

                                <label for="Modelo"> Modelo: </label><input id="Modelo" type="text" name="Modelo" value="<?php echo $row[1]; ?>"><br>
                                <label for="Capacidad"> Capacidad: </label><input id="Capacidad" type="text" name="Capacidad" value="<?php echo $row[2]; ?>"><br>

                                <input type="submit" name="actualizar" value="ACTUALIZAR"><br>

                            </form>
                        <?php
                    }
                    else{
                        echo "No existe el avion";
                    }


                }

            }

            if(isset($_POST['actualizar'])&&!empty($_POST['Modelo'])&&!empty($_POST['Capacidad']))
            {

                $Modelo = $_POST['Modelo'];
                $Capacidad = $_POST['Capacidad'];

                require("conexion.php");
                $sql = "UPDATE avion SET Modelo= '$Modelo', Capacidad= '$Capacidad'";
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