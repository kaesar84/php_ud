<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Switch</title>
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
    <h2>Switch</h2>

    <div class="container ejercicio">
      <div class="cod_html">
        <h4>Código</h4>

        <code>
          $dia = 5;<br>
          <br>
          switch ($dia) {<br>
          <br>
          case 1: <br>
          echo 'Lunes'; <br>
          break;<br>
          <br>
          case 2:<br>
          echo 'Martes';<br>
          break;<br>
          <br>
          case 3:<br>
          echo 'Miércoles';<br>
          break;<br>
          <br>
          case 4:<br>
          echo 'Jueves';<br>
          break;<br>
          <br>
          case 5:<br>
          echo 'Viernes';<br>
          break;<br>
          <br>
          case 6:<br>
          echo 'Sábado';<br>
          break;<br>
          <br>
          case 7:<br>
          echo 'Domingo';
          break;<br>
          <br>
          default: <br>
          echo 'Día incorrecto'; <br>
          }
        </code>
      </div>

      <!--  >>>>>>>>>>>>>>>>>>>> PHP -->
      <?php

      echo '
      <div class="cod_php">
      <h4>Resultado</h4>';

      $dia = 5;

      echo '$dia = ' . $dia . '<br>';
      switch ($dia) {
        case 1:
          echo 'Lunes';
          break;
        case 2:
          echo 'Martes';
          break;
        case 3:
          echo 'Miércoles';
          break;
        case 4:
          echo 'Jueves';
          break;
        case 5:
          echo 'Viernes';
          break;
        case 6:
          echo 'Sábado';
          break;
        case 7:
          echo 'Domingo';
          break;
        default:
          echo 'Día incorrecto';
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