<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Condicionales - if else</title>
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
    <h2>Condicionales - IF ELSE</h2>

    <div class="container ejercicio">
      <p>Una condición</p>
      <div class="cod_html">
        <h4>Código</h4>

        $nombre = 'Austin'; <br>
        <br>
        if($nombre == 'Carlos'){ <br>
        echo 'El nombre es Carlos'; <br>
        } <br>
        else if($nombre== 'Ramiro'){ <br>
        echo 'El nombre es Ramiro'; <br>
        } <br>
        else if($nombre=='César'){ <br>
        echo 'El nombre es César'; <br>
        }else{ <br>
        echo 'Nombre no reconocido'; <br>
        } <br>

      </div>

      <!--  >>>>>>>>>>>>>>>>>>>> PHP -->
      <?php

      echo '
      <div class="cod_php">
      <h4>Resultado</h4>';

      $nombre = 'Austin';

      if ($nombre == 'Carlos') {
        echo 'El nombre es Carlos';
      } else if ($nombre == 'Ramiro') {
        echo 'El nombre es Ramiro';
      } else if ($nombre == 'César') {
        echo 'El nombre es César';
      } else {
        echo 'Nombre no reconocido';
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