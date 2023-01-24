<?php
    require "conexion.php";

    $contacto = $_POST["contacto_newsletter"];


    $verificar_usuario = mysqli_query($conectar, "SELECT * FROM newsletter WHERE contacto = '$contacto'");

    if(mysqli_num_rows($verificar_usuario) > 0){
        echo '
            <script>
                alert("ESTE CORREO YA ESTÁ REGISTRADO");
                location.href = "../index.php";
            </script>
            ';
            exit;
    }

    $insertar = "INSERT INTO newsletter (contacto) VALUES ('$contacto')";

    $query  = mysqli_query($conectar, $insertar);

    if($query){
        echo '
            <script>
                alert("¡AHORA RECIBIRÁS LAS MEJORES PROMOCIONES!");
                location.href = "../index.php";
                </script>
                ';
            }else{
                echo '
                <script>
                alert("Error al agregar el Correo Electrónico");
            </script>
        ';
    }
?>