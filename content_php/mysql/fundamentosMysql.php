<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Fundamentos MYSQL</title>
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
        <h2>Fundamentos MYSQL</h2>

        <div class="container ejercicio">
            <div class="cod_html">
                <h4>Código</h4>

                <p>Ubicación en local y ejecución</p>
                <code>
                    C:\xampp\mysql\bin> .\mysql.exe -u root
                </code>

                <p>Limpieza consola w11</p>
                <code>
                    system cls
                </code>

                <p>Creación de tabla, con borrado si existe previamente</p>
                <code>
                    drop database if exists prueba_consola; <br>
                    CREATE DATABASE prueba_consola; <br>
                </code>

                <p>Consultar las bases de datos existentes</p>
                <code>
                    show databases;
                </code>

                <p>Seleccionar base de datos</p>
                <code>
                    use prueba_consola;
                </code>

                <p>Crear tabla y mostrar tablas</p>
                <code>
                    CREATE TABLE usuarios (id INT AUTO_INCREMENT, nombre varchar(100) NOT NULL, email varchar(100)
                    NOT NULL, PRIMARY KEY(id));
                    show tables;
                </code>

                <p>Descripción de tabla</p>
                <code>
                    describe usuarios;
                </code>


                <p>SELECT</p>
                <code>
                    SELECT * FROM usuarios; <br>
                    SELECT nombre FROM usuarios;<br>
                    SELECT nombre FROM usuarios WHERE id=2;<br>
                    SELECT nombre FROM usuarios WHERE nombre LIKE 'c%';<br>
                    SELECT nombre FROM usuarios WHERE nombre LIKE '%r';<br>
                    SELECT nombre FROM usuarios WHERE nombre LIKE '%ar';<br>
                    SELECT nombre FROM usuarios ORDER BY nombre DESC;<br>
                    SELECT nombre FROM usuarios ORDER BY nombre ASC;<br>
                    SELECT nombre FROM usuarios LIMIT 2;<br>
                    SELECT nombre FROM usuarios LIMIT 2,2;<br>

                </code>

                <P>INSERT INTO</P>
                <code>
                    INSERT INTO usuarios (id,nombre,email) VALUES (NULL,'César', 'cesar@correo.com'); <br>
                    INSERT INTO usuarios (nombre,email) VALUES ('Carlos', 'carlos@correo.com'); <br>
                    INSERT INTO usuarios (nombre,email) VALUES ('Antonio','antonio@correo.com'); <br>
                    INSERT INTO usuarios (nombre,email) VALUES ('Maria','maria@correo.com'); <br>
                    INSERT INTO usuarios (nombre,email) VALUES ('Óscar','oscar@correo.com');<br>
                </code>

                <P>UPDATE</P>
                <code>
                    UPDATE usuarios SET nombre = 'Carlitos' WHERE id=2; <br>
                    UPDATE usuarios SET email='carlitos@correo.com' WHERE email='carlos@correo.com';<br>
                </code>

                <P>DELETE</P>
                <code>
                    DELETE FROM usuarios WHERE id=4; <br>
                </code>



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