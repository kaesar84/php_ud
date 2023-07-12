<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Operador ternario</title>
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
    <h2>Operador ternario</h2>

    <div class="container ejercicio">
      <div class="cod_html">
        <h4>Código</h4>

        <p>Ejemplo 1</p>
        <code>
          $edad; <br>
          // isset válida si la variable tiene asignado valor (1 para true) <br>
          $edad = (isset($edad)) ? <br> $edad : <br> 'No introducida' <br>; <br>
          echo 'Edad: ' . $edad;
        </code>
        <br>
        <p>Ejemplo 2</p>
        <code>
          $edad = 18; <br>
          echo 'Edad: ' . $edad; <br>
          <br>
          $respuesta = ($edad >= 18) ? <br> 'Tienes ' . $edad . ', Eres mayor de edad' : <br> 'Tienes ' . $edad . ', Eres menor de edad' <br>; <br>
          echo $respuesta;
        </code>
      </div>

      <!--  >>>>>>>>>>>>>>>>>>>> PHP -->
      <?php

      echo '
      <div class="cod_php">
      <h4>Resultado</h4>';

      echo '<p>Ejemplo 1</p>';
      $edad;
      // isset válida si la variable tiene asignado valor (1 para true)
      $edad = (isset($edad)) ? $edad : 'No introducida';

      echo 'Edad: ' .  $edad;

      echo '<br>';

      echo '<p>Ejemplo 2</p>';
      $edad = 18;
      echo 'Edad: ' .  $edad;
      echo '<br>';

      $respuesta = ($edad >= 18) ? 'Tienes ' . $edad . ', Eres mayor de edad' : 'Tienes ' . $edad . ', Eres menor de edad';
      echo $respuesta;

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