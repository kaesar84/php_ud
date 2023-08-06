<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Herencia</title>
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
        <h2>Herencia</h2>

        <div class="container ejercicio">
            <div class="cod_html">
                <h4>Código</h4>

                <p>Super Clase</p>

                <code>
                    class Persona <br>
                    {<br>
                    //propiedades de la clase<br>
                    public $nombre;<br>
                    public $edad;<br>
                    public $pais;<br>
                    <br>
                    // constructor <br>
                    function __construct($nombre, $edad, $pais)<br>
                    {<br>
                    $this->nombre = $nombre;<br>
                    $this->edad = $edad;<br>
                    $this->pais = $pais;<br>
                    }<br>
                    <br>
                    //métodos<br>
                    public function mostrarInfo()<br>
                    {<br>
                    $info = $this->nombre . ', tiene ' . $this->edad . ' años de edad y reside en ' . $this->pais . '&lt;br&gt;';<br>
                    return $info; <br>
                    }<br>
                    }

                    <p>- Creación de objeto y métodos</p>
                    $alex = new Persona('Alex', 38, 'Colombia'); <br>
                    echo $alex->mostrarInfo(); <br>


                    <br>


                    <p>Clase con herencia</p>

                    class Estudiante extends Persona <br>
                    {<br>
                    public $curso;<br>
                    public $universidad;<br>
                    <br>
                    // constructor<br>
                    function __construct($nombre, $edad, $pais, $curso, $universidad)<br>
                    {<br>
                    parent::__construct($nombre, $edad, $pais);<br>
                    $this->curso = $curso;<br>
                    $this->universidad = $universidad;<br>
                    }<br>
                    <br>
                    public function mostrarInfo()<br>
                    {<br>
                    $info = $this->nombre . ', tiene ' . $this->edad . ' años de edad y reside en ' . $this->pais . '&lt;br&gt;';<br>
                    $info .= 'Esta realizando el curso ' . $this->curso . ' en la universidad ' . $this->universidad . '&lt;br&gt;';<br>
                    $info .= '&lt;br&gt;';<br>
                    return $info;<br>
                    }<br>
                    }<br>

                    <p>- Creación de objeto y métodos</p>
                    $cesar = new Estudiante('César', 39, 'España', 1, 'UB');<br>
                    echo $cesar->mostrarInfo();<br>

                </code>

            </div>

            <!--  >>>>>>>>>>>>>>>>>>>> PHP -->
            <?php

            echo '
      <div class="cod_php">
      <h4>Resultado</h4>';

            echo '<p>Super Clase</p>';
            class Persona
            {
                //propiedades de la clase
                public $nombre;
                public $edad;
                public $pais;

                // constructor
                function __construct($nombre, $edad, $pais)
                {
                    $this->nombre = $nombre;
                    $this->edad = $edad;
                    $this->pais = $pais;
                }

                //métodos
                public function mostrarInfo()
                {
                    $info = $this->nombre . ', tiene ' . $this->edad . ' años de edad y reside en ' . $this->pais . '<br>';
                    return $info;
                }
            }

            $alex = new Persona('Alex', 38, 'Colombia');
            echo $alex->mostrarInfo();

            echo '<p>Clase con herencia</p>';

            // Clase con herencia
            class Estudiante extends Persona
            {
                public $curso;
                public $universidad;

                // constructor
                function __construct($nombre, $edad, $pais, $curso, $universidad)
                {
                    parent::__construct($nombre, $edad, $pais);
                    $this->curso = $curso;
                    $this->universidad = $universidad;
                }

                public function mostrarInfo()
                {
                    $info = $this->nombre . ', tiene ' . $this->edad . ' años de edad y reside en ' . $this->pais . '<br>';
                    $info .= 'Esta realizando el curso ' . $this->curso . ' en la universidad ' . $this->universidad . '<br>';
                    $info .= '<br>';
                    return $info;
                }
            }

            // Clase heredada
            $cesar = new Estudiante('César', 39, 'España', 1, 'UB');
            echo $cesar->mostrarInfo();

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