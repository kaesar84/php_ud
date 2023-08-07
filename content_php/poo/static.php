<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Palabra reservada: static</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

    <link rel="stylesheet" href="../../styles/css/index.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</head>

<body>

    <?php

    use Estudiante as GlobalEstudiante;

    echo '<header>
   <img src="../../media/logophpclaro.png" alt="">
   </header>'
    ?>

    <section id="sectionTema">
        <h2>Palabra reservada: static</h2>

        <div class="container ejercicio">
            <div class="cod_html">
                <h4>Código</h4>

                <p> Permite el acceso a atributos o métodos estáticos, no es necesario instanciar objeto</p>

                <code>

                    class Persona <br>
                    {<br>
                    public static $dia = '7 de Mayo';<br>
                    <br>
                    public static function saludo($nombre=null)<br>
                    {<br>
                    if($nombre){<br>
                    return 'Hemos introducido el parámetro $nombre: ' . $nombre;<br>
                    }<br>
                    return 'No hemos informado de ningún parámetro';<br>
                    }<br>
                    <br>
                    }<br>
                    <br>

                    echo Persona::$dia;<br>
                    echo Persona::saludo();<br>
                    echo Persona::saludo('Cesar');<br>


                </code>

            </div>

            <!--  >>>>>>>>>>>>>>>>>>>> PHP -->
            <?php

            echo '
      <div class="cod_php">
      <h4>Resultado</h4>';

            class Persona
            {
                public static $dia = '7 de Mayo';

                public static function saludo($nombre = null)
                {
                    if ($nombre) {
                        return 'Hemos introducido el parámetro $nombre:  ' . $nombre;
                    }
                    return 'No hemos informado de ningún parámetro';
                }
            }

            // acceso a atributos o métpdps estáticos, no es necesario instanciar objeto
            echo Persona::$dia;
            echo '<br>';
            echo Persona::saludo();
            echo '<br>';
            echo Persona::saludo('Cesar');


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