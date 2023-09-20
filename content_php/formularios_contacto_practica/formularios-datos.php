<?php

$errores = '';
$enviado = '';

if (isset($_POST['submitBtn'])) {
    $usuario = $_POST['usuario'];
    $email = $_POST['email'];
    $mensaje = $_POST['mensaje'];

    if (!empty($usuario)) {
        $usuario = trim($usuario);
    } else {
        $errores .= 'Por favor introduce un nombre<br>';
    }


    if (!empty($email)) {
        $email = filter_var($email, FILTER_SANITIZE_EMAIL);

        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errores .= 'Ingresa un correo valido <br>';
        }
    } else {
        $errores .= 'Por favor introduce un email<br>';
    }

    if (!empty($mensaje)) {
        $mensaje = htmlspecialchars($mensaje);
        $mensaje = trim($mensaje);
        $mensaje = stripslashes($mensaje);
    } else {
        $errores .= 'Por favor introduce un mensaje<br>';
    }

    if (!$errores) {
        $enviar_a = 'kaesar84@gmail.com';
        $asunto = 'Enviado desde PHP';
        $mensaje_preparado = "De: $usuario  \n";
        $mensaje_preparado .= "E-mail $email \n";
        $mensaje_preparado .= "Mensaje: $mensaje \n";

        mail($enviar_a, $asunto, $mensaje_preparado);
        $enviado=true;
    }
}



require 'formulario.php';

?>