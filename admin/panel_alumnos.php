<?php
    require "seguridad.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel de Alumnos</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <?php include "header_admin.php"; ?>
    <div class="ancho_pantalla">
        <?php include "menu_admin.php"; ?>
        <div class="panel_inicio">
            <h3>Panel de Alumnos</h3>
            <table class="tabla_clientes">
                <tr>
                    <th>Id</th>
                    <th>Nombre</th>
                    <th>Apellidos</th>
                    <th>Teléfono</th>
                    <th>Interés</th>
                    <th>Plan Inicial</th>
                    <th>Eliminar</th>
                </tr>
                <tr>
                    <?php
                        include "conexion.php";
                        $todos_clientes = "SELECT * FROM alumnos ORDER BY id ASC";
                        $resultado = mysqli_query($conectar, $todos_clientes);

                        while($fila = mysqli_fetch_assoc($resultado)){
                    ?>
                        <td><?php echo $fila["id"]; ?></td>
                        <td><?php echo $fila["nombre"]; ?></td>
                        <td><?php echo $fila["apellidos"]; ?></td>
                        <td><?php echo $fila["telefono"]; ?></td>
                        <td><?php echo $fila["interes"]; ?></td>
                        <td><?php echo $fila["plan_inicial"]; ?></td>
                        <td><a href="#" onclick="validar('eliminaralumno.php?id=<?php echo $fila['id']; ?>')"><img class="trash_red" src="../img/iconos/trash_red.svg" alt="Icono de Basura"></a></td>
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
            let eliminar = confirm("¿Realmente deseas ELIMINAR el USUARIO?");
            // alert(eliminar);
            if(eliminar === true){
                window.location = url;
                alert("Cliente Eliminado");
            }
        }
    </script>
</body>
</html>