<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Funciones con parámetros - Ejemplos</title>
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
    <h2>Funciones con parámetros - Ejemplos</h2>

    <div class="container ejercicio">
      <h3>Ejemplo - Cálculo base Triángulo</h3>
      <div class="cod_html">
        <h4>Código</h4>

        <p>Declaración</p>
        <code>

          function saludo($nombre){ <br>
          echo 'Hola ' . $nombre; <br>
          };
        </code>
        <br>

        <p>Llamada</p>
        <code>
          saludo('César');
        </code>

      </div>

      <!--  >>>>>>>>>>>>>>>>>>>> PHP -->
      <?php

      echo '
      <div class="cod_php">
      <h4>Resultado</h4>';

      function calcular_area_Triangulo($base, $altura)
      {
        $area = ($base * $altura) / 2;
        return $area;
      }

      $areaCalculada = calcular_area_Triangulo(8, 2);

      echo 'El triángulo tiene un area de ' . $areaCalculada . ' metros cuadrados';

      echo '</div>';
      ?>
    </div>

    <div class="container ejercicio">
      <h3>Ejemplo - Cálculo base Poligonos</h3>
      <div class="cod_html">
        <h4>Código</h4>

        <p>Declaración</p>
        <code>

          function areaPoligonos ($tipo, $base, $altura){ <br>
          <br>
          if($tipo == 'Cuadrado'){ <br>
          $area = $base * $altura; <br>
          return $area; <br>
          } <br>
          else if($tipo == 'Triángulo'){ <br>
          $area = ($base * $altura)/2; <br>
          return $area; <br>
          } <br>
          else{ <br>
          echo 'Tipo de polígono erróneo'; <br>
          } <br>
          } <br>

        </code>
        <br>
        <p>Llamada</p>

        <code>
          $resultadoAreaPoligonos = areaPoligonos('Cuadrado',5,5); <br>
          echo 'El area del cuadrado es de ' . $resultadoAreaPoligonos . ' metros cuadrados'; <br>
          echo '&lt;br&gt;';<br>
          <br>
          $resultadoAreaPoligonos = areaPoligonos('Triángulo',9,5); <br>
          echo 'El area del triángulo es de ' . $resultadoAreaPoligonos . ' metros cuadrados'; <br>
          echo '&lt;br&gt;';<br>
          <br>
          $resultadoAreaPoligonos = areaPoligonos('Otro',9,5); <br>
          echo $resultadoAreaPoligonos;
        </code>

      </div>

      <!--  >>>>>>>>>>>>>>>>>>>> PHP -->
      <?php

      echo '
      <div class="cod_php">
      <h4>Resultado</h4>';

      function areaPoligonos($tipo, $base, $altura)
      {
        if ($tipo == 'Cuadrado') {
          $area = $base * $altura;
          return $area;
        } else if ($tipo == 'Triángulo') {
          $area = ($base * $altura) / 2;
          return $area;
        } else {
          echo 'Tipo de polígono erróneo';
        }
      }

      $resultadoAreaPoligonos = areaPoligonos('Cuadrado', 5, 5);
      echo 'El area del cuadrado es de ' .  $resultadoAreaPoligonos . ' metros cuadrados';
      echo '<br>';

      $resultadoAreaPoligonos = areaPoligonos('Triángulo', 9, 5);
      echo 'El area del triángulo es de ' .  $resultadoAreaPoligonos . ' metros cuadrados';
      echo '<br>';

      $resultadoAreaPoligonos = areaPoligonos('Otro', 9, 5);
      echo $resultadoAreaPoligonos;

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