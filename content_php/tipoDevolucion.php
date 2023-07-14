<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Declaraciones de tipo devolución</title>
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
    <h2>Declaraciones de tipo devolución</h2>

    <div class="container ejercicio">
      <p><a href="https://www.php.net/manual/es/functions.returning-values.php">Declaraciones de tipo devolución</a></p>
      <div class="cod_html">
        <h4>Código</h4>

        <p>Se incorpora tipo de dato al parámetro para que el error indique tipo de dato erroneo</p>
        <code>
          function obtenerAltura(int $centimetros){ <br>
          return pow($centimetros, 2); <br>
          } <br>
        </code>

        <p>Aportamos como parámetro tipo de dato correcto</p>
        <code>
          obtenerAltura(180) <br>
        </code>

        <p>String convertible en número <br>
          declare(strict_types=1) >>> Forzar que sea estricto (no funciona conversión)</p>
        <code>
          obtenerAltura('192'); <br>
        </code>

        <p>Aportamos como parámetro un string para forzar el error</p>
        <code>
          obtenerAltura('Fuerza el error'); <br>
        </code>

      </div>

      <!--  >>>>>>>>>>>>>>>>>>>> PHP -->
      <?php

      echo '
      <div class="cod_php">
      <h4>Resultado</h4>';

      echo '<p>Permite especificar el tipo de dato del return</p>';

      function obtenerAltura($centimetros): int
      {
        return $centimetros;
      }

      echo '<p>Aportamos como parámetro tipo de dato correcto</p>';
      echo 'Resultado: ' . obtenerAltura(180) . '<br>';

      echo '<p>String convertible en número <br>
      declare(strict_types=1) >>> Forzar que sea estricto (no funciona conversión)</p>';
      echo 'Resultado: ' .  obtenerAltura('192');


      echo '<p>String para forzar el error, no puede convertirse</p>';
      /* echo areaCuadrado('Fuerza el error'); */
      echo "Fatal error: Uncaught Error: Call to undefined function areaCuadrado() in C:\xampp\htdocs\php_ud\content_php\tipoDevolucion.php:68 Stack trace: #0 {main} thrown in C:\xampp\htdocs\php_ud\content_php\tipoDevolucion.php on line 68";

      echo '</div>';
      ?>
    </div>

  </section>

  <footer>
    <button type="button" class="btn-return"><a href="../index.php"><i class="bi bi-caret-left-square-fill"></i> Atrás</a></button>
  </footer>





  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>

</html>