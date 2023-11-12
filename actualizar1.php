<?php session_start();?>
<!DOCTYPE html>
    <head>
        <tilte>Actualizar</tilte>
    </head>
    <body>
        <form action="actualizar1.php" method="POST">
            <label for="Nombre"> Nombre: </label><input id="Nombre" type="text" name="Nombre"><br>
            <label for="Ciudad"> Ciudad: </label><input id="Ciudad" type="text" name="Ciudad"><br>
            <input type="submit" name="buscar" value="BUSCAR"><br>
        </form>
        <?php
            if(isset($_POST['buscar'])&&!empty($_POST['Nombre'])&&!empty($_POST['Ciudad'])){

                $Nombre = $_POST['Nombre'];
                $Ciudad = $_POST['Ciudad'];

                require("conexion.php");
                $sql = "SELECT * FROM aeropuerto WHERE Nombre='$Nombre' AND Ciudad='$Ciudad'";

                $consulta = mysqli_query($conexion,$sql);
                
                if($consulta){
                    if(mysqli_num_rows($consulta)>0){
                        echo "Existe el usuario";
                        $row=mysqli_fetch_array($consulta);
                        ?>
                            <form action="actualizar1.php" method="POST">

                                <label for="Nombre"> Nombre: </label><input id="Nombre" type="text" name="Nombre" value="<?php echo $row[1]; ?>"><br>
                                <label for="Ciudad"> Ciudad: </label><input id="Ciudad" type="text" name="Ciudad" value="<?php echo $row[2]; ?>"><br>

                                <input type="submit" name="actualizar" value="ACTUALIZAR"><br>

                            </form>
                        <?php
                    }
                    else{
                        echo "No existe el aeropuerto";
                    }


                }

            }

            if(isset($_POST['actualizar'])&&!empty($_POST['Nombre'])&&!empty($_POST['Ciudad']))
            {

                $Nombre = $_POST['Nombre'];
                $Ciudad = $_POST['Ciudad'];

                require("conexion.php");
                $sql = "UPDATE aeropuerto SET Nombre= '$Nombre', Ciudad= '$Ciudad'";
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