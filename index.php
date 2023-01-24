<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MT: Las Mejores clases de Guitarra</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
        include "header.php";
    ?>
    <div class="banner">
        <div class="contenido_banner ancho">
            <div class="texto_banner">
                <h1>Conviértete en un</h1>
                <h2><span class="naranja">Maestro</span> de la Guitarra</h2>
            </div>
            <div class="descripcion_banner">
                <h3>Con nuestros cursos online,</h3>
                <h3>cualquiera puede aprender.</h3>
            </div>
        </div>
    </div>
    <div class="seccion_video">
        <div class="ancho">
            <div class="titulo_video">
                <h3 class="gris">Fácil y Rápido</h3>
                <h2 class="gris">¿Quieres una prueba?</h2>
                <div class="rectangulo_video"></div>
            </div>
            <div class="contenedor_video">
                <iframe class="video" src="https://www.youtube.com/embed/S_QIaGgLJ-0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </div>
    </div>
    <div class="seccion_tipos">
        <div class="ancho">
            <div class="titulo_tipos">
                <hr class="hrtipos">
                <h2>Los TIPOS de Guitarras</h2>
                <hr class="hrtipos">
            </div>
            <div class="contenedor_tablatipos">
                <table class="tabla_tipos">
                    <tr>
                        <th><img class="guitarra_tabla" src="img/Guitarra_Electrica_Tiny.jpg" alt="Guitarra Eléctrica"></th>
                        <th><img class="guitarra_tabla" src="img/Bajo_Tiny.jpg" alt="Bajo"></th>
                        <th><img class="guitarra_tabla" src="img/Acustica_Tiny.jpg" alt="Guitarra Acústica"></th>
                        <th><img class="guitarra_tabla" src="img/Ukele_Tiny.jpg" alt="Ukelele"></th>
                    </tr>
                    <tr>
                        <td><h3 class="center">Eléctrica</h3></td>
                        <td><h3 class="center">Bajo</h3></td>
                        <td><h3 class="center">Acústica</h3></td>
                        <td><h3 class="center">Ukelele</h3></td>
                    </tr>
                    <tr>
                        <td class="descripcion_tipos"><p>Surgió de una necesidad de los músicos de jazz, tratando de amplificar su sonido</p></td>
                        <td class="descripcion_tipos"><p>Reproduce los sonidos más graves del espectro sonoro de una canción</p></td>
                        <td class="descripcion_tipos"><p>Produce sonido por la vibración de las cuerdas y se propaga por la caja armónica</p></td>
                        <td class="descripcion_tipos"><p>Se adapta a tus necesidades, y es muy sencillo de aprender</p></td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
    <div class="seccion_ubicacion">
        <div class="ancho">
            <div class="contenedor_tituloubicacion">
                <h2>Nuestra Ubicación</h2>
            </div>
            <div class="contenedor_mapa">
                <iframe class="mapa" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3724.308392618475!2d-89.61554898989405!3d21.02034299096497!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8f5676bd7285ffa7%3A0x9e1877fc0feb2d45!2sEiffel%20Escuela%20de%20Artes!5e0!3m2!1ses!2smx!4v1670291507459!5m2!1ses!2smx"  style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="descripcion_mapa">
                <h3>Te esperamos con plumilla en mano,</h3>
                <h3>listos para enseñarte.</h3>
            </div>
            <br>
            <div class="contenedor_direccion">
                <p>Av. Cámara de Comercio 299A, Benito Juárez Nte.,<br>97119 Mérida, Yuc.</p>
            </div>
        </div>
    </div>
    <div class="seccion_newsletter">
        <div class="ancho_newsletter">
                <div class="contenedor_textonewsletter">
                    <h3>¡Suscríbete a nuestro Newsletter<br>y recibe las MEJORES PROMOCIONES!</h3>
                    <form action="admin/newsletter.php" method="post" name="form_newsletter">
                        <div class="contenedor_inputnewsletter">
                            <input name="contacto_newsletter" id="contacto_newsletter" class="login_newsletter" type="email" placeholder="Correo Electrónico">
                        </div>
                        <div class="contenedor_btn_enviarnewsletter">
                            <input type="submit" class="btn_enviarnewsletter" value="¡Enviar!" onclick="return validar_newsletter()">
                        </div>
                    </form>
                </div>
        </div>
    </div>
    <?php
    include "footer.php";
    ?>

    <script>
        function validar_newsletter(){
            if(document.getElementById("contacto_newsletter").value.length == 0){
                alert("Por favor, escribe tu Correo Electrónico");
                document.getElementById("contacto_newsletter").focus();
                return false;
            }
            return true;
        }
    </script>
</body>
</html>