<?php
    require "conexion.php";

    $usuarioadmin = $_POST["usuarioadmin"];
    $pass = $_POST["passadmin"];

    $comparar = "SELECT * FROM administradores WHERE usuarioadmin='$usuarioadmin' AND passadmin='$pass'";

    $resultado = mysqli_query($conectar, $comparar);

    // Si SÍ encuentra contacto y contraseña en la BDD, le da acceso
    if(mysqli_num_rows($resultado) > 0){
        session_start();
        $_SESSION['username'] = $usuarioadmin;
        $_SESSION['autentificado'] = 'SI';
        header("Location: panel_admin.php"); // Redirigir en PHP
    }else{
        echo '
            <script>
                alert("Error de Autentificación");
                location.href = "../panel_acceder_admin.php?errorusuario=SI";
            </script>
        ';
    }
    // Libera/Vacía la variable resultado
    mysqli_free_result($resultado);
    mysqli_close($conectar);
?>