<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Práctica - Formulario de contacto</title>
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
    <h2>Práctica - Formulario de contacto</h2>

    <div class="container ejercicio">
      <div class="cod_html">
        <h4>Formulario</h4>



        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" name="" id="contactForm" class="formBase">


          <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1"><i class="bi bi-person-circle"></i></span>
            <input type="text" class="form-control" placeholder="Usuario" aria-label="Usuario" aria-describedby="basic-addon1" name="usuario" value="<?php if (!$enviado && isset($usuario)) echo $usuario ?>" id="inputUsuario">
          </div>


          <div class="input-group flex-nowrap">
            <span class="input-group-text" id="addon-wrapping"><i class="bi bi-envelope" style="color: #0d6efd;"></i></span>
            <input type="email" class="form-control" placeholder="email" aria-label="email" aria-describedby="addon-wrapping" name="email" value="<?php if (!$enviado && isset($email)) echo $email ?>" id="inputEmail">
          </div>

          <div class="form-floating">
            <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px" name="mensaje" value="<?php if (!$enviado && isset($mensaje)) echo $mensaje ?>"></textarea>
            <label for="floatingTextarea2">Mensaje</label>
          </div>


          <?php if (!empty($errores)) : ?>
            <div class="inforError">
              <?php echo $errores; ?>
            </div>

          <?php elseif ($enviado) : ?>
            <div class="infoEnvio">
              Enviado correctamente
            </div>
          <?php endif ?>

          <!-- 
          -->


          <div class="inputSubmit">
            <button type="submit" class="btn btn-secondary" name="submitBtn">Enviar</button>
          </div>


        </form>

      </div>

      <!--  >>>>>>>>>>>>>>>>>>>> PHP -->

    </div>

  </section>

  <footer>
    <button type="button" class="btn-return"><a href="../../index.php"><i class="bi bi-caret-left-square-fill"></i> Atrás</a></button>
  </footer>





  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>

</html>