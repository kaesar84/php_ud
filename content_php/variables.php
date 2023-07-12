<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Variables</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

  <link rel="stylesheet" href="../styles/css/index.css">

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</head>

<body>

  <?php
  echo '<header>
   <img src="../media/logophpclaro.png" alt="">
   
   </header>'
  ?>

  <section id="sectionTema">
    <h2>Variables</h2>

    <div class="container ejercicio">

      <h3>Strings</h3>
      <!--  <p>Cadena de caracteres</p> -->

      <!-- >>>>>>>>>>>>>>>>>>>> HTML -->
      <div class="cod_html">
        <h4>Código</h4>
        <code>
        $nombre = 'César';
        <br>
        echo 'Soy un string: '. $nombre
        </code>
      </div>

      <!--  >>>>>>>>>>>>>>>>>>>> PHP -->
      <?php
      $nombre = 'César';

      echo '
      <div class="cod_php">
      <h4>Resultado</h4>
      Soy un string: ' . $nombre . '
      </div>'
      ?>

    </div>

    <div class="container ejercicio">
      <h3>Integer</h3>
      <div class="cod_html">
        <h4>Código</h4>
        <code>
        $numero = 1;
        <br>
        echo 'Soy un número entero: '. $numero;
        </code>
      </div>

      <!--  >>>>>>>>>>>>>>>>>>>> PHP -->
      <?php
      $numero = 1;

      echo '
      <div class="cod_php">
      <h4>Resultado</h4>
      Soy un número entero: ' . $numero . '
      </div>'
      ?>
    </div>


    <div class="container ejercicio">
      <h3>Double</h3>
      <div class="cod_html">
        <h4>Código</h4>
        <code>
        $decimal = 18.99;
        <br>
        echo 'Soy un número con decilames: '. $decimal;
        </code>
      </div>

      <!--  >>>>>>>>>>>>>>>>>>>> PHP -->
      <?php
      $decimal = 18.99;

      echo '
      <div class="cod_php">
      <h4>Resultado</h4>
      Soy un número con decimales: ' . $decimal . '
      </div>'
      ?>
    </div>


    <div class="container ejercicio">
      <h3>Boolean</h3>
      <div class="cod_html">
        <h4>Código</h4>
        <code>
        $verdadero = true;
        <br>
        $falso = false;
        <br>
        echo Verdadero: ' . $verdadero.'
        <br>
        echo Falso: '.$falso'
        </code>
      </div>

      <!--  >>>>>>>>>>>>>>>>>>>> PHP -->
      <?php
      $verdadero = true;
      $falso = false;

      echo '
      <div class="cod_php">
      <h4>Resultado</h4>
      Verdadero: ' . $verdadero . '<br>
      Falso: ' . $falso .
        '<br>* Valor 0 - devuelve cadena vacía</div>'
      ?>
    </div>



    <div class="container ejercicio">
      <h3>gettype</h3>
      <div class="cod_html">
        <h4>Código</h4>
        <code>
          $nombre = 'César';<br>
          $decimal = 18.99;<br>
          $numero = 1;<br>
          $verdadero = true;<br>
          $falso = false;<br>
          <br>

          echo 'La variable&lt;em&gt;$nombre&lt;/em&gt; es de tipo: ' . gettype($nombre) . '&lt;br&gt;';<br>
          echo 'La variable&lt;em&gt;$decimal&lt;/em&gt; es de tipo: ' . gettype($decimal) .'&lt;br&gt;';<br>
          echo 'La variable&lt;em&gt;$numero&lt;/em&gt; es de tipo: ' . gettype($numero) . '&lt;br&gt;';<br>
          echo 'La variable&lt;em&gt;$verdadero&lt;/em&gt; es de tipo: ' . gettype($verdadero) . '&lt;br&gt;';<br>
          echo 'La variable&lt;em&gt;$falso&lt;/em&gt; es de tipo: ' . gettype($falso) . '&lt;br&gt;';<br>
        </code>
      </div>

      <!--  >>>>>>>>>>>>>>>>>>>> PHP -->
      <?php
      $nombre = 'César';
      $decimal = 18.99;
      $numero = 1;
      $verdadero = true;
      $falso = false;

      /* echo gettype($nombre);
      echo gettype($decimal);
      echo gettype($numero);
      echo gettype($verdadero);
      echo gettype($falso); */

      echo '
      <div class="cod_php">
      <h4>Resultado</h4>';

      echo 'La variable <em>$nombre</em> es de tipo: ' . gettype($nombre) . '<br>';
      echo 'La variable <em>$decimal</em> es de tipo: ' . gettype($decimal) . '<br>';
      echo 'La variable <em>$numero</em> es de tipo: ' . gettype($numero) . '<br>';
      echo 'La variable <em>$verdadero</em> es de tipo: ' . gettype($verdadero) . '<br>';
      echo 'La variable <em>$falso</em> es de tipo: ' . gettype($falso) . '<br>';


      ?>
    </div>


  </section>

  <footer>
    <button type="button" class="btn-return"><a href="../index.php"><i class="bi bi-caret-left-square-fill"></i> Atrás</a></button>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>

</html>