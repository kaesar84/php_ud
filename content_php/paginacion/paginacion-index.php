<?php

// Creamos conexión
try {
    $conexion = new PDO('mysql:host=localhost;dbname=paginacion_db', 'root', '');
    //echo ' Conectado';

} catch (PDOException $e) {
    echo 'ERROR: ' . $e->getMessage();
    die();
}
// Si no se indica nada por defecto página 1
$pagina = isset($_GET['pagina']) ? (int)$_GET['pagina'] : 1;

// Número de posrt por página
$postPorPagina = 5;

// Estableciendo vista de inicio
$inicio = ($pagina > 1) ? ($pagina * $postPorPagina - $postPorPagina) : 0;

// preparamos la consulta
// SQL_CALC_FOUNDS_ROWS contabiliza las líneas que devuelve el select
$articulos = $conexion->prepare("SELECT SQL_CALC_FOUND_ROWS * FROM articulos 
LIMIT $inicio, $postPorPagina");

// Ejecuta la consulta
$articulos->execute();

// Rpera todos los datos en un array
$articulos = $articulos->fetchAll();
// print_r($articulos);

// Redericcionamiento en caso de que no hubiera el articulo indicado, si en la url se indica un valor que no existe.    
if (!$articulos) {
    header('Location: http://localhost:8080/php_ud/content_php/paginacion/paginacion-index.php');
}

// contar el numero de articulos
$totalArticulos = $conexion->query('SELECT FOUND_ROWS() as total');
$totalArticulos = $totalArticulos->fetch()['total'];
//echo $totalArticulos;

// redondea el numero de páginas
$nummeroPagina = ceil($totalArticulos / $postPorPagina);
//echo $nummeroPagina;

// Incluye la estructura 
require 'paginacion-view.php';
