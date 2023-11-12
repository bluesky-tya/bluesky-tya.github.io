<?php session_start();?>
<!DOCTYPE html>
    <head>
        <tilte>Actualizar</tilte>
    </head>
    <body>
        <form action="actualizar.php" method="POST">
            <label for="Nombre"> Nombre: </label><input id="Nombre" type="text" name="Nombre"><br>
            <input type="submit" name="buscar" value="BUSCAR"><br>
        </form>
        <?php
            if(isset($_POST['buscar'])&&!empty($_POST['Nombre'])){

                $Nombre = $_POST['Nombre'];

                require("conexion.php");
                $sql = "SELECT * FROM aerolinea WHERE Nombre='$Nombre'";

                $consulta = mysqli_query($conexion,$sql);
                
                if($consulta){
                    if(mysqli_num_rows($consulta)>0){
                        echo "Existe el usuario";
                        $row=mysqli_fetch_array($consulta);
                        ?>
                            <form action="actualizar.php" method="POST">
                                <label for="Nombre"> Nombres: </label><input id="Nombre" type="text" name="Nombre" value="<?php echo $row[1]; ?>"><br>
                                <input type="submit" name="actualizar" value="ACTUALIZAR"><br>
                            </form>
                        <?php
                    }
                    else{
                        echo "No existe la aerolinea";
                    }


                }

            }

            if(isset($_POST['actualizar'])&&!empty($_POST['Nombre']))
            {

                echo "ingresó acá";
                $Nombre = $_POST['Nombre'];

                require("conexion.php");
                $sql = "UPDATE aerolinea SET Nombre= '$Nombre'";
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