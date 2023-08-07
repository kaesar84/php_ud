<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Scope</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

    <link rel="stylesheet" href="../../styles/css/index.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</head>

<body>

    <?php

    use Persona as GlobalPersona;

    echo '<header>
   <img src="../../media/logophpclaro.png" alt="">
   </header>'
    ?>

    <section id="sectionTema">
        <h2>Scope</h2>

        <div class="container ejercicio">
            <div class="cod_html">
                <h4>Código</h4>

                <p>Tipos de scope</p>
                - <strong>Public</strong> - Accesible desde cualquier parte, dentro o fuera de la clase. <br>
                - <strong>Protected</strong> - Accesible desde dentro de la clase y otras que heredan, no desde fuera. <br>
                - <strong>Private</strong> - Accesible solo desde la clase dónde se creó. Tampoco las que heredan. <br>

                <p>Super clase</p>
                <code>

                    class Usuario <br>
                    { <br>
                    // atributos<br>
                    protected $nombre;<br>
                    protected $correo;<br>

                    // constructor<br>
                    function __construct($nombre, $correo)<br>
                    {<br>
                    $this->nombre = $nombre;<br>
                    $this->correo = $correo;<br>
                    }<br>
                    <br>
                    // métodos<br>

                    public function getNombre()<br>
                    {<br>
                    return $this->nombre;<br>
                    }<br>
                    <br>

                    public function getCorreo()<br>
                    {<br>
                    return $this->correo;<br>
                    }<br>
                    <br>
                    }<br>

                    <br>
                    $carlos = new Usuario('Carlos', 'carlos@gmail.com');<br>
                    // No accesible <br>
                    // echo $carlos->nombre . '&lt;br&gt;';<br>
                    // echo $carlos->correo . '&lt;br&gt;';<br>
                    <br>
                    echo $carlos->getNombre();<br>

                    echo $carlos->getCorreo();<br>

                </code>


                <p>Clase heredada</p>
                <code>
                    class Miembro extends Usuario<br>
                    {<br>
                    }<br>
                    <br>
                    $mario = new Miembro('Mario', 'mario@gmail.com');<br>
                    echo $mario->getNombre();<br>

                    echo $mario->getCorreo();<br>
                </code>

            </div>

            <!--  >>>>>>>>>>>>>>>>>>>> PHP -->
            <?php

            echo '
      <div class="cod_php">
      <h4>Resultado</h4>';

            echo '<p>Super Clase</p>';

            class Usuario
            {
                // atributos
                protected $nombre;
                protected $correo;

                // constructor
                function __construct($nombre, $correo)
                {
                    $this->nombre = $nombre;
                    $this->correo = $correo;
                }

                // métodos

                public function getNombre()
                {
                    return $this->nombre;
                }


                public function getCorreo()
                {
                    return $this->correo;
                }
            }


            $carlos = new Usuario('Carlos', 'carlos@gmail.com');
            // echo $carlos->nombre . '<br>';
            // echo $carlos->correo . '<br>';

            echo $carlos->getNombre();
            echo '<br>';
            echo $carlos->getCorreo();


            echo '<p>Clase heredada -  getters - Accediendo a atributos protegidos</p>';


            class Miembro extends Usuario
            {
            }

            $mario = new Miembro('Mario', 'mario@gmail.com');
            echo $mario->getNombre();
            echo '<br>';
            echo $mario->getCorreo();





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