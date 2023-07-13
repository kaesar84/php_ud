<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Funciones útiles para cadenas de texto</title>
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
    <h2>Funciones útiles para cadenas de texto</h2>
    

    <div class="container ejercicio">
    <p><a href="https://www.php.net/manual/es/ref.strings.php">Funciones de strings</a></p>
      <div class="cod_html">
        <h4>Código</h4>

        <p>htmlspecialchars() - Aplica caracteres especiales compatible con HTML</p>
        <code>
          $texto = ' <> & ""'; <br>
            echo htmlspecialchars($texto); <br>
        </code>

        <p>trim() - Elimina espacios al principio y al final</p>
        <code>
          $palabraEspacios = ' Hola que tal estas '; <br>
          echo trim($palabraEspacios); <br>
        </code>

        <p>strlen() - Proporciona el tamaño de un string, espacios incluídos</p>
        <code>
          $stringLongitud = 'Barcelona'; <br>
          echo strlen($stringLongitud); <br>
        </code>

        <p>substr() - Separa strings (param1 inicio-no incluido, param2 núm caracteres)</p>
        <code>
          $stringSub = 'Barcelona'; <br>
          $strBar = substr($stringSub, 0, 3); <br>
          $strCel = substr($stringSub, 3, 3); <br>
          $strOna = substr($stringSub, 6, 3); <br>
          echo $strBar; <br>
          echo '&lt;br&gt;';<br>
          echo $strCel; <br>
          echo '&lt;br&gt;';<br>
          echo $strOna; <br>
        </code>

        <p>strtoupper() - Pasa a mayúsculas</p>
        <code>
          $strMin = 'minuscula'; <br>
          echo strtoupper($strMin); <br>
        </code>

        <p>strtolower() - Pasa a minúsculas</p>
        <code>
          $strMay = 'MAYUSCULA'; <br>
          echo strtolower($strMay); <br>
        </code>

        <p>strpos() - Muestra en qué posición se encuentra un caracter (inicio en 0)</p>
        <code>
          $sterPos = "Murcielago"; <br>
          echo strpos($sterPos, 'a'); <br>
        </code>


      </div>

      <!--  >>>>>>>>>>>>>>>>>>>> PHP -->
      <?php

      echo '
      <div class="cod_php">
      <h4>Resultado</h4>';

      echo '<p>htmlspecialchars() - Aplica caracteres especiales compatible con HTML</p>';
      $texto = ' < > & ""';
      echo htmlspecialchars($texto);


      echo '<p>trim() - Elimina espacios al principio y al final</p>';
      $palabraEspacios = '    Hola que tal estas       ';
      echo trim($palabraEspacios);


      echo '<p>strlen() - Proporciona el tamaño de un string, espacios incluídos</p>';
      $stringLongitud = 'Barcelona';
      echo strlen($stringLongitud);


      echo '<p>substr() - Separa strings (param1 inicio-no incluido, param2 núm caracteres)</p>';
      $stringSub = 'Barcelona';
      $strBar = substr($stringSub, 0, 3);
      $strCel = substr($stringSub, 3, 3);
      $strOna = substr($stringSub, 6, 3);
      echo $strBar;
      echo '<br>';
      echo $strCel;
      echo '<br>';
      echo $strOna;

      echo '<p>strtoupper() - Pasa a mayúsculas</p>';
      $strMin = 'minuscula';
      echo strtoupper($strMin);

      echo '<p>strtolower() - Pasa a minúsculas</p>';
      $strMay = 'MAYUSCULA';
      echo strtolower($strMay);

      echo '<p>strpos() - Muestra en qué posición se encuentra un caracter (inicio en 0)</p>';
      $sterPos = "Murcielago";
      echo strpos($sterPos, 'a');



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