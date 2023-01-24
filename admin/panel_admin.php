<?php
    include "seguridad.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel Administrativo</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <?php include "header_admin.php"; ?>
    <div class="seccion_paneladmin">
        <div class="ancho">
            <h1 class="h1_seccion_paneladmin">Elija su opción</h1>
            <div class="contenedor_botonesadmin">
                <div class="box_admin">
                    <a href="panel_alumnos.php">
                        <div class="icono_admin alumnos_admin"></div>
                        <h2>Alumnos</h3>
                    </a>
                </div>
                <div class="box_admin">
                    <a href="panel_newsletter.php">
                        <div class="icono_admin newsletter_admin"></div>
                        <h2>Newsletter</h2>
                    </a>
                </div>
            </div>
            <div class="contenedor_btn_cerrarsesion">
                <a href="salir.php" class="btn_cerrarsesion">Cerrar Sesión</a>
            </div>
        </div>
    </div>
</body>
</html>