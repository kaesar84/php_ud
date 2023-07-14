<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Método POST</title>
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
    <h2>Método POST</h2>
    

    <div class="container ejercicio">
    <p>Permite enviar archivos - No modifica la URL - Se utiliza para info importante</p>
   
      <div class="cod_html">
        <h4>Formulario</h4>


        <form action="" method="post" name="" id="" class="formBase"><!--  Actua sobre el mismo documento -->
          <!--  <form action="formularioPostDatos.php" method="post" name="" id="" class="formBase">  Actua sobre archivo externo-->


          <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">@</span>
            <input type="text" class="form-control" placeholder="Usuario" aria-label="Usuario" aria-describedby="basic-addon1" name="usuario">
          </div>


          <div class="container-checks">
            <div class="form-check">
              <input class="form-check-input" type="radio" name="tipoPersona" id="flexRadioDefault1" value="trabajador">
              <label class="form-check-label" for="flexRadioDefault1">
                Trabajador
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="tipoPersona" id="flexRadioDefault2" value="estudiante">
              <label class="form-check-label" for="flexRadioDefault2">
                Estudiante
              </label>
            </div>
          </div>


          <div class="containerSelect">
            <select class="form-select" aria-label="Default select example" id="horario" name="horario">
              <option selected>Selecciona</option>
              <option value="mañana">Mañana</option>
              <option value="tarde">Tarde</option>
              <option value="">Noche</option>
            </select>
          </div>


          <div class="form-check form-switch terminos">
            <input class="form-check-input" type="checkbox" role="switch" id="input-terminos" value="true" name="input-terminos">
            <label class="form-check-label" for="input-terminos">Aceptar los términos</label>
          </div>


          <div class="inputSubmit">
            <button type="submit" class="btn btn-secondary">Enviar</button>
          </div>

        </form>

        <br>

      </div>

      <!--  >>>>>>>>>>>>>>>>>>>> PHP -->
      <?php

      echo '
      <div class="cod_php">
      <h4>Resultado</h4>';

      if ($_SERVER['REQUEST_METHOD'] === 'POST') {

        echo '<p>$_POST - Genera un array asociativo con los datos</p>';
        echo '<pre>';
        print_r($_POST);
        echo '</pre>';


        $usuario = $_POST['usuario'];
        $tipoPersona = $_POST['tipoPersona'];
        $horario = $_POST['horario'];
        $aceptaTerminos = $_POST['input-terminos'];


        echo '<p>Datos Capturados</p>';
        echo 'usuario >>>' .  $usuario . '<br>';
        echo 'tipoPersona >>>' .  $tipoPersona . '<br>';
        echo 'horario >>>' .  $horario . '<br>';
        echo 'aceptaTerminos >>>' .  $aceptaTerminos . '<br>';


        echo '<p>Uso de variables</p>';
        echo '
        Hola ' . $usuario . ' eres ' . $tipoPersona . ', prefieres el horario de ' . $horario;
        echo '<br>';
        if ($aceptaTerminos) {
          echo 'Has aceptado las condiciones';
        } else {
          echo 'No has aceptado las condiciones';
        }
      }

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