<header>
        <a href="index.php"><img class="logo_header" src="img/White_Logo.png" alt="Logo Escuela MT"></a>
        <ul>
            <li><a href="index.php">Inicio</a></li>
            <li><a href="quiero.php">¡Quiero tomar Clase!</a></li>
            <li><a href="planes.php">Planes</a></li>
        </ul>
        <a href="panel_acceder_admin.php" class="btn_Acceder">Acceder</a>
</header>

<script>
        window.addEventListener("scroll", function(){
            var header = document.querySelector("header");
            header.classList.toggle("header_sticky", window.scrollY > 0)
        })
</script>