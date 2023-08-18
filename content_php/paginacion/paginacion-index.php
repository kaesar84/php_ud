<?php

try{
    $conexion = new PDO('mysql:host=localhost;dbname=paginacion_db', 'root', '');
    echo ' Conectado';

}catch(PDOException $e){
 echo 'ERROR: ' . $e->getMessage();
 die();
}

$pagina = isset($_GET['pagina']) ? (int)$_GET['pagina'] : 1;
$postPorPagina = 5;

$inicio = ($pagina > 1) ? ($pagina * $postPorPagina - $postPorPagina) : 0;

// preparamos la consulta
$articulos = $conexion->prepare
("SELECT SQL_CALC_FOUND_ROWS * FROM articulos 
LIMIT $inicio, $postPorPagina");

$articulos->execute();
$articulos = $articulos -> fetchAll();

// print_r($articulos);

if(!$articulos){
    header('Location: http://localhost:8080/php_ud/content_php/paginacion/paginacion-index.php');
}

// contar el numero de articulos
$totalArticulos = $conexion->query('SELECT FOUND_ROWS() as total');
$totalArticulos = $totalArticulos->fetch()['total'];
//echo $totalArticulos;

// redondea el numero de páginas
$nummeroPagina = ceil($totalArticulos / $postPorPagina);
//echo $nummeroPagina;


require 'paginacion-view.php';
