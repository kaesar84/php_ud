<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registro Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

    <link rel="stylesheet" href="../../styles/css/index.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@100;300;400&display=swap" rel="stylesheet">
</head>

<body>


    <?php
    echo '<header>
   <img src="../../media/logophpclaro.png" alt="">
   </header>'
    ?>

    <section class="formulario-login">
        <div class="row login-container">
            <div class="col-5 container-picture">
                <img src="../../media/login.png" class="img-fluid" alt="pc identify" id="loginImg">
            </div>

            <div class="col-7 container-form">

                <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" id="formulario_login" name="login">
                    <input type="text" placeholder="Username" aria-label="Username" aria-describedby="usuario" name="usuario">
                    <input type="password" placeholder="Password" aria-label="password" aria-describedby="password" name="password">
                    <input type="password" placeholder="Repite el password" aria-label="passwordRepeat" aria-describedby="passwordRepeat" name="passwordRepeat">


                    <div class="container-botones-form">
                        <button id="btnLogin" onclick="login.submit()">Aceptar</button>
                        <button id="btnReg"><a href="login.php">Cancelar</a></button>
                    </div>

                    <?php if (!empty($errores) or !empty($erroresPass)) : ?>
                        <div class="error">

                            <?php echo $errores; ?>
                            <?php echo $erroresPass; ?>

                        </div>
                    <?php endif; ?>

                    <?php if ($result) : ?>
                        <div class="error">
                            <?php echo $registroOk; ?>
                        </div>
                    <?php endif; ?>

                </form>

            </div>
        </div>
        </div>
    </section>






    </div>


    <footer>
        <button type="button" class="btn-return"><a href="../../index.php"><i class="bi bi-caret-left-square-fill"></i> Atrás</a></button>
    </footer>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>

</html>