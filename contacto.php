<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto - Tecno Microavances</title>
    <link rel="stylesheet" type="text/css" href="style/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Josefin+Sans&family=Lexend:wght@100..900&family=Poppins:wght@600&family=Short+Stack&display=swap"
        rel="stylesheet">
</head>

<body>
    <header>
        <div class="navbar">
            <div class="container-nav"><a href="idenx.html">TECNO MICROAVANCES</a></div>
            <div class="container-nav">
                <a href="index.html">INICIO</a>
                <a href="nosotros.html">NOSOTROS</a>
                <a href="contacto.php">CONTACTO</a>
            </div>
        </div>
    </header>

    <section class="contact-section">
        <div class="cotainer-img">
            <img class="banner" src="img/image.jpg">
            <div class="container-texto">
                <h2>Contáctanos</h2>
                <p>Llama a nuestra oficina para comunicarse con nosotros o complete el formulario de contacto a
                    continuación y nos contactaremos con usted.</p>
            </div>
        </div>
        <div class="container-contacto">
            <h3>¡Estamos listos para atenderte!</h3>
            <form class="form-container" method="POST" action="">
                <p>Ingresar nombre</p>
                <input type="text" name="nombre" required>
                <p>Ingresar correo</p>
                <input type="email" name="correo" required>
                <p>Mensaje</p>
                <input name="mensaje" required>
                <button name="register" type="submit">Enviar</button>
            </form>
        </div>
        <div class="footer-info">
            <h4>TECNO MICROAVANCES</h4>
            <div class="social-media">
                <a href="#"><img src="img/facebook-icon.png" alt="Facebook"></a>
                <a href="#"><img src="img/instagram-icon.png" alt="Instagram"></a>
                <a href="#"><img src="img/whatsapp-icon.png" alt="WhatsApp"></a>
            </div>
            <p>Síguenos en nuestras redes sociales</p>
        </div>
        <footer>
            <p>&copy; 2024 Tecno Microavances. Todos los derechos reservados.</p>
        </footer>
    </section>
</body>

</html>