<?php


// SI no hay post redirecciona, evitas el acceso
if (!$_POST) {
    header('Location: http://localhost/PHP_UD/content_php/formularios/formularioPost.php');
}

echo '<p>$_POST - Genera un array asociativo con los datos</p>';
echo '<pre>';
print_r($_POST);
echo '</pre>';


$usuario = $_POST['usuario'];
$tipoPersona = $_POST['tipoPersona'];
$horario = $_POST['horario'];
$aceptaTerminos = $_POST['input-terminos'];


echo '<p>Datos Capturados</p>';
echo 'usuario >>>' .  $usuario . '<br>';
echo 'tipoPersona >>>' .  $tipoPersona . '<br>';
echo 'horario >>>' .  $horario . '<br>';
echo 'aceptaTerminos >>>' .  $aceptaTerminos . '<br>';


echo '<p>Uso de variables</p>';
echo '
Hola ' . $usuario . ' eres ' . $tipoPersona . ', prefieres el horario de ' . $horario;
echo '<br>';
if ($aceptaTerminos) {
    echo 'Has aceptado las condiciones';
} else {
    echo 'No has aceptado las condiciones';
}
