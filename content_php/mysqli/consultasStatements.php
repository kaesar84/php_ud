<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Prepared Staments MYSQLi</title>
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
        <h2>Prepared Staments MYSQLi</h2>

        <div class="container ejercicio">
            <div class="cod_html">
                <h4>Código</h4>

                <p>Conexión a base de datos</p>

                <code>
                    $conexion = new mysqli('localhost', 'root', '', 'prueba_mysqli');
                </code>

                <p>Validamos si se ha realizado la conexión</p>


                <code>
                    if ($conexion->connect_errno) { <br>
                    die('Error al conectar a la BBDD'); <br>
                    } else { <br>
                    echo '&lt;p>Conexión establecida correctamente&lt;/p>'; <br>

                    <p>- Preparamos la consulta, dejando los valores como placeholders (?)</p>
                    $statement = $conexion->prepare("INSERT INTO usuarios (id,nombre,email) VALUES (?,?,?)"); <br>
                    <p>- Reemplazamos los placeholders (?) con los valores que queremos usar. <br>
                        s = string <br> i = integer <br>d = double
                    </p>



                    <code> $statement->bind_param('iss', $id, $nombre, $email);</code>

                    <p>- Pasamos los parámetros a través de url: <br>http://localhost:8080/php_ud/content_php/mysqli/consultasStatements.php?nombre=Yoshi&email=yoshi@correo.com</p>

                    <p>Asignamos los valores</p>
                    <code>
                        $id = NULL; <br>
                        <br>
                        if (isset($_GET['nombre']) && isset($_GET['email'])) { <br>
                        $nombre = $_GET['nombre']; <br>
                        $email = $_GET['email']; <br>
                        } <br>
                    </code>

                    <p>- Ejecutamos</p>
                    <code> $statement->execute();</code>


                    <p>- Información sobre los cambios realizados</p>
                    if ($conexion->affected_rows >= 1) { <br>
                    echo 'Filas agregadas ' . $conexion->affected_rows; <br>
                    }else{ <br>
                    echo 'No se agregó nada'; <br>
                    } <br>

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

                // preparar
                $statement = $conexion->prepare("INSERT INTO usuarios (id,nombre,email) VALUES (?,?,?)");
                //  Reemplazamos los placeholders (?) con los valores que queremos usar.
                // s = string
                // i = integer
                // d = double

                $statement->bind_param('iss', $id, $nombre, $email);

                // pasamos los parámetros a través de url
                // http://localhost:8080/php_ud/content_php/mysqli/consultasStatements.php?nombre=Yoshi&email=yoshi@correo.com

                $id = NULL;

                if (isset($_GET['nombre']) && isset($_GET['email'])) {
                    $nombre = $_GET['nombre'];
                    $email =  $_GET['email'];
                }


                // ejecutar

                $statement->execute();


                if ($conexion->affected_rows >= 1) {
                    echo 'Filas agregadas ' . $conexion->affected_rows;
                } else {
                    echo 'No se agregó nada';
                }
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