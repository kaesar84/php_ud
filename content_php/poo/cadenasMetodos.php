<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cadenas de métodos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

    <link rel="stylesheet" href="../../styles/css/index.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</head>

<body>

    <?php

    use Estudiante as GlobalEstudiante;
    use Usuario as GlobalUsuario;

    echo '<header>
   <img src="../../media/logophpclaro.png" alt="">
   </header>'
    ?>

    <section id="sectionTema">
        <h2>Cadenas de métodos</h2>

        <div class="container ejercicio">
            <div class="cod_html">
                <h4>Código</h4>

                <p>Métodos tienen que retornar $this</p>

                <code>

                    class Usuario <br>
                    { <br>
                    //atributos<br>
                    public $nombre;<br>
                    public $correo;<br>
                    <br>
                    //constructor<br>
                    function __construct($nombre, $correo)<br>
                    {<br>
                    $this->nombre = $nombre;<br>
                    $this->correo = $correo;<br>
                    }<br>
                    <br>
                    // métodos<br>
                    public function mostrarNombre()<br>
                    {<br>
                    echo 'El nombre es: ' . $this->nombre . '&lt;br&gt;';<br>
                    return $this;<br>
                    }<br>
                    <br>
                    public function mostrarCorreo()<br>
                    {<br>
                    echo 'El correo es: ' . $this->correo . '&lt;br&gt;';<br>
                    return $this;<br>
                    }<br>
                    }<br>

                    <p>Creación de objeto</p>
                    $cesar = new Usuario('César', 'cesar@gmail.com');<br>
                    
                    <p>Cadenas de métodos</p>
                    $cesar->mostrarNombre()->mostrarCorreo();<br>

                </code>

            </div>

            <!--  >>>>>>>>>>>>>>>>>>>> PHP -->
            <?php

            echo '
      <div class="cod_php">
      <h4>Resultado</h4>';

            class Usuario
            {
                //atributos
                public $nombre;
                public $correo;

                //constructor
                function __construct($nombre, $correo)
                {
                    $this->nombre = $nombre;
                    $this->correo = $correo;
                }

                // métodos
                public function mostrarNombre()
                {
                    echo 'El nombre es: ' . $this->nombre . '<br>';
                    return $this;
                }

                public function mostrarCorreo()
                {
                    echo 'El correo es: ' . $this->correo . '<br>';
                    return $this;
                }
            }

            $cesar = new Usuario('César', 'cesar@gmail.com');

            $cesar->mostrarNombre()->mostrarCorreo();




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