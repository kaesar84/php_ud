<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Consultas Statements</title>
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
        <h2>Consultas Statements</h2>

        <div class="container ejercicio">
            <div class="cod_html">
                <h4>Código</h4>



                <p>Variables para parámetros de consulta</p>
                <code>$id = 6; </code><br>

                <p>Conexión a base de datos</p>
                <code>
                    &lt;?php <br> <br>
                    try{ <br>
                    $conexion = new PDO('mysql:host=localhost;dbname=prueba_consola','root',''); <br>
                    echo 'Conexión realizada con éxito'; <br>

                    <p>Preparamos la consulta</p>
                    $statement = $conexion->prepare('SELECT * FROM usuarios WHERE id= :id');

                    <p>Ejecutamos consulta</p>
                    $statement->execute( <br>
                    array(':id' => $id) <br>
                    ); <br>

                    <p>Mostrar los resultados // solo mostramos nombre del $id=6</p>
                    $resultados = $statement->fetchAll(); <br>
                    foreach ($resultados as $nombres) { <br>
                    echo $nombres['nombre'] . '&lt;br&gt;';<br>
                    } <br>

                    }
                    <p>catch</p>
                    catch(PDOException $e){ <br>
                    echo 'Error: ' . $e->getMessage(); <br>
                    } <br>
                    <br> ?>
                </code>

            </div>

            <!--  >>>>>>>>>>>>>>>>>>>> PHP -->
            <?php

            echo '
            <div class="cod_php">
            <h4>Resultado</h4>';

            $id = 6;

            try {
                $conexion = new PDO('mysql:host=localhost;dbname=prueba_consola', 'root', '');
                echo '<p>Conexión realizada con éxito</p>';

                // Preparamos consulta
                $statement = $conexion->prepare('SELECT * FROM usuarios WHERE id= :id');

                // Ejecutamos consulta
                $statement->execute(
                    array(':id' => $id)
                );

                //mostrar
                // $resultados = $statement->fetch(); // Solo trae un resultado
                $resultados = $statement->fetchAll(); // Trae todos
                foreach ($resultados as $nombres) {
                    echo $nombres['nombre'] . '<br>';
                }
                // echo '<pre>';
                // print_r($resultados);
                // echo '</pre>';


            } catch (PDOException $e) {
                echo 'Error: ' . $e->getMessage();
            }


            echo '</div>';
            ?>
        </div>

    </section>

    <footer>
        <button type="button" class="btn-return"><a href="../../index.php"><i class="bi bi-caret-left-square-fill"></i> Atrás</a></button>
    </footer>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>

</html>