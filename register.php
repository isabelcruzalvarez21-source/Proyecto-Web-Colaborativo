<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
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
        <section class="register">
            <h1>Formulario de Registro</h1>
            
            <form id="registerForm">
                <label for="nombreCompleto">Nombre Completo:</label>
                <input type="text" id="nombreCompleto" name="nombreCompleto" required>

                <label for="emailReg">Email:</label>
                <input type="email" id="emailReg" name="emailReg" required>

                <label for="usuario">Usuario:</label>
                <input type="text" id="usuario" name="usuario" required>

                <label for="password">Contraseña:</label>
                <input type="password" id="password" name="password" required>

                <label for="confirmPassword">Confirmar Contraseña:</label>
                <input type="password" id="confirmPassword" name="confirmPassword" required>

                <label for="telefono">Teléfono:</label>
                <input type="tel" id="telefono" name="telefono">

                <button type="submit">Registrarse</button>
            </form>
        </section>
    </main>

    <footer>
        <p>&copy; 2024 Proyecto Web Colaborativo</p>
    </footer>

    <script src="js/funciones.js"></script>
</body>
</html>