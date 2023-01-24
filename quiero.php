<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Alumno</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
    include "header.php";
    ?>
    <div class="seccion_quiero">
        <div class="ancho">
            <div class="contenedor_formregistrar">
                <h1 class="naranja">Regístrate</h1>
                <p>y vuélvete un experto.</p>
                <form action="admin/nuevoalumno.php" method="post" name="form_nuevoalumno">
                    <div class="grupo_form">
                        <label for="nombre">Nombre<span class="rojo"> *</span></label>
                        <input  class="login_nuevoalumno" type="text" name="nombre" id="nombre" placeholder="Ejemplo: Francisco">
                    </div>
                    <div class="grupo_form">
                        <label for="Apellidos">Apellidos</label>
                        <input class="login_nuevoalumno" type="text" name="apellidos" id="apellidos" placeholder="Ejemplo: Medina Tejeda">
                    </div>
                    <div class="grupo_form">
                            <label for="telefono">Número Telefónico<span class="rojo"> *</span></label>
                            <input  class="login_nuevoalumno" type="tel" name="telefonoalumno" id="telefono" placeholder="Ejemplo: (999)-141-****">
                    </div>
                    <div class="grupo_form">
                        <label for="interes">Tu interés<span class="rojo"> *</span></label>
                        <select class="login_nuevoalumno" name="interes" id="interes">
                            <option class="gris" value="0">-- Selecciona tu Guitarra Favorita --</option>
                            <option class="gris" value="Guitarra Acústica">Guitarra Acústica</option>
                            <option class="gris" value="Bajo">Bajo</option>
                            <option class="gris" value="Guitarra Eléctrica">Guitarra Eléctrica</option>
                            <option class="gris" value="Ukelele">Ukelele</option>
                        </select>
                    </div>
                    <div class="grupo_form">
                        <label for="plan_inicial">Plan Elegido<span class="rojo"> *</span>
                        <span><a class="verplanes" href="planes.php">Ver Planes</a></span>
                        </label>
                        <select class="login_nuevoalumno" name="plan_inicial" id="plan_inicial">
                            <option class="gris" value="0">-- Selecciona el Plan Elegido --</option>
                            <option class="gris" value="1 Semana">1 Semana</option>
                            <option class="gris" value="1 Mes">1 Mes</option>
                            <option class="gris" value="3 Meses">3 Meses</option>
                            <option class="gris" value="6 Meses">6 Meses</option>
                        </select>
                        <div class="grupo_form">
                            <input type="submit" value="¡Registrarme!" class="btn_enviarnewsletter" onclick="return validar_registro()">
                        </div>
                    </div>
                </form>
            </div>
            <div class="contenedor_imgregistrar"></div>
        </div>
    </div>
    <?php
    include "footer.php";
    ?>

    <script>
        function validar_registro(){
            if(document.getElementById("nombre").value.length == 0){
                alert("Por favor, rellena el Campo Nombre");
                document.getElementById("nombre").focus();
                return false;
            }
            if(document.getElementById("telefono").value.length == 0){
                alert("Por favor, ingresa tu Número de Teléfono");
                document.getElementById("telefono").focus();
                return false;
            }
            if(document.getElementById("interes").value == 0){
                alert("Por favor, selecciona las clases de tu Interés");
                document.getElementById("interes").focus();
                return false;
            }
            if(document.getElementById("plan_inicial").value == 0){
                alert("Por favor, selecciona el Plan Inicial");
                document.getElementById("plan_inicial").focus();
                return false;
            }
            return true;
        }
    </script>
</body>
</html>