<?php


// SI no hay post redirecciona, evitas el acceso, solo se accede a través del formulario
if (!$_GET) {
    header('Location: http://localhost/PHP_UD/content_php/formularios/formularioGet.php');
}

echo '<p>$_GET - Genera un array asociativo con los datos</p>';
echo '<pre>';
print_r($_GET);
echo '</pre>';


$usuario = $_GET['usuario'];
$tipoPersona = $_GET['tipoPersona'];
$horario = $_GET['horario'];
$aceptaTerminos = $_GET['input-terminos'];


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
