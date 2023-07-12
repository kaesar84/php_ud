<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Arrays Indexados</title>
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
    <h2>Arrays Indexados</h2>

    <div class="container ejercicio">
      <h3>Declaración, acceso y modificación de valores</h3>
      <div class="cod_html">
        <h4>Código</h4>
        <p>- Declaración</p>
        <code>
          $semana = array('Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado', 'Domingo');<br>
          $semana2 = ['Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado', 'Domingo'];<br>
        </code>

        <p>- Acceso valores</p>
        <code>
          echo 'Posición [0] - '. $semana[0] .'&lt;br&gt;';<br>
          echo 'Posición [1] - '. $semana[1] .'&lt;br&gt;';<br>
          echo 'Posición [2] - '. $semana[2] .'&lt;br&gt;';<br>
          echo 'Posición [3] - '. $semana[3] .'&lt;br&gt;';<br>
          echo 'Posición [4] - '. $semana[4] .'&lt;br&gt;';<br>
          echo 'Posición [5] - '. $semana[5] .'&lt;br&gt;';<br>
          echo 'Posición [6] - '. $semana[6] .'&lt;br&gt;';<br>
        </code>

        <p>- Acceso valores</p>
        <code>
          echo 'Posición [0] - '. $semana[0] .'&lt;br&gt;';<br>
        </code>

        <p>- Modificación valores</p>
        <code>
          $semana[0] = '💀';<br>
          echo 'Posición [0] - ' . $semana[0] . '&lt;br&gt;';<br>
        </code>
        <p>- Añadir valores</p>
        <code>
          $semana[7] = '🥳';<br>
          echo 'Posición [7] - ' . $semana[7] . '&lt;br&gt;';<br>
        </code>
      </div>

      <!--  >>>>>>>>>>>>>>>>>>>> PHP -->
      <?php
      $semana = array('Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado', 'Domingo');

      echo '
      <div class="cod_php">
      <h4>Resultado</h4>';

      echo ' <p>- Acceso valores</p>';
      echo 'Posición [0] - ' . $semana[0] . '<br>';
      echo 'Posición [1] - ' . $semana[1] . '<br>';
      echo 'Posición [2] - ' . $semana[2] . '<br>';
      echo 'Posición [3] - ' . $semana[3] . '<br>';
      echo 'Posición [4] - ' . $semana[4] . '<br>';
      echo 'Posición [5] - ' . $semana[5] . '<br>';
      echo 'Posición [6] - ' . $semana[6] . '<br>';

      echo ' <p>- Modificación valores</p>';
      $semana[0] = '💀';
      echo 'Posición [0] - ' . $semana[0] . '<br>';


      echo ' <p>- Añadir valores</p>';
      $semana[7] = '🥳';
      echo 'Posición [7] - ' . $semana[7] . '<br></div>';

      ?>
    </div>







  </section>


  <footer>
    <button type="button" class="btn-return"><a href="../index.php"><i class="bi bi-caret-left-square-fill"></i> Atrás</a></button>
  </footer>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>

</html>