<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Condicionales - if</title>
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
    <h2>Condicionales - IF</h2>

    <div class="container ejercicio">
      <p>Una condición</p>
      <div class="cod_html">
        <h4>Código</h4>
        <code>
          $edad = 18;<br>
          $edadM = 17; <br>
          echo 'Edad: ' . $edad . '&lt;br&gt;';<br>
          echo 'Edad: ' . $edadM . '&lt;br&gt;';<br>
        </code>

        <p>- Estructura condicional if</p>
        <code>
          if ($edad >= 18) { <br>
          echo 'Eres mayor de edad'; <br>
          } else { <br>
          echo 'Eres menor de edad'; <br>
          }
          <br><br>
          if ($edadM >= 18) { <br>
          echo 'Eres mayor de edad'; <br>
          } else { <br>
          echo 'Eres menor de edad'; <br>
          }

          <br>
        </code>

      </div>

      <!--  >>>>>>>>>>>>>>>>>>>> PHP -->
      <?php

      echo '
      <div class="cod_php">
      <h4>Resultado</h4>';

      $edad = 18;
      echo 'Edad: ' . $edad . '<br>';

      echo 'Resultado del if<br>';
      if ($edad >= 18) {
        echo 'Eres mayor de edad';
      } else {
        echo 'Eres menor de edad';
      }

      $edadM = 17;
      echo '<br><br>Edad: ' . $edadM . '<br>';
      echo 'Resultado del if<br>';
      if ($edadM >= 18) {
        echo 'Eres mayor de M$edadM';
      } else {
        echo 'Eres menor de edad';
      }
      echo '</div>';
      ?>
    </div>


    <div class="container ejercicio">
      <p>Más de una condición</p>
      <div class="cod_html">
        <h4>Código</h4>
        <code>
          $edad = 18;<br>
          $edadM = 17; <br>
          echo 'Edad: ' . $edad . '&lt;br&gt;';<br>
          echo 'Edad: ' . $edadM . '&lt;br&gt;';<br>
        </code>
        <p>Condiciones >>> && >>> Deben cumplirse todas</p>
        <code>
          if ($edad >= 18 && $nombre == 'César') { <br>
          echo $nombre . ', Eres mayor de edad'&lt;br&gt;Acceso permitido.'; <br>
          } else { <br>
          echo $nombre . ', Eres menor de edad'&lt;br&gt;Acceso denegado'; <br>
          } <br>
        </code>

        <p>Condiciones >>> or - || >>> Debe cumplirse mínimo 1 condición</p>
        <code>
          if ($edadM >= 18 or $nombreM == 'Gerard') { <br>
          echo $nombreM. ', Acceso permitido'; <br>
          } else { <br>
          echo $nombreM. ', Acceso denegado';<br>
          } <br>
        </code>

        <p>Condiciones >>> xor - >>> Evalua que se cumpla una y solo una condición</p>
        <code>
          if ($edadM > 18 XOR $nombreM == 'César' && $nombreM=='Gerard') { <br>
          echo $nombreM . ', Acceso permitido'; <br>
          } else { <br>
          echo $nombreM . ', Acceso denegado'; <br>
          } <br>
        </code>
      </div>

      <!--  >>>>>>>>>>>>>>>>>>>> PHP -->
      <?php

      echo '
      <div class="cod_php">
      <h4>Resultado</h4>';

      echo '<p>Condiciones >>> && >>> Deben cumplirse todas</p>';
      $nombre = 'César';
      $edad = 18;

      $nombreM = 'Gerard';
      $edadM = 11;

      echo 'Nombre: ' . $nombre . '<br>';
      echo 'Edad: ' . $edad . '<br>';


      if ($edad >= 18 && $nombre == 'César') {
        echo $nombre . ', Eres mayor de edad<br>Acceso permitido.';
      } else {
        echo  $nombre . ', Eres menor de edad<br>Acceso denegado';
      }

      echo '<br>';
      echo '<p>Condiciones >>> or - || >>> Debe cumplirse mínimo 1 condición</p>';
      echo 'Nombre: ' . $nombreM . '<br>';
      echo 'Edad: ' . $edadM . '<br>';
      echo '<br>';

      if ($edadM >= 18 or $nombreM == 'Gerard') { // puede ser con ||
        echo  $nombreM . ', Acceso permitido';
      } else {
        echo   $nombreM . ', Acceso denegado';
      }

      echo '<p>Condiciones >>> xor - >>> Evalua que se cumpla una y solo una condición</p>';

      if ($edadM > 18 xor $nombreM == 'César' && $nombreM == 'Gerard') {
        echo  $nombreM . ', Acceso permitido';
      } else {
        echo   $nombreM . ', Acceso denegado';
      }

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