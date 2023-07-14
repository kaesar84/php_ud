<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Envío de datos desde un un formulario</title>
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
    <h2>Envío de datos desde un un formulario</h2>

    <div class="container ejercicio">
      <div class="cod_html">
        <h4>Formulario</h4>



        <form action="formulario-datos.php" method="" name="" id="" class="formBase">


          <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">@</span>
            <input type="text" class="form-control" placeholder="Usuario" aria-label="Usuario" aria-describedby="basic-addon1" name="usuario">
          </div>


          <div class="container-checks">
            <div class="form-check">
              <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" value="trabajador">
              <label class="form-check-label" for="flexRadioDefault1">
                Trabajador
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" value="estudiante">
              <label class="form-check-label" for="flexRadioDefault2">
                Estudiante
              </label>
            </div>
          </div>


          <div class="containerSelect">
            <select class="form-select" aria-label="Default select example" id="year" name="year">
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

        <code>



        </code>
        <br>



      </div>

      <!--  >>>>>>>>>>>>>>>>>>>> PHP -->
      <?php

      echo '
      <div class="cod_php">
      <h4>Resultado</h4>';




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