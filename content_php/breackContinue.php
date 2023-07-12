<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Breack / Continue</title>
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
    <h2>Breack / Continue</h2>

    <div class="container ejercicio">
      <h4>break</h4>
      <div class="cod_html">
        <h4>Código</h4>
        <code>
          $paises = array('México', 'España', 'Argentina', 'Brasil', 'Fracnia', 'Alemania', 'Italia'); <br>
          <br>

          foreach($paises as $pais){ <br>
          echo $pais . '&lt;br&gt;';<br>
          <br>
          if($pais==='Argentina'){ <br>
          break; <br>
          } <br>
          } <br>
        </code>
      </div>

      <!--  >>>>>>>>>>>>>>>>>>>> PHP -->
      <?php

      echo '
      <div class="cod_php">
      <h4>Resultado</h4>';


      $paises = array('México', 'España', 'Argentina', 'Brasil', 'Fracnia', 'Alemania', 'Italia');

      foreach ($paises as $pais) {
        echo $pais . '<br>';

        if ($pais === 'Argentina') {
          break;
        }
      }

      echo '</div>';
      ?>
    </div>


    <div class="container ejercicio">
      <h4>continue</h4>
      <div class="cod_html">
        <h4>Código</h4>
        <code>
          $paises = array('México', 'España', 'Argentina', 'Brasil', 'Francia', 'Alemania', 'Italia'); <br>
        </code>

        <p>Países europeos </p>
        <code>
          foreach ($paises as $pais) { <br>
          if ($pais === 'Argentina' or $pais === 'Brasil' or $pais === 'México' ) { <br>
          continue; <br>
          } <br>
          echo $pais . '&lt;br&gt;';<br>
          }

        </code>
      </div>

      <!--  >>>>>>>>>>>>>>>>>>>> PHP -->
      <?php

      echo '
      <div class="cod_php">
      <h4>Resultado</h4>';


      $paises = array('México', 'España', 'Argentina', 'Brasil', 'Francia', 'Alemania', 'Italia');

      echo '<p>Países europeos </p>';
      foreach ($paises as $pais) {
        if ($pais === 'Argentina' or $pais === 'Brasil' or $pais === 'México') {
          continue;
        }
        echo $pais . '<br>';
      }

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