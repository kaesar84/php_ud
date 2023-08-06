<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Método constructor</title>
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
        <h2>Método constructor</h2>

        <div class="container ejercicio">
            <div class="cod_html">
                <h4>Código</h4>

                <p>Creación de clase</p>

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
                    }<br>

                    <p>Nuevo objeto</p>
                    $cesar = new Persona('César', 39, 'España'); <br>
                    $alex = new Persona('Alex', 38, 'Colombia'); <br>


                    <br>


                    <p>Llamada al método</p>
                    $cesar->mostrarInfo();<br>
                    $alex->mostrarInfo();<br>

                </code>

            </div>

            <!--  >>>>>>>>>>>>>>>>>>>> PHP -->
            <?php

            echo '
      <div class="cod_php">
      <h4>Resultado</h4>';


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

            //Nuevos objetos
            $cesar = new Persona('César', 39, 'España');
            $alex = new Persona('Alex', 38, 'Colombia');



            echo '<p>Llamada al método</p>';
            echo $cesar->mostrarInfo();
            echo $alex->mostrarInfo();


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