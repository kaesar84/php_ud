<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Funciones con parámetros</title>
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
    <h2>Funciones con parámetros</h2>

    <div class="container ejercicio">
      <h3>Ejemplo 1</h3>
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

      function saludo($nombre)
      {
        echo 'Hola ' . $nombre;
      };

      echo '<p>Llamada</p>';
      saludo('César');


      echo '</div>';
      ?>
    </div>

    <div class="container ejercicio">
      <h3>Ejemplo 2</h3>
      <div class="cod_html">
        <h4>Código</h4>

        <p>Declaración</p>
        <code>

          function suma($numero1, $numero2) <br>
          { <br>
          $resultado = $numero1 + $numero2; <br>
          return $resultado; <br>
          }; <br>
        </code>
        <br>

        <p>Declaración de variable y llamada</p>
        <code>
          $resultadoSuma = suma(5, 8); <br>
          echo 'El resultado es ' . $resultadoSuma; <br>

        </code>

      </div>

      <!--  >>>>>>>>>>>>>>>>>>>> PHP -->
      <?php

      echo '
      <div class="cod_php">
      <h4>Resultado</h4>';

      echo '<p>Declaración de variable y llamada</p>';
      function suma($numero1, $numero2)
      {
        $resultado = $numero1 + $numero2;
        return $resultado;
      };

      $resultadoSuma = suma(5, 8);
      echo 'El resultado es ' . $resultadoSuma;

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