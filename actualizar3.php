<?php session_start();?>
<!DOCTYPE html>
    <head>
        <tilte>Actualizar</tilte>
    </head>
    <body>
        <form action="actualizar3.php" method="POST">
            <label for="Numero"> Número: </label><input id="Numero" type="text" name="Numero"><br>
            <label for="Clase"> Clase: </label><input id="Clase" type="text" name="Clase"><br>
            <label for="idAvion"> Id del avión: </label><input id="idAvion" type="text" name="idAvion"><br>
            <input type="submit" name="buscar" value="BUSCAR"><br>
        </form>
        <?php
            if(isset($_POST['buscar'])&&!empty($_POST['Numero'])&&!empty($_POST['Clase'])){

                $Numero = $_POST['Numero'];
                $Clase = $_POST['Clase'];
                

                require("conexion.php");
                $sql = "SELECT * FROM puesto WHERE Numero='$Numero' AND Clase='$Clase'";
                $consulta = mysqli_query($conexion,$sql);
                
                if($consulta){
                    if(mysqli_num_rows($consulta)>0){
                        echo "Existe el usuario";
                        $row=mysqli_fetch_array($consulta);
                        ?>
                            <form action="actualizar3.php" method="POST">

                                <label for="Numero"> Número: </label><input id="Numero" type="text" name="Numero" value="<?php echo $row[1]; ?>"><br>
                                <label for="Clase"> Clase: </label><input id="Clase" type="text" name="Clase" value="<?php echo $row[2]; ?>"><br>
                                

                                <input type="submit" name="actualizar" value="ACTUALIZAR"><br>

                            </form>
                        <?php
                    }
                    else{
                        echo "No existe el puesto";
                    }


                }

            }

            if(isset($_POST['actualizar'])&&!empty($_POST['Numero'])&&!empty($_POST['Clase']))
            {

                $Numero = $_POST['Numero'];
                $Clase = $_POST['Clase'];

                require("conexion.php");
                $sql = "UPDATE puesto SET Numero= '$Numero', Clase= '$Clase'";
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