<?php
    session_start();
    if($_SESSION["autentificado"] != "SI"){
        echo '
            <script>
                alert("No está auentificado");
            </script>
        ';
        header("Location: ../panel_acceder_admin.php");
        exit();
    }
?>