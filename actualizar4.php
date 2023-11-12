<?php session_start();?>
<!DOCTYPE html>
    <head>
        <tilte>Actualizar</tilte>
    </head>
    <body>
        <form action="actualizar4.php" method="POST">
            <label for="FechaReserva"> Fecha de reserva: </label><input id="FechaReserva" type="date" name="FechaReserva"><br>
            <label for="Estado"> Estado: </label><input id="Estado" type="text" name="Estado"><br>
            <input type="submit" name="buscar" value="BUSCAR"><br>
        </form>
        <?php
            if(isset($_POST['buscar'])&&!empty($_POST['FechaReserva'])&&!empty($_POST['Estado'])){

                $FechaReserva = $_POST['FechaReserva'];
                $Estado = $_POST['Estado'];

                require("conexion.php");
                $sql = "SELECT * FROM reserva WHERE FechaReserva='$FechaReserva' AND Estado='$Estado'";
                $consulta = mysqli_query($conexion,$sql);
                
                if($consulta){
                    if(mysqli_num_rows($consulta)>0){
                        echo "Existe el usuario";
                        $row=mysqli_fetch_array($consulta);
                        ?>
                            <form action="actualizar4.php" method="POST">

                                <label for="FechaReserva"> Fecha de Reserva: </label><input id="FechaReserva" type="date" name="FechaReserva" value="<?php echo $row[1]; ?>"><br>
                                <label for="Estado"> Estado: </label><input id="Estado" type="text" name="Estado" value="<?php echo $row[2]; ?>"><br>

                                <input type="submit" name="actualizar" value="ACTUALIZAR"><br>

                            </form>
                        <?php
                    }
                    else{
                        echo "No existe el reserva";
                    }


                }

            }

            if(isset($_POST['actualizar'])&&!empty($_POST['FechaReserva'])&&!empty($_POST['Estado']))
            {

                $FechaReserva = $_POST['FechaReserva'];
                $Estado = $_POST['Estado'];

                require("conexion.php");
                $sql = "UPDATE reserva SET FechaReserva= '$FechaReserva', Estado= '$Estado'";
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