<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Operadores</title>
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
    <h2>Operadores</h2>

    <div class="container ejercicio">
      <h3>Aritméticos</h3>
      <div class="cod_html">
        <h4>Código</h4>
        <code>
          $numero1 = 5; <br>
          $numero2= 5; <br>
          <br>
          $suma = $numero1 + $numero2;<br>
          echo 'El resultado de '. $numero1 . ' + ' . $numero2 . ' = ' .$suma .'&lt;br&gt;';<br>
          <br>
          $resta = $numero1 - $numero2;<br>
          echo 'El resultado de '. $numero1 . ' - ' . $numero2 . ' = ' .$resta.'&lt;br&gt;';<br>
          <br>
          $multi = $numero1 * $numero2;<br>
          echo 'El resultado de '. $numero1 . ' * ' . $numero2 . ' = ' .$multi.'&lt;br&gt;';<br>
          <br>
          $divi = $numero1 / $numero2;<br>
          echo 'El resultado de '. $numero1 . ' / ' . $numero2 . ' = ' .$divi.'&lt;br&gt;';<br>
          <br>
          $modulo = $numero1 % $numero2;<br>
          echo 'El resultado de '. $numero1 . ' % ' . $numero2 . ' = ' .$modulo.'&lt;br&gt;';<br>

        </code>
      </div>

      <!--  >>>>>>>>>>>>>>>>>>>> PHP -->
      <?php

      echo '
      <div class="cod_php">
      <h4>Resultado</h4>';

      $numero1 = 5;
      $numero2 = 5;

      $suma = $numero1 + $numero2;
      echo 'El resultado de ' . $numero1 . ' + ' . $numero2 . ' = ' . $suma . '<br>';

      $resta = $numero1 - $numero2;
      echo 'El resultado de ' . $numero1 . ' - ' . $numero2 . ' = ' . $resta . '<br>';

      $multi = $numero1 * $numero2;
      echo 'El resultado de ' . $numero1 . ' * ' . $numero2 . ' = ' . $multi . '<br>';

      $divi = $numero1 / $numero2;
      echo 'El resultado de ' . $numero1 . ' / ' . $numero2 . ' = ' . $divi . '<br>';

      $modulo = $numero1 % $numero2;
      echo 'El resultado de ' . $numero1 . ' % ' . $numero2 . ' = ' . $modulo . '<br>';


      echo '</div>';
      ?>
    </div>


    <div class="container ejercicio">
      <h3>Asignación</h3>
      <div class="cod_html">
        <h4>Código</h4>
        $numero1 = 33;

        <p>=</p>
        $numero1 = 33;<br>

        <p>+=</p>

        $numero1 += 7; <br>
        echo '$numero1 += 7';<br>
        echo 'Resultado: ' . $numero1 . '&lt;br&gt;';<br>
        echo 'Equivalencia a >>> $numero1 = $numero1 + 7';<br>


        <p>-=</p>
        $numero1 -= 7;
        echo '$numero1 -= 7'; <br>
        echo 'Resultado: ' . $numero1 . '&lt;br&gt;';<br>
        echo 'Equivalencia a >>> $numero1 = $numero1 - 7';



        <p>*=</p>
        $numero1 *= 7;
        echo '$numero1 *= 7'; <br>
        echo 'Resultado: ' . $numero1 . '&lt;br&gt;';<br>
        echo 'Equivalencia a >>> $numero1 = $numero1 * 7';

        <p>/=</p>
        $numero1 /= 7; <br>
        echo '$numero1 /= 7'; <br>
        echo 'Resultado: ' . $numero1 . '&lt;br&gt;';<br>
        echo 'Equivalencia a >>> $numero1 = $numero1 / 7';


      </div>

      <!--  >>>>>>>>>>>>>>>>>>>> PHP -->
      <?php

      echo '
      <div class="cod_php">
      <h4>Resultado</h4>';

      $numero1 = 33;

      echo '<p>=</p>';
      echo '$numero1 = 33<br>';

      echo '<p>+=</p>';

      $numero1 += 7;
      echo '$numero1 += 7<br>';
      echo 'Resultado: ' . $numero1 . '<br>';
      echo 'Equivalencia a >>> $numero1 = $numero1 + 7';

      echo '<br>';

      echo '<p>-=</p>';
      $numero1 -= 7;
      echo '$numero1 -= 7<br>';
      echo 'Resultado: ' . $numero1 . '<br>';
      echo 'Equivalencia a >>> $numero1 = $numero1 - 7';

      echo '<br>';

      echo '<p>*=</p>';
      $numero1 *= 7;
      echo '$numero1 *= 7<br>';
      echo 'Resultado: ' . $numero1 . '<br>';
      echo 'Equivalencia a >>> $numero1 = $numero1 * 7';

      echo '<p>/=</p>';
      $numero1 /= 7;
      echo '$numero1 /= 7<br>';
      echo 'Resultado: ' . $numero1 . '<br>';
      echo 'Equivalencia a >>> $numero1 = $numero1 / 7';

      echo '</div>';

      ?>
    </div>

    <div class="container ejercicio">
      <h3>Lógicos</h3>
      <div class="cod_html">
        <h4>Código</h4>
        <code>
          $edad = 18;<br>
          $edadM = 17; <br>
          echo 'Edad: ' . $edad . '&lt;br&gt;';<br>
          echo 'Edad: ' . $edadM . '&lt;br&gt;';<br>

          echo 'EdadStr: ' . $edadStr . '&lt;br&gt;';<br>
        </code>

        <p>Condiciones >>> == >>> Igualdad simple</p>
        <code>
          if($edad==$edadStr){ <br>
          echo ' Igualdad simple , TRUE'; <br>
          } <br>
        </code>

        <p>Condiciones >>> === >>> Igualdad estricta - Mismo valor y mismo tipo</p>
        <code>
          if($edad===$edadStr){ <br>
          echo ' Igualdad simple, TRUE'; <br>
          }else{ <br>
          echo 'Igualdad estricta, FALSE'; <br>
          } <br>
        </code>

        <p>Condiciones >>> != >>> Aplica la diferencia</p>
        <code>
          if ($nombreM != 'César') { <br>
          echo $nombreM . ', No eres César'; <br>
          } <br>
        </code>

        <p>Condiciones >>> and - && >>> Deben cumplirse todas</p>
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

        <p>Condiciones >>> xor >>> Evalua que se cumpla una y solo una condición</p>
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

      $nombre = 'César';
      $edad = 18;

      $nombreM = 'Gerard';
      $edadM = 11;

      $edadStr = '18';

      echo 'Nombre: ' . $nombre . '<br>';
      echo 'Edad: ' . $edad . '<br>';
      echo '<br>';
      echo 'Nombre: ' . $nombreM . '<br>';
      echo 'Edad: ' . $edadM . '<br>';
      echo '<br>';
      echo 'Edad: ' . $edadStr . '<br>';


      echo '<p>Condiciones >>> ==  >>> Igualdad simple</p>';
      if ($edad == $edadStr) {
        echo ' Igualdad simple , TRUE';
      }

      echo '<p>Condiciones >>> ===  >>> Igualdad estricta - Mismo valor y mismo tipo</p>';
      if ($edad === $edadStr) {
        echo ' Igualdad simple, TRUE';
      } else {
        echo 'Igualdad estricta, FALSE';
      }





      echo '<p>Condiciones >>> !=  >>> Aplica la diferencia</p>';
      if ($nombreM != 'César') {
        echo  $nombreM . ', No eres César';
      }



      echo '<p>Condiciones >>> and - && >>> Deben cumplirse todas</p>';
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

      echo '<p>Condiciones >>> xor >>> Evalua que se cumpla una y solo una condición</p>';

      if ($edadM > 18 xor $nombreM == 'César' && $nombreM == 'Gerard') {
        echo  $nombreM . ', Acceso permitido';
      } else {
        echo   $nombreM . ', Acceso denegado';
      }

      echo '</div>';
      ?>
    </div>

    <div class="container ejercicio">
      <h3>Inremento - Decremento</h3>
      <div class="cod_html">
        <h4>Código</h4>

        <p>++$variable</p>
        <code>
          echo '$numero1 = ' . $numero1; <br>
          <br>
          ++$numero1; <br>
          echo 'Resultado: ' . $numero1 . '&lt;br&gt;';<br>
        </code>

        <p>$variable++</p>
        <code>
          echo '$numero1++; <br>
          echo 'Resultado: ' . $numero1++ . '&lt;br&gt;';<br>
        </code>

        <p>--$variable</p>
        <code>
          echo '$numero1 = ' . $numero1;
          --$numero1; <br>
          echo '--$numero1; <br>
          echo 'Resultado: ' . $numero1 . '&lt;br&gt;';<br>
        </code>

        <p>$variable--</p>
        <code>
          echo '$numero1 = ' . $numero1; <br>
          $numero1--; <br>
          echo '$numero1--; <br>
          echo 'Resultado: ' . $numero1 . '&lt;br&gt;';<br>
        </code>

      </div>

      <!--  >>>>>>>>>>>>>>>>>>>> PHP -->
      <?php

      echo '
      <div class="cod_php">
      <h4>Resultado</h4>';

      $numero1 = 33;

      echo '<p>++$variable</p>';
      echo '$numero1 = ' . $numero1;
      echo '<br>';
      ++$numero1;
      echo '++$numero1<br>';
      echo 'Resultado: ' . $numero1 . '<br>';
      echo 'Equivalencia a >>> $numero1 + 1 >>> se ejecuta previa a la lectura de la variable';

      echo '<p>$variable++</p>';
      echo '$numero1++<br>';
      echo 'Resultado: ' . $numero1++ . '<br>';
      echo 'Equivalencia a >>> $numero1 + 1 >>> se ejecuta tras la lectura de la variable';

      echo '<p>--$variable</p>';
      echo '$numero1 = ' . $numero1;
      echo '<br>';
      --$numero1;
      echo '--$numero1<br>';
      echo 'Resultado: ' . $numero1 . '<br>';
      echo 'Equivalencia a >>> $numero1 -1 >>> se ejecuta previa a la lectura de la variable';

      echo '<p>$variable--</p>';
      echo '$numero1 = ' . $numero1;
      echo '<br>';
      $numero1--;
      echo '$numero1--<br>';
      echo 'Resultado: ' . $numero1 . '<br>';
      echo 'Equivalencia a >>> $numero1 -1 >>> se ejecuta tras a la lectura de la variable';

      echo '<br>';

      echo '</div>';

      ?>
    </div>

    <div class="container ejercicio">
      <h3>De cadenas</h3>
      <div class="cod_html">
        <h4>Código</h4>
        <code>
          $palabra1 = 'Hola '; <br>
          $palabra2 = 'Guapo'; <br>
        </code>

        <p> . </p>
        <code>
          echo '$palabra1 = ' . $palabra1; <br>
          echo '&lt;br&gt;';<br>
          echo '$palabra2 = ' . $palabra2; <br>
          echo '&lt;br&gt;';<br>

          $palabra3 = $palabra1 . $palabra2; <br>
          echo '$palabra3 = ' . $palabra3; <br>
        </code>

        <p> .= </p>
        <code>
          $palabra4 = $palabra1 .= $palabra2; <br>
          <br>
          echo '$palabra4 = ' . $palabra4; <br>

          echo '$palabra1 = ' . $palabra1 . ' >>> Ha sido modificada al concatenar'; <br>

          echo '$palabra2 = ' . $palabra2;
        </code>

      </div>

      <!--  >>>>>>>>>>>>>>>>>>>> PHP -->
      <?php

      echo '
      <div class="cod_php">
      <h4>Resultado</h4>';

      $palabra1 = 'Hola ';
      $palabra2 = 'Guapo';

      echo '<p> . </p>';
      echo '$palabra1 = ' . $palabra1;
      echo '<br>';
      echo '$palabra2 = ' . $palabra2;
      echo '<br>';

      $palabra3 = $palabra1 . $palabra2;
      echo '$palabra3 = ' . $palabra3;
      echo '<br>';

      echo '<p> .= </p>';
      $palabra4 = $palabra1 .= $palabra2;
      echo '$palabra4 = ' . $palabra4;

      echo '<br>';
      echo '$palabra1 = ' . $palabra1 . ' >>> Ha sido modificada al concatenar';
      echo '<br>';
      echo '$palabra2 = ' . $palabra2;
      echo '<br>';

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