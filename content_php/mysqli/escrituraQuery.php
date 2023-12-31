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

                <code>
                    if ($conexion->connect_errno) { <br>
                    die('Error al conectar a la BBDD'); <br>
                    <br>
                    } else { <br>
                    echo '&lt;p>Conexión establecida correctamente&lt;/p>'; <br>

                    echo '&lt;p>Resultado de consultas&lt;/p>'; <br>

                </code>

                <p>Sentencia sql</p>
                <code>
                    $sql = 'INSERT INTO usuarios (nombre,email) VALUES ("Raul","raul@correo.com")'; <br>
                </code>
                <p>Ejecuta</p>
                <code>
                    $conexion->query($sql); <br>
                </code>
                <br>

                <p>Numero de filas añadidas</p>
                <code>
                    $conexion->query($sql); <br>
                    if($conexion->affected_rows>=1){ <br>
                    echo ' Filas agregadas:' . $conexion->affected_rows; <br>
                    } <br>
                    <br>
                    }

                </code>



            </div>

            <!--  >>>>>>>>>>>>>>>>>>>> PHP -->
            <?php

            echo '
            <div class="cod_php">
            <h4>Resultado</h4>';

            $conexion = new mysqli('localhost', 'root', '', 'prueba_mysqli');


            if ($conexion->connect_errno) {
                die('Error al conectar a la BBDD');
            } else {
                echo '<p>Conexión establecida correctamente</p>';

                // echo '<p>Resultado de consultas</p>';

                // $sql = 'INSERT INTO usuarios (nombre,email) VALUES ("Peach","peach@correo.com")';

                // //ejecuta
                // $conexion->query($sql);
                // if ($conexion->affected_rows >= 1) {
                //     echo ' Filas agregadas:' . $conexion->affected_rows;
                // }
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