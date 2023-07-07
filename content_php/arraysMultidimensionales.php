<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Arrays Multidimensionales</title>
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
    <h2>Arrays Multidimensionaes</h2>

    <div class="container ejercicio">
      <h3>Declaración, acceso y modificación de valores</h3>
      <div class="cod_html">
        <h4>Código</h4>
        <p>- Declaración</p>
        $posicionLiga = array(<br>
        array('FCB', 1),<br>
        array('RMC', 2),<br>
        array('ATM', 3),<br>
        array('RSC', 4) <br>
        );

        <p>- Acceso valores</p>
        echo '$posicionLiga [0][0]: ' . $posicionLiga[0][0]. .'&lt;br&gt;';<br>
        echo '$posicionLiga [0][1]: ' . $posicionLiga[0][1] . .'&lt;br&gt;';<br>
        <br>
        echo '$posicionLiga [1][0]: ' . $posicionLiga[1][0] . .'&lt;br&gt;';<br>
        echo '$posicionLiga [1][1]: ' . $posicionLiga[1][1] . .'&lt;br&gt;';<br>
        <br>
        echo '$posicionLiga [2][0]: ' . $posicionLiga[2][0] . .'&lt;br&gt;';<br>
        echo '$posicionLiga [2][1]: ' . $posicionLiga[2][1] . .'&lt;br&gt;';<br>
        <br>
        echo '$posicionLiga [3][0]: ' . $posicionLiga[3][0] . .'&lt;br&gt;';<br>
        echo '$posicionLiga [3][1]: ' . $posicionLiga[3][1] . .'&lt;br&gt;';<br>

        <p>- Modificación valores</p>
        $posicionLiga [1][0]='BET';<br>
        echo 'Nueva $posicionLiga [1][0]: ' . $posicionLiga[1][0] . '&lt;br&gt;';<br>

        <p>- Añadir valores</p>
        $posicionLiga[4][0]='VILL';<br>
        $posicionLiga[4][1]=4;<br>
        <br>
        echo ' añadida $posicionLiga [4][0]: ' . $posicionLiga[4][0] . '&lt;br&gt;';<br>
        echo ' añadida $posicionLiga [4][1]: ' . $posicionLiga[4][1] . '&lt;br&gt;';<br>

      </div>

      <!--  >>>>>>>>>>>>>>>>>>>> PHP -->
      <?php


      echo '
      <div class="cod_php">
      <h4>Resultado</h4>';

      $posicionLiga = array(
        array('FCB', 1),
        array('RMC', 2),
        array('ATM', 3),
        array('RSC', 4)
      );

      echo '<p>- Acceso valores</p>';
      echo '$posicionLiga [0][0]: ' . $posicionLiga[0][0] . '<br>';
      echo '$posicionLiga [0][1]:  ' . $posicionLiga[0][1] . '<br>';
      echo '<br>';
      echo '$posicionLiga [1][0]: ' . $posicionLiga[1][0] . '<br>';
      echo '$posicionLiga [1][1]: ' . $posicionLiga[1][1] . '<br>';
      echo '<br>';
      echo '$posicionLiga [2][0]: ' . $posicionLiga[2][0] . '<br>';
      echo '$posicionLiga [2][1]: ' . $posicionLiga[2][1] . '<br>';
      echo '<br>';
      echo '$posicionLiga [3][0]: ' . $posicionLiga[3][0] . '<br>';
      echo '$posicionLiga [3][1]: ' . $posicionLiga[3][1] . '<br>';

      echo '<p>- Modificación valores</p>';
      $posicionLiga[1][0] = 'BET';
      echo 'Nueva $posicionLiga [1][0]: ' . $posicionLiga[1][0] . '<br>';

      echo '<p>- Añadir valores</p>';
      $posicionLiga[4][0] = 'VILL';
      $posicionLiga[4][1] = 4;
      echo ' añadida $posicionLiga [4][0]: ' . $posicionLiga[4][0] . '<br>';
      echo ' añadida $posicionLiga [4][1]: ' . $posicionLiga[4][1] . '<br>';

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