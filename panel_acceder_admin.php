<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acceso al Panel Administrativo</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
    include "header.php";
    ?>

    <div class="seccion_acceder_admin">
        <div class="ancho_pantalla">
            <div class="contenedor_img_acceder"></div>
            <div class="contenedor_formulario_accederadmin">
                <div class="contenedor_titulo_formacceder limpiar">
                    <h2 class="naranja">Panel</h2>
                    <h2>Administrativo</h2>
                </div>
                <div class="contenedor_formacceder">
                    <form action="admin/autentificar.php" method="post" name="form_accederadmin">
                        <div class="grupo_form">
                            <label for="usuarioadmin">Usuario</label>
                            <input type="text" name="usuarioadmin" id="usuarioadmin" class="login_nuevoalumno">
                        </div>
                        <div class="grupo_form">
                            <label for="passadmin">Contraseña</label>
                            <input type="password" name="passadmin" id="passadmin" class="login_nuevoalumno">
                        </div>
                        <div class="contenedor_btn_accederadmin">
                            <input type="submit" value="Ingresar" class="btn_enviarnewsletter" onclick="return validar_admin()">
                        </div>
                    </form>
                    <div class="contenedor_logoacceder">
                        <img src="img/White_Logo.png" alt="Logo de la Academia" class="logoacceder">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        function validar_admin(){
            if(document.getElementById("usuarioadmin").value.length == 0){
                alert("Por favor, ingrese el usuario.");
                document.getElementById("usuarioadmin").focus();
                return false;
            }
            if(document.getElementById("passadmin").value.length == 0){
                alert("Por favor, ingrese la contraseña.");
                document.getElementById("passadmin").focus();
                return false;
            }
            return true;
        }
    </script>
</body>
</html>