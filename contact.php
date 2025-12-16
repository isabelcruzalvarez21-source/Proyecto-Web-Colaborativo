<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto</title>
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
    <header>
        <img src="img/logo.png" alt="Logo" class="logo">
        <nav>
            <ul>
                <li><a href="index.php">Inicio</a></li>
                <li><a href="about.php">Sobre Nosotros</a></li>
                <li><a href="contact.php">Contacto</a></li>
                <li><a href="register.php">Registro</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <section class="contact">
            <h1>Datos de Contacto</h1>
            
            <div class="contact-info">
                <h2>Información de Contacto</h2>
                <p><strong>Email:</strong> contacto@proyecto.com</p>
                <p><strong>Teléfono:</strong> +123 456 7890</p>
                <p><strong>Dirección:</strong> Calle Principal #123</p>
            </div>

            <div class="contact-form">
                <h2>Envíanos un Mensaje</h2>
                <form id="contactForm">
                    <label for="nombre">Nombre:</label>
                    <input type="text" id="nombre" name="nombre" required>

                    <label for="email">Correo:</label>
                    <input type="email" id="email" name="email" required>

                    <label for="mensaje">Mensaje:</label>
                    <textarea id="mensaje" name="mensaje" rows="5" required></textarea>

                    <button type="submit">Guardar</button>
                </form>
            </div>
        </section>
    </main>

    <footer>
        <p>&copy; 2025 Proyecto Web Colaborativo</p>
    </footer>

    <script src="js/funciones.js"></script>
</body>
</html>