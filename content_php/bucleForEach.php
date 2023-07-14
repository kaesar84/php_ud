<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bucle FOR EACH</title>
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
    <h2>Bucle FOR EACH</h2>

    <div class="container ejercicio">
      <h3>Indexado</h3>
      <div class="cod_html">
        <h4>Código</h4>

        <code>
          $meses = array(<br>
          'Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio',<br>
          'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'<br>
          );<br>

          <br>

          echo '&lt;ul&gt;';<br>
          foreach ($meses as $mes) { <br>
          echo '&lt;/li&gt;' . $mes . '&lt;/li&gt;';<br>;
          } <br>
          echo '&lt;/ul&gt;';<br>
        </code>
      </div>

      <!--  >>>>>>>>>>>>>>>>>>>> PHP -->
      <?php

      echo '
      <div class="cod_php">
      <h4>Resultado</h4>';

      $meses = array(
        'Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio',
        'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'
      );

      echo '<ul>';
      foreach ($meses as $mes) {
        echo '<li>' . $mes . '</li>';
      }
      echo '</ul>';

      echo '</div>';
      ?>
    </div>

    <div class="container ejercicio">
      <h3>Asociativo</h3>
      <div class="cod_html">
        <h4>Código</h4>

        <code>
          $persona = array('nombre' => 'César', 'apellido1' => 'Fernández', 'apellido2' => 'Sánchez', 'télefono' => 635450972, 'edad' => 39, 'ciudad' => 'Barcelona');<br>
          <br>
          echo '&lt;ul&gt;';<br>
          foreach ($persona as $dato => $valor) { <br>
          echo '&lt;/li&gt; Dato: ' . $dato . ' >>> Valor: ' . $valor . '&lt;/li&gt;';<br>;
          } <br>
          echo '&lt;/ul&gt;';<br>
        </code>
      </div>

      <!--  >>>>>>>>>>>>>>>>>>>> PHP -->
      <?php

      echo '
      <div class="cod_php">
      <h4>Resultado</h4>';

      $persona = array('nombre' => 'César', 'apellido1' => 'Fernández', 'apellido2' => 'Sánchez', 'télefono' => 635450972, 'edad' => 39, 'ciudad' => 'Barcelona');

      echo '<ul>';
      foreach ($persona as $dato => $valor) {
        echo '<li> Dato: ' . $dato . ' >>> Valor: ' . $valor . '</li>';
      }
      echo '</ul>';

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