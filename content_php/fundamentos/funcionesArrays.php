<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Funciones útiles para Arrays</title>
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
    <h2>Funciones útiles para Arrays</h2>

    <div class="container ejercicio">
      <p><a href="https://www.php.net/manual/es/ref.array.php">Funciones de arrays</a></p>
      <div class="cod_html">
        <h4>Código</h4>

        <p>extract() - divide los elementos de un array asociativo en variables</p>
        <code>
          $usuario = array('nombre' => 'César', 'apellido' => 'Fernández', 'pais' => 'España', 'edad' => 39); <br>
          <br>
          echo 'Elemento del array - ' . $usuario['nombre'] . '&lt;br&gt;';<br>
          echo 'Elemento del array - ' . $usuario['apellido'] . '&lt;br&gt;';<br>
          echo 'Elemento del array - ' . $usuario['pais'] . '&lt;br&gt;';<br>
          echo 'Elemento del array - ' . $usuario['edad'] . '&lt;br&gt;';<br>
          echo '&lt;br&gt;';<br>
          extract($usuario); <br>
          <br>
          echo 'Nuevas variables';<br>
          <br>
          echo 'Variable $nombre - ' . ($nombre) . '&lt;br&gt;';<br>
          echo 'Variable $apellido - ' . ($apellido) . '&lt;br&gt;';<br>
          echo 'Variable $pais - ' . ($pais) . '&lt;br&gt;';<br>
          echo 'Variable $edad - ' . ($edad) . '&lt;br&gt;';<br>
        </code>

        <p>array_pop() - Extrae el último elemento</p>
        <code>
          $semana = array('Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado', 'Domingo'); <br>
          <br>
          foreach ($semana as $dia) { <br>
          echo $dia . '&lt;br&gt;';<br>
          } <br>
          <br>
          - Extraído última a nueva variable, no aparece en el array original <br>
          $domingo = array_pop($semana); <br>
          <br>
          foreach ($semana as $dia) { <br>
          echo $dia . '&lt;br&gt;';<br>
          } <br>
          <br>
          echo ' - Nueva variable con el contenido tras el pop'; <br>
          <br>
          echo $domingo . '&lt;br&gt;';<br>
        </code>

        <p>join() - Separa los elementos aplicando el caracter indicado entre ellos</p>
        <code>
          $semana = array('Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado', 'Domingo'); <br>
          echo join(' * ', $semana); <br>
        </code>

        <p>count() - Número de elementos</p>
        <code>
          echo count($semana) . '<br>';
        </code>

        <p>sort() - Ordena de manera ascendente</p>
        <code>
          sort($semana);<br>
          echo join(' < ', $semana);<br>
        </code>

        <p>rsort() - Ordena de manera descendente</p>
        <code>
          rsort($semana); <br>
          echo join('> ', $semana);<br>
        </code>

        <p>array_reverse() - Invertir los datos de un array</p>
        <code>
          $semana = array('Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado', 'Domingo');
          echo join(' - ', $semana); <br>

          <br>

          $semanaReverse = array_reverse($semana); <br>
          echo join(' - ', $semanaReverse); <br>
        </code>

      </div>

      <!--  >>>>>>>>>>>>>>>>>>>> PHP -->
      <?php

      echo '
      <div class="cod_php">
      <h4>Resultado</h4>';

      echo '<p>extract() - divide los elementos de un array asociativo en variables</p>';

      $usuario = array('nombre' => 'César', 'apellido' => 'Fernández', 'pais' => 'España', 'edad' => 39);

      echo 'Elemento del array - ' . $usuario['nombre'] . '<br>';
      echo 'Elemento del array - ' . $usuario['apellido'] . '<br>';
      echo 'Elemento del array - ' . $usuario['pais'] . '<br>';
      echo 'Elemento del array - ' . $usuario['edad'] . '<br>';
      echo '<br>';
      extract($usuario);
      echo 'Nuevas variables';
      echo '<br>';
      echo 'Variable $nombre - ' . ($nombre) . '<br>';
      echo 'Variable $apellido - ' . ($apellido) . '<br>';
      echo 'Variable $pais - ' . ($pais) . '<br>';
      echo 'Variable $edad - ' . ($edad) . '<br>';


      echo '<p>array_pop() - Extrae el último elemento</p>';

      $semana = array('Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado', 'Domingo');

      foreach ($semana as $dia) {
        echo $dia . '<br>';
      }
      echo '<br>';
      $domingo = array_pop($semana);
      echo ' - Extraído última a nueva variable, no aparece en el array original';
      echo '<br>';
      foreach ($semana as $dia) {
        echo $dia . '<br>';
      }
      echo '<br>';
      echo ' - Nueva variable con el contenido tras el pop';
      echo '<br>';
      echo $domingo . '<br>';


      echo '<p>join() - Separa los elementos aplicando el caracter indicado entre ellos</p>';
      $semana = array('Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado', 'Domingo');
      echo join(' * ', $semana);

      echo '<p>count() - Número de elementos</p>';
      echo count($semana) . '<br>';

      echo '<p>sort() - Ordena de manera ascendente</p>';
      sort($semana);
      echo join(' < ', $semana);

      echo '<p>rsort() - Ordena de manera descendente</p>';
      rsort($semana);
      echo join(' > ', $semana);

      echo '<p>array_reverse() - Invertir los datos de un array</p>';

      $semana = array('Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado', 'Domingo');
      echo join(' - ', $semana);

      echo '<br>';

      $semanaReverse = array_reverse($semana);
      echo join(' - ', $semanaReverse);

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