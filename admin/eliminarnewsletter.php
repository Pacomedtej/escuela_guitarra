<?php
include "conexion.php";

$id = $_GET['id'];

// echo "id" ;

$eliminar = "DELETE FROM newsletter WHERE id='$id'";
$resultado = mysqli_query($conectar, $eliminar);
if ($resultado){
  header("Location:panel_newsletter.php");
}else{
  echo "No se pudo eliminar el usuario";
}