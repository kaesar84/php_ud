<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Include - Require</title>
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
    <h2>include - require</h2>


    <div class="container ejercicio">
      <p>Aportan código de archivos externos.</p>
      <li>include paraliza en caso de error.</li>
      <li>require paraliza en caso de error. No ejecuta el resto del código</li> <br>
      <p>Se puede utilizar include_once o require_once para realizar la conexión una sola vez.</p>
      <br>

      <div class="cod_html">
        <h4>Código</h4>

        <p>include</p>
        <code>
          include 'include-requireLogica.php'; <br>
        </code>

        <p>require</p>
        <code>
          require 'include-requireLogica.php'; <br>
        </code>

        <p>- Contenido documento include/require</p>
        &lt;?php <br>
        function suma($v1,$v2){ <br>
        $resultado = $v1+$v2; <br>
        return $resultado; <br>
        } <br>
        ?> <br>

        <p>- Llamada a la función de archivo externo</p>
        $resultado = suma(5,5); <br>
        echo 'El resultado es ' . $resultado; <br>

        </code>

      </div>

      <!--  >>>>>>>>>>>>>>>>>>>> PHP -->
      <?php

      echo '
      <div class="cod_php">
      <h4>Resultado</h4>';

      echo '<p>Llamada a la función de archivo externo</p>';
      include 'include-requireLogica.php';

      $resultado = suma(5, 5);
      echo 'El resultado es ' . $resultado;


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