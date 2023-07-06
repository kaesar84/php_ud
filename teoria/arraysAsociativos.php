<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Arrays</title>
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
    <h2>Arrays Asociativos</h2>

   
    <div class="container ejercicio">
       <h3>Declaración, acceso y modificación de valores</h3>
      <div class="cod_html">
        <h4>Código</h4>
        <p>- Declaración</p>
        $persona = array('nombre' => 'César', 'apellido1' => 'Fernández', 'apellido2' => 'Sánchez', 'télefono' => 635450972, 'edad' => 39, 'ciudad' => 'Barcelona');<br><br>
        $persona2 = ['nombre' => 'Lucas', 'apellido1' => 'Fernández', 'apellido2' => 'Sánchez', 'télefono' => 635450972, 'edad' => 39, 'ciudad' => 'Barcelona'];<br>
       

        <p>- Acceso valores</p>
        echo 'Este es el nombre de la $persona: ' . $persona['nombre'] .'&lt;br&gt;';<br>
        echo 'Este es el apellido1 de la $persona: ' . $persona['apellido1'] .'&lt;br&gt;';<br>
        echo 'Este es el apellido2 de la $persona: ' . $persona['apellido2'] .'&lt;br&gt;';<br>
        echo 'Este es el télefono de la $persona: ' . $persona['télefono'] .'&lt;br&gt;';<br>
        echo 'Este es el edad de la $persona: ' . $persona['edad'] .'&lt;br&gt;';<br>
        echo 'Este es el ciudad de la $persona: ' . $persona['ciudad'] .'&lt;br&gt;';<br>


        <p>- Modificación valores</p>
        $persona['edad']=40;<br>
      echo 'La nueva edad de $persona es: ' . $persona['edad'] . '&lt;br&gt;';<br>



        <p>- Añadir valores</p>
        $persona['sexo']='Masculino';<br>
        echo 'El sexo de la $persona es: ' . $persona['sexo']. '&lt;br&gt;';<br>
      

      </div>

      <!--  >>>>>>>>>>>>>>>>>>>> PHP -->
      <?php

      $persona = array('nombre' => 'César', 'apellido1' => 'Fernández', 'apellido2' => 'Sánchez', 'télefono' => 635450972, 'edad' => 39, 'ciudad' => 'Barcelona');
      $persona2 = ['nombre' => 'Lucas', 'apellido1' => 'Fernández', 'apellido2' => 'Sánchez', 'télefono' => 635450972, 'edad' => 39, 'ciudad' => 'Barcelona'];

      echo '
      <div class="cod_php">
      <h4>Resultado</h4>';

      
      echo ' <p>- Acceso valores</p>';
      echo 'Este es el nombre de la $persona: ' .       $persona['nombre'] . '<br>';
      echo 'Este es el apellido1 de la $persona: ' . $persona['apellido1'] . '<br>';
      echo 'Este es el apellido2 de la $persona: ' . $persona['apellido2'] . '<br>';
      echo 'Este es el télefono de la $persona: ' .   $persona['télefono'] . '<br>';
      echo 'Este es el edad de la $persona: ' .           $persona['edad'] . '<br>';
      echo 'Este es el ciudad de la $persona: ' .       $persona['ciudad'] . '<br>';

      echo ' <p>- Modificación valores</p>';
      $persona['edad']=40;
      echo 'La nueva edad de $persona es: ' . $persona['edad'] . '<br>';


      echo ' <p>- Añadir valores</p>';
      $persona['sexo']='Masculino';
      echo 'El sexo de la $persona es: ' . $persona['sexo'] . '<br></div>';

      ?>
    </div>





  </section>


  <footer>
    <button type="button" class="btn-return"><a href="../index.php"><i class="bi bi-caret-left-square-fill"></i> Atrás</a></button>
  </footer>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>

</html>