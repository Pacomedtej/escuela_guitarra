<?php
    require "seguridad.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel de Newsletter</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <?php include "header_admin.php"; ?>
    <div class="ancho_pantalla">
        <?php include "menu_admin.php"; ?>
        <div class="panel_inicio">
            <h3>Panel de Newsletter</h3>
            <table class="tabla_clientes">
                <tr>
                    <th>Id</th>
                    <th>Correo</th>
                    <th>Eliminar</th>
                </tr>
                <tr>
                    <?php
                        include "conexion.php";
                        $todos_clientes = "SELECT * FROM newsletter ORDER BY id ASC";
                        $resultado = mysqli_query($conectar, $todos_clientes);

                        while($fila = mysqli_fetch_assoc($resultado)){
                    ?>
                        <td><?php echo $fila["id"]; ?></td>
                        <td><?php echo $fila["contacto"]; ?></td>
                        <td><a href="#" onclick="validar('eliminarnewsletter.php?id=<?php echo $fila['id']; ?>')"><img class="trash_red" src="../img/iconos/trash_red.svg" alt="Icono de Basura"></a></td>
                </tr>
                    <?php
                        }
                    ?>
            </table>
        </div>
    </div>
    <footer>
        <div class="ancho">
            <div class="contenedor_logofooter">
                <img src="../img/White_Logo.png" class="logo_footer" alt="Logo de la Academia">
            </div>
            <div class="contenedor_textofooter">
                <h4>Escuela de Guitarristas S.A. de C.V.</h4>
                <h4 class="naranja">Juan Francisco Medina Tejeda</h4>
            </div>
            <div class="limpiar invisible"></div>
        </div>
    </footer>
    <script>
        function validar(url){
            let eliminar = confirm("¿Realmente deseas ELIMINAR el CLIENTE?");
            // alert(eliminar);
            if(eliminar === true){
                window.location = url;
                alert("Cliente Eliminado");
            }
        }
    </script>
</body>
</html>