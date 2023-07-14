<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Operador nave espacial</title>
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
    <h2>Operador nave espacial</h2>

    <div class="container ejercicio">
      <p><a href="https://www.php.net/manual/es/migration70.new-features.php">Operador nave espacial</a></p>
      <div class="cod_html">
        <h4>Código</h4>

        <p>Se utiliza para comparar</p>
        <code>
          Devuelve 0 si son IGUALES<br>
          Devuelve 1 si el valor de la izquierda es MAYOR que el de la derecha<br>
          Devuelve -1 si el valor de la izquierda es MENOR que el de la derecha<br>
        </code>

        <p>Ejempos</p>
        <code>
          - Números enteros<br>
          echo 1 <=> 1; // 0 <br>
            echo 1 <=> 2; // -1 <br>
              echo 2 <=> 1; // 1<br>
                <br>
                - Numeros decimales<br>
                echo 1.5 <=> 1.5; // 0<br>
                  echo 1.5 <=> 2.5; // -1<br>
                    echo 2.5 <=> 1.5; // 1<br>
                      <br>
                     - Cadenas de carácteres<br>
                      echo "a" <=> "a"; // 0<br>
                        echo "a" <=> "b"; // -1<br>
                          echo "b" <=> "a"; // 1<br>
        </code>
      </div>

      <!--  >>>>>>>>>>>>>>>>>>>> PHP -->
      <?php

      echo '
      <div class="cod_php">
      <h4>Resultado</h4>';


      echo '<p>Se utiliza para comparar</p>';

      echo '
      Devuelve  0 si son IGUALES<br>
      Devuelve  1 si el valor de la izquierda es MAYOR que el de la derecha<br>
      Devuelve -1 si el valor de la izquierda es MENOR que el de la derecha<br>
      ';

      /*   // Números enteros
      echo 1 <=> 1; // 0
      echo 1 <=> 2; // -1
      echo 2 <=> 1; // 1

      // Numeros decimales
      echo 1.5 <=> 1.5; // 0
      echo 1.5 <=> 2.5; // -1
      echo 2.5 <=> 1.5; // 1

      // Cadenas de caracteres
      echo "a" <=> "a"; // 0
      echo "a" <=> "b"; // -1
      echo "b" <=> "a"; // 1
 */


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