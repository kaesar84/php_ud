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
    <div class="cabeceraTitulo">
        <h2>Índice de contenidos</h2>
    </div>


    <div class="accordion" id="accordionExample">

        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    <h2> Fundamentos de PHP</h2>
                </button>
            </h2>
            <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                <div class="accordion-body">

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

                        <li>
                            <i class="bi bi-check-all"></i>
                            <!--  video 35 -->
                            <a href="content_php/scope.php">Scope </a>
                        </li>

                        
                        <li>
                            <i class="bi bi-check-all"></i>
                            <!--  video 36 -->
                            <a href="content_php/include-require.php">Include - require </a>
                        </li>

                        <li>
                            <i class="bi bi-check-all"></i>
                            <!--  video 37 -->
                            <a href="content_php/dieFuncion.php">Función die() </a>
                        </li>

                        <li>
                            <i class="bi bi-check-all"></i>
                            <!--  video 38 -->
                            <a href="content_php/tipoEscalar.php">Declaración de tipo escalar</a>
                        </li>

                    </ul>


                </div>
            </div>
        </div>

        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                <h2> Formularios</h2>
                </button>
            </h2>
            <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                </div>
            </div>
        </div>


        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                <h2>POO</h2>
                </button>
            </h2>
            <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                </div>
            </div>
        </div>

        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseThree">
                <h2> Cookies y sesiones</h2>
                </button>
            </h2>
            <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                </div>
            </div>
        </div>




    </div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>

</html>

<!--  echo '&lt;br&gt;';<br> -->