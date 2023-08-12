<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Conexión PDO</title>
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
        <h2>Conexión PDO</h2>

        <div class="container ejercicio">
            <div class="cod_html">
                <h4>Código</h4>

                <p>Conexión a base de datos</p>

                <code>
                    &lt;?php <br> <br>
                    try{ <br>
                    $conexion = new PDO('mysql:host=localhost;dbname=prueba_consola','root',''); <br>
                    echo 'Conexión realizada con éxito'; <br>
                    }catch(PDOException $e){ <br>
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

            try {
                $conexion = new PDO('mysql:host=localhost;dbname=prueba_consola', 'root', '');
                echo 'Conexión realizada con éxito';
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