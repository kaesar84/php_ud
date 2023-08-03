<!DOCTYPE html>
<html>
<head>
    <title>Formulario de Contacto</title>
</head>
<body>
    <h2>Contacto</h2>
    <?php
    $usuario = $email = $mensaje = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Obtener los datos del formulario
        $usuario = $_POST["usuario"];
        $email = $_POST["email"];
        $mensaje = $_POST["mensaje"];
    }
    ?>

    <?php if ($_SERVER["REQUEST_METHOD"] == "POST"): ?>
        <h3>Datos recibidos:</h3>
        <p><strong>Usuario:</strong> <?php echo $usuario; ?></p>
        <p><strong>Email:</strong> <?php echo $email; ?></p>
        <p><strong>Mensaje:</strong> <?php echo $mensaje; ?></p>
    <?php else: ?>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
            <label for="usuario">Usuario:</label>
            <input type="text" id="usuario" name="usuario" required>
            <br>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
            <br>

            <label for="mensaje">Mensaje:</label>
            <textarea id="mensaje" name="mensaje" rows="4" cols="50" required></textarea>
            <br>

            <input type="submit" value="Enviar">
        </form>
    <?php endif; ?>
</body>
</html>


