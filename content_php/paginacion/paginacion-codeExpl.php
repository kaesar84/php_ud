<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Paginación - Detalla del código</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

    <link rel="stylesheet" href="../../styles/css/index.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</head>

<body>

    <?php
    echo '<header>
   <img src="../../media/logophpclaro.png" alt="">
   </header>'
    ?>

    <section id="sectionTema">
        <h2>Paginación - Detalla del código</h2>

        <div class="container ejercicio">

        <h4>Estructura de archivos</h4>
        <br>
                <p> paginacion-index.php -> Lógica e incorpora require - 'paginacion-view.php'. </p>
              <p>paginacion-view.php -> Estructura html, incorporando variables php y sentencias.</p>
                 
                <br>
            <div class="cod_html">
                
                <h4> - Código: paginacion-index.php</h4>
                <code>
                    &lt;?php

                    <p>Creamos conexión</p>
                    try {<br>
                    $conexion = new PDO('mysql:host=localhost;dbname=paginacion_db', 'root', '');<br>
                    //echo ' Conectado';<br>
                    <br>
                    } catch (PDOException $e) {<br>
                    echo 'ERROR: ' . $e->getMessage();<br>
                    die();<br>
                    }<br>
                    <p>Si no se indica nada por defecto página 1</p>
                    $pagina = isset($_GET['pagina']) ? (int)$_GET['pagina'] : 1;<br>
                    <br>
                    <p>Número de posrt por página</p>
                    $postPorPagina = 5;<br>
                    <br>
                    <p>Estableciendo vista de inicio</p>
                    $inicio = ($pagina > 1) ? ($pagina * $postPorPagina - $postPorPagina) : 0;<br>
                    <br>
                    <p>Preparamos la consulta</p>
                    <p>SQL_CALC_FOUNDS_ROWS contabiliza las líneas que devuelve el select</p>
                    $articulos = $conexion->prepare("SELECT SQL_CALC_FOUND_ROWS * FROM articulos<br>
                    LIMIT $inicio, $postPorPagina");<br>

                    <p>Ejecuta la consulta</p>
                    $articulos->execute();<br>

                    <p>Recupera todos los datos en un array</p>
                    $articulos = $articulos->fetchAll();<br>
                    //print_r($articulos);<br>

                    <p>Redericcionamiento en caso de que no hubiera el articulo indicado, si en la url se indica un valor que no existe.</p>
                    if (!$articulos) {<br>
                    header('Location: http://localhost:8080/php_ud/content_php/paginacion/paginacion-index.php');<br>
                    }<br>

                    <p>Contar el numero de articulos</p>
                    $totalArticulos = $conexion->query('SELECT FOUND_ROWS() as total');<br>
                    $totalArticulos = $totalArticulos->fetch()['total'];<br>
                    //echo $totalArticulos;<br>

                    <p>Redondea el numero de páginas</p>
                    $nummeroPagina = ceil($totalArticulos / $postPorPagina);<br>
                    //echo $nummeroPagina;<br>

                    <p>Incluye la estructura</p>
                    require 'paginacion-view.php';<br>
                </code>

            </div>

            <!--  >>>>>>>>>>>>>>>>>>>> PHP -->
            <?php

            echo '
      <div class="cod_php">
      <h4>- Código: paginacion-view.php</h4>';

      echo '<br>';
           
            echo '<img class="paginacionImg" src="../../media/paginacion1.png" alt="codigo paginacion-view">';
            echo '<img class="paginacionImg" src="../../media/paginacion2.png" alt="codigo paginacion-view">';
            echo '<img class="paginacionImg" src="../../media/paginacion3.png" alt="codigo paginacion-view">';
            echo '<img class="paginacionImg" src="../../media/paginacion4.png" alt="codigo paginacion-view">';

            ?>
        </div>







    </section>


    <footer>
        <button type="button" class="btn-return"><a href="../../index.php"><i class="bi bi-caret-left-square-fill"></i> Atrás</a></button>
    </footer>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>

</html>