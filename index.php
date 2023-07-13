<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

    <link rel="stylesheet" href="styles/css/index.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</head>

<body>

    <?php
    echo '<header>
    <img src="media/logophpclaro.png" alt="">
    </header>'
    ?>

   

        <section id="indice" class="accordion-item">
            <h2>Índice</h2>
            <h3 class="accordion-header">Fundamentos de PHP</h3>
            <ul>
                <li>
                    <i class="bi bi-check-all"></i>
                    <!--  video 6 -->
                    <a href="content_php/variables.php">Variables</a>
                </li>

                <li>
                    <i class="bi bi-check-all"></i>
                    <!--  video 7 -->
                    <a href="content_php/constantes.php">Constantes</a>

                </li>

                <li>
                    <i class="bi bi-check-all"></i>
                    <!--  video 8 -->
                    <a href="content_php/arrays.php">Arrays Indexados</a>
                </li>

                <li>
                    <i class="bi bi-check-all"></i>
                    <!--  video 9 -->
                    <a href="content_php/arraysAsociativos.php">Arrays Asociativos</a>
                </li>

                <li>
                    <i class="bi bi-check-all"></i>
                    <!--  video 10 -->
                    <a href="content_php/arraysMultidimensionales.php">Arrays Multidimensionales</a>
                </li>

                <li>
                    <i class="bi bi-check-all"></i>
                    <!--  video 11 -->
                    <a href="content_php/numeroElementosArray.php">Conociendo el número de elementos de un Array</a>
                </li>

                <li>
                    <i class="bi bi-check-all"></i>
                    <!--  video 22 -->
                    <a href="content_php/arraysForWhile.php">Recorriendo un array - For / While</a>
                </li>

                <li>
                    <i class="bi bi-check-all"></i>
                    <!--  video 12 -->
                    <a href="content_php/arraysForeach.php">Recorriendo un Array - For each</a>
                </li>

                <li>
                    <i class="bi bi-check-all"></i>
                    <!--  video 13 -->
                    <a href="content_php/arraysOrdenar.php">Ordenar Arrays</a>
                </li>


                <li>
                    <i class="bi bi-check-all"></i>
                    <!--  video 14 -->
                    <a href="content_php/condicionales-if.php">Condicionales - IF</a>
                </li>

                <li>
                    <i class="bi bi-check-all"></i>
                    <!--  video 15 -->
                    <a href="content_php/condicionales-ifelse.php">Condicionales - IF - ELSE IF</a>
                </li>

                <li>
                    <i class="bi bi-check-all"></i>
                    <!--  video 16 - 17 -->
                    <a href="content_php/operadores.php">Operadores</a>
                </li>

                <li>
                    <i class="bi bi-check-all"></i>
                    <!--  video 18 -->
                    <a href="content_php/switch.php">Switch</a>
                </li>


                <li>
                    <i class="bi bi-check-all"></i>
                    <!--  video 19 -->
                    <a href="content_php/operadorTernario.php">Operador ternario</a>
                </li>

                <li>
                    <i class="bi bi-check-all"></i>
                    <!--  video 20 -->
                    <a href="content_php/bucleFor.php">Bucle FOR</a>
                </li>

                <li>
                    <i class="bi bi-check-all"></i>
                    <!--  video 21 -->
                    <a href="content_php/bucleWhile.php">Bucle WHILE</a>
                </li>

                <li>
                    <i class="bi bi-check-all"></i>
                    <!--  video 23 -->
                    <a href="content_php/bucleDoWhile.php">Bucle DO WHILE</a>
                </li>

                <li>
                    <i class="bi bi-check-all"></i>
                    <!--  video 24 -->
                    <a href="content_php/bucleForEach.php">Bucle FOR EACH</a>
                </li>

                <li>
                    <i class="bi bi-check-all"></i>
                    <!--  video 25 -->
                    <a href="content_php/breackContinue.php">Break - Continue</a>
                </li>


                <li>
                    <i class="bi bi-check-all"></i>
                    <!--  video 26 -->
                    <a href="content_php/varDump.php">Función var_dump()</a>
                </li>

                <li>
                    <i class="bi bi-check-all"></i>
                    <!--  video 27 -->
                    <a href="content_php/print.php">Función print()</a>
                </li>

                <li>
                    <i class="bi bi-check-all"></i>
                    <!--  video 27 -->
                    <a href="content_php/funciones.php">Funciones</a>
                </li>

                <li>
                    <i class="bi bi-check-all"></i>
                    <!--  video 28-29 -->
                    <a href="content_php/funcionesParam.php">Funciones con parámetros</a>
                </li>

                <li>
                    <i class="bi bi-check-all"></i>
                    <!--  video 30-31 -->
                    <a href="content_php/funcionesParamEjemplos.php">Funciones con parámetros - Ejemplos</a>
                </li>

                <li>
                    <i class="bi bi-check-all"></i>
                    <!--  video 32 -->
                    <a href="content_php/funcionesCadenasTexto.php">Funciones útiles para cadenas de texto </a>
                </li>

                <li>
                    <i class="bi bi-check-all"></i>
                    <!--  video 33 -->
                    <a href="content_php/funcionesArrays.php">Funciones útiles para Arrays </a>
                </li>

                <li>
                    <i class="bi bi-check-all"></i>
                    <!--  video 34 -->
                    <a href="content_php/funcionesMates.php">Funciones útiles matemáticas </a>
                </li>

            </ul>



        </section>
    


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>

</html>

<!--  echo '&lt;br&gt;';<br> -->