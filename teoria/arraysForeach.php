<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Recorrer Arrays - For each</title>
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
    <h2>Recorrer un array - Foreach</h2>

    <div class="container ejercicio">
      <h3>Declaración, acceso y modificación de valores</h3>
      <div class="cod_html">
        <h4>Código</h4>
        <p>- Declaración</p>
        $meses = array(<br>
        'Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio',<br>
        'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'<br>
      );<br>
       
        <p>- count() >>> Contar valores de un array </p>
        echo 'Total de valores de $meses: '. count($meses);<br>

        <p>- Último valor </p>
        echo 'Total de valores de $meses: '. $meses[count($meses)-1];<br>



      

       <!--  <p>- Añadir valores</p>
        $posicionLiga[4][0]='VILL';<br>
        $posicionLiga[4][1]=4;<br>
        <br>
        echo ' añadida $posicionLiga [4][0]: ' . $posicionLiga[4][0] . '&lt;br&gt;';<br>
        echo ' añadida $posicionLiga [4][1]: ' . $posicionLiga[4][1] . '&lt;br&gt;';<br> -->

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

      echo '<p>- count() >>> Contar valores de un array </p>';
      echo 'Total de valores de $meses: '. count($meses);

      echo '<p>- Último valor </p>';
      echo 'Total de valores de $meses: '. $meses[count($meses)-1];


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