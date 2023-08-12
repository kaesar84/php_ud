<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Escritura - Query</title>
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
        <h2>Escritura - Query</h2>


        <div class="container ejercicio">
            <div class="cod_html">
                <h3>No recomendable si introduces variables en la query</h3>
                <h4>Código</h4>

                <p>Conexión a base de datos</p>

                <code>
                    $conexion = new mysqli('localhost', 'root', '', 'prueba_mysqli');
                </code>

                <p>Validamos si se ha realizado la conexión</p>
                - Resultado 0 si conexión ok. <br>
                - IF condicionamos si existe error. <br>
                <br>
                <code>
                    if ($conexion->connect_errno) { <br>
                    die('Error al conectar a la BBDD'); <br>
                    } else { <br>
                    echo '&lt;p>Conexión establecida correctamente&lt;/p>'; <br>
                    }
                </code>

            </div>

            <!--  >>>>>>>>>>>>>>>>>>>> PHP -->
            <?php

            echo '
            <div class="cod_php">
            <h4>Resultado</h4>';

            $conexion = new mysqli('localhost', 'root', '', 'prueba_mysqli');


            if ($conexion->connect_errno) { // resultado 0 si conexión ok, en este caso condicionamos si existe error
                die('Error al conectar a la BBDD');
            } else {
                echo '<p>Conexión establecida correctamente</p>';

                echo '<p>Resultado de consultas</p>';

                $sql = 'SELECT * FROM usuarios';

                // ejecuta
                $consulta = $conexion->query($sql);

                // echo $consulta->num_rows; //numero de filas, lo utilizamos para comprobar que devuelve resultados

                if ($consulta->num_rows) { // cumple si tiene resultados
                    while ($fila = $consulta->fetch_assoc()) {
                        echo $fila['id'] . ' - ' . $fila['nombre'] . ' - ' . $fila['email'] . '<br>';
                    }
                } else {
                    echo 'No hay datos';
                }

                //     echo '<pre>';
                //    var_dump($consulta->fetch_assoc());// solo trae un resultado
                //    echo '</pre>';



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