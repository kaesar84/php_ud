<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Función var_dump()</title>
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
    <h2>var_dump()</h2>

    <div class="container ejercicio">
      <p>Proporciona propiedades de variables</p>
      <div class="cod_html">
        <h4>Código</h4>

        <code>
          $texto = 'Carlos';<br>
          $numero = 10; <br>
          $numero2 ='5'; <br>
          $array = array('León', 'Perro', 'Gato', 'Perezoso'); <br>
          $arrayAsociativo = array('nombre'=>'César', 'apellidos' => 'Fernández Sánchez', 'edad' => 39); <br>
          $booleano = true; <br>

          <br>

          var_dump($texto); <br>
          echo '&lt;br&gt;';<br>
          var_dump($numero); <br>
          echo '&lt;br&gt;';<br>
          var_dump($numero2); <br>
          echo '&lt;br&gt;';<br>
          echo ' '&lt;pre&gt;';<br>
          var_dump($array); <br>
          echo ' '&lt;/pre&gt;';<br>
          echo '<br>';
          echo ' '&lt;pre&gt;';<br>

          var_dump($arrayAsociativo); <br>
          echo ' '&lt;/pre&gt;';<br>
          echo '&lt;br&gt;';<br>
          var_dump($booleano);

        </code>

      </div>

      <!--  >>>>>>>>>>>>>>>>>>>> PHP -->
      <?php

      echo '
      <div class="cod_php">
      <h4>Resultado</h4>';

      $texto = 'Carlos';
      $numero = 10;
      $numero2 = '5';
      $array = array('León', 'Perro', 'Gato', 'Perezoso');
      $arrayAsociativo = array('nombre' => 'César', 'apellidos' => 'Fernández Sánchez', 'edad' => 39);
      $booleano = true;


      var_dump($texto);
      echo '<br><br>';
      var_dump($numero);
      echo '<br><br>';
      var_dump($numero2);
      echo '<br><br>';
      echo '<pre>';
      var_dump($array);
      echo '</pre>';
      echo '<br>';
      echo '<pre>';
      var_dump($arrayAsociativo);
      echo '</pre>';
      echo '<br><br>';
      var_dump($booleano);






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