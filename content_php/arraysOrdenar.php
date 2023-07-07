<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Ordenar Arrays</title>
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
    <h2>Ordenar un array</h2>

    <div class="container ejercicio">
      <p>Modifican el array original</p>
      <div class="cod_html">
        <h4>Código</h4>
        <p>- Declaración</p>
        $meses = array(<br>
        'Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio',<br>
        'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'<br>
        );<br>

        <p>- Orden según índice inicial</p>
        foreach ($meses as $mes) {<br>
        echo $mes . '&lt;br&gt;';<br>
        };

        <p>- sort() >>> Ordenar ascendente</p>
        sort($meses);<br>
        foreach ($meses as $mes) {<br>
        echo $mes . '&lt;br&gt;';<br>
        };

        <p>- rsort() >>> Ordenar descendente</p>
        rsort($meses);<br>
        foreach ($meses as $mes) {<br>
        echo $mes . '&lt;br&gt;';<br>
        };


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

      echo '<p>- Orden según índice inicial</p>';
      foreach ($meses as $mes) {
        echo $mes . '<br>';
      };

      echo '<p>- sort() >>> Ordenar ascendente</p>';
      sort($meses);
      foreach ($meses as $mes) {
        echo $mes . '<br>';
      };

      echo '<p>- rsort() >>> Ordenar descendente</p>';
      rsort($meses);
      foreach ($meses as $mes) {
        echo $mes . '<br>';
      };

      echo '</div>';
      ?>
    </div>

    <div class="container ejercicio">
      <p>Sin modificar el array original, nueva variable</p>
      <div class="cod_html">
        <h4>Código</h4>
        <p>- Nuevo Array a partir del original</p>

        $numeros = array(<br>
        37, 12, 8, 99, 58, 75, 5, 6, 88, 69 <br>
        ); <br>

        $numerosOrdenados = $numeros;<br>

        <p>-Aplicamos métodos sobre copia</p>
        sort($numerosOrdenados);<br>
        <br>
        echo '$numeros >>>';<br>
        foreach ($numeros as $numero) {<br>
        echo $numero . ' ';<br>
        };<br>

        <br>
        echo '$numerosOrdenados >>>';<br>
        foreach ($numerosOrdenados as $numeroOrdenado) {<br>
        echo $numeroOrdenado . ' ';<br>
        };<br>

      </div>

      <!--  >>>>>>>>>>>>>>>>>>>> PHP -->
      <?php
      echo '
      <div class="cod_php">
      <h4>Resultado</h4>';


      echo '<p>- Nuevo Array a partir del original</p>';

      $numeros = array(
        37, 12, 8, 99, 58, 75, 5, 6, 88, 69
      );

      $numerosOrdenados = $numeros;


      echo '$numeros >>>';
      foreach ($numeros as $numero) {
        echo $numero . '  ';
      };
      echo '<br>';
      echo '$numerosOrdenados >>>';
      foreach ($numerosOrdenados as $numeroOrdenado) {
        echo $numeroOrdenado . '  ';
      };


      echo '<p>-Aplicamos métodos sobre copia</p>';

      echo '$numeros >>>';
      foreach ($numeros as $numero) {
        echo $numero . '  ';
      };
      echo '<br>';
      sort($numerosOrdenados);
      echo '$numerosOrdenados >>>';
      foreach ($numerosOrdenados as $numeroOrdenado) {
        echo $numeroOrdenado . '  ';
      };




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