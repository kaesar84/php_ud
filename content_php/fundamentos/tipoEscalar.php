<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Declaraciones de tipo escalar</title>
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
    <h2>Declaraciones de tipo escalar</h2>

    <div class="container ejercicio">
      <p><a href="https://www.php.net/manual/es/migration70.new-features.php#:~:text=Las%20declaraciones%20de%20tipo%20escalar,%2C%20y%20booleanos%20(%20bool%20).">Declaraciones de tipo escalar</a></p>
      <div class="cod_html">
        <h4>Código</h4>

        <p>Se incorpora tipo de dato al parámetro para que el error indique tipo de dato erroneo</p>
        <code>
          function areaCuadrado(int $lado){ <br>
          return pow($lado, 2); <br>
          } <br>
        </code>

        <p>Aportamos como parámetro tipo de dato correcto</p>
        <code>
          areaCuadrado(5) <br>
        </code>


        <p>String convertible en número <br>
          declare(strict_types=1) >>> Forzar que sea estricto (no funciona conversión)</p>
        <code>
          areaCuadrado('3');
        </code>


        <p>Aportamos como parámetro un string para forzar el error</p>
        <code>
          areaCuadrado('Fuerza el error'); <br>
        </code>


      </div>

      <!--  >>>>>>>>>>>>>>>>>>>> PHP -->
      <?php

      echo '
      <div class="cod_php">
      <h4>Resultado</h4>';

      echo '<p>Se incorpora tipo de dato al parámetro para que el error indique tipo de dato erroneo</p>';

      function areaCuadrado(int $lado)
      {
        return pow($lado, 2);
      }

      echo '<p>Aportamos como parámetro tipo de dato correcto</p>';
      echo 'Resultado: ' . areaCuadrado(5) . '<br>';

      echo '<p>String convertible en número <br>
      declare(strict_types=1) >>> Forzar que sea estricto (no funciona conversión)</p>';
      echo 'Resultado: ' .  areaCuadrado('3');


      echo '<p>String para forzar el error, no puede convertirse</p>';
      /*  echo areaCuadrado('Fuerza el error'); */
      echo 'Fatal error: Uncaught TypeError: areaCuadrado(): Argument #1 ($lado) must be of type int, string given, called in C:\xampp\htdocs\php_ud\content_php\tipoEscalar.php on line 68 and defined in C:\xampp\htdocs\php_ud\content_php\tipoEscalar.php:54 Stack trace: #0 C:\xampp\htdocs\php_ud\content_php\tipoEscalar.php(68): areaCuadrado("Fuerza el error") #1 {main} thrown in C:\xampp\htdocs\php_ud\content_php\tipoEscalar.php on line 54';

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