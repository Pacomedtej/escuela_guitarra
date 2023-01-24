<?php
    require "seguridad.php";
    session_start();
    session_destroy();
    echo '
        <script>
            alert("Has salido del sistema");
            location.href = "../panel_acceder_admin.php";
        </script>
    ';
?>