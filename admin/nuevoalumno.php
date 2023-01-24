<?php
require "conexion.php";

$nombre = $_POST["nombre"];
$apellidos = $_POST["apellidos"];
$interes = $_POST["interes"];
$telefono = $_POST["telefonoalumno"];
$plan_inicial = $_POST["plan_inicial"];

$verificar_usuario = mysqli_query($conectar, "SELECT * FROM alumnos WHERE telefono = '$telefono'");

if(mysqli_num_rows($verificar_usuario) > 0){
    echo '
        <script>
            alert("Este usuario ya esta registrado");
            location.href = "../quiero.php";
        </script>
    ';
    exit;
}

$insertar = "INSERT INTO alumnos(nombre, apellidos, interes, telefono, plan_inicial) VALUES ('$nombre', '$apellidos', '$interes', '$telefono', '$plan_inicial')";
$query = mysqli_query($conectar, $insertar);

if($query){
    echo '
        <script>
            alert("¡Alumno Registrado! ¡Bienvenido a tu Nuevo Curso de Guitarra!");
            location.href = "../index.php";
        </script>
    ';
}else{
    echo '
        <script>
            alert("Alumno No Registrado, por favor, intenta de nuevo");
            location.href = "../quiero.php";
        </script>
    ';
}

?>
