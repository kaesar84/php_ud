<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bucle FOR</title>
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
    <h2>Bucle FOR</h2>

    <div class="container ejercicio">
      <div class="cod_html">
        <h4>Código</h4>
        <code>
          $numero = 7; <br>

          echo 'Número de repeticiones: ' . $numero; <br>
          <br>

          for ($i = 0; $i < $numero; $i++) { <br>
            echo 'Valor de $i: ' . $i . ' --- Numero de repetición ($i+1): ' . ($i + 1) . '&lt;br&gt;';<br> } <br>echo '>>> Repeticiones finalizadas' ;
        </code>

      </div>

      <!--  >>>>>>>>>>>>>>>>>>>> PHP -->
      <?php

      echo '
      <div class="cod_php">
      <h4>Resultado</h4>';

      $numero = 7;

      echo 'Número de repeticiones: ' . $numero;
      echo '<br>';
      echo '<br>';

      for ($i = 0; $i < $numero; $i++) {
        echo 'Valor de $i: ' . $i . ' --- Numero de repetición ($i+1): ' . ($i + 1)   . '<br>';
      }
      echo '<br>';
      echo '>>> Repeticiones finalizadas';





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