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

        <!--  Fundamentos -->
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
                            <a href="content_php/fundamentos/variables.php">Variables</a>
                        </li>

                        <li>
                            <i class="bi bi-check-all"></i>
                            <!--  video 7 -->
                            <a href="content_php/fundamentos/constantes.php">Constantes</a>

                        </li>

                        <li>
                            <i class="bi bi-check-all"></i>
                            <!--  video 8 -->
                            <a href="content_php/fundamentos/arrays.php">Arrays Indexados</a>
                        </li>

                        <li>
                            <i class="bi bi-check-all"></i>
                            <!--  video 9 -->
                            <a href="content_php/fundamentos/arraysAsociativos.php">Arrays Asociativos</a>
                        </li>

                        <li>
                            <i class="bi bi-check-all"></i>
                            <!--  video 10 -->
                            <a href="content_php/fundamentos/arraysMultidimensionales.php">Arrays Multidimensionales</a>
                        </li>

                        <li>
                            <i class="bi bi-check-all"></i>
                            <!--  video 11 -->
                            <a href="content_php/fundamentos/numeroElementosArray.php">Conociendo el número de elementos de un Array</a>
                        </li>

                        <li>
                            <i class="bi bi-check-all"></i>
                            <!--  video 22 -->
                            <a href="content_php/fundamentos/arraysForWhile.php">Recorriendo un array - For / While</a>
                        </li>

                        <li>
                            <i class="bi bi-check-all"></i>
                            <!--  video 12 -->
                            <a href="content_php/fundamentos/arraysForeach.php">Recorriendo un Array - For each</a>
                        </li>

                        <li>
                            <i class="bi bi-check-all"></i>
                            <!--  video 13 -->
                            <a href="content_php/fundamentos/arraysOrdenar.php">Ordenar Arrays</a>
                        </li>


                        <li>
                            <i class="bi bi-check-all"></i>
                            <!--  video 14 -->
                            <a href="content_php/fundamentos/condicionales-if.php">Condicionales - IF</a>
                        </li>

                        <li>
                            <i class="bi bi-check-all"></i>
                            <!--  video 15 -->
                            <a href="content_php/fundamentos/condicionales-ifelse.php">Condicionales - IF - ELSE IF</a>
                        </li>

                        <li>
                            <i class="bi bi-check-all"></i>
                            <!--  video 16 - 17 -->
                            <a href="content_php/fundamentos/operadores.php">Operadores</a>
                        </li>

                        <li>
                            <i class="bi bi-check-all"></i>
                            <!--  video 18 -->
                            <a href="content_php/fundamentos/switch.php">Switch</a>
                        </li>


                        <li>
                            <i class="bi bi-check-all"></i>
                            <!--  video 19 -->
                            <a href="content_php/fundamentos/operadorTernario.php">Operador ternario</a>
                        </li>

                        <li>
                            <i class="bi bi-check-all"></i>
                            <!--  video 20 -->
                            <a href="content_php/fundamentos/bucleFor.php">Bucle FOR</a>
                        </li>

                        <li>
                            <i class="bi bi-check-all"></i>
                            <!--  video 21 -->
                            <a href="content_php/fundamentos/bucleWhile.php">Bucle WHILE</a>
                        </li>

                        <li>
                            <i class="bi bi-check-all"></i>
                            <!--  video 23 -->
                            <a href="content_php/fundamentos/bucleDoWhile.php">Bucle DO WHILE</a>
                        </li>

                        <li>
                            <i class="bi bi-check-all"></i>
                            <!--  video 24 -->
                            <a href="content_php/fundamentos/bucleForEach.php">Bucle FOR EACH</a>
                        </li>

                        <li>
                            <i class="bi bi-check-all"></i>
                            <!--  video 25 -->
                            <a href="content_php/fundamentos/breackContinue.php">Break - Continue</a>
                        </li>


                        <li>
                            <i class="bi bi-check-all"></i>
                            <!--  video 26 -->
                            <a href="content_php/fundamentos/varDump.php">var_dump()</a>
                        </li>

                        <li>
                            <i class="bi bi-check-all"></i>
                            <!--  video 27 -->
                            <a href="content_php/fundamentos/print.php">print()</a>
                        </li>

                        <li>
                            <i class="bi bi-check-all"></i>
                            <!--  video 27 -->
                            <a href="content_php/fundamentos/funciones.php">Funciones</a>
                        </li>

                        <li>
                            <i class="bi bi-check-all"></i>
                            <!--  video 28-29 -->
                            <a href="content_php/fundamentos/funcionesParam.php">Funciones con parámetros</a>
                        </li>

                        <li>
                            <i class="bi bi-check-all"></i>
                            <!--  video 30-31 -->
                            <a href="content_php/fundamentos/funcionesParamEjemplos.php">Funciones con parámetros - Ejemplos</a>
                        </li>

                        <li>
                            <i class="bi bi-check-all"></i>
                            <!--  video 32 -->
                            <a href="content_php/fundamentos/funcionesCadenasTexto.php">Funciones útiles para cadenas de texto </a>
                        </li>

                        <li>
                            <i class="bi bi-check-all"></i>
                            <!--  video 33 -->
                            <a href="content_php/fundamentos/funcionesArrays.php">Funciones útiles para Arrays </a>
                        </li>

                        <li>
                            <i class="bi bi-check-all"></i>
                            <!--  video 34 -->
                            <a href="content_php/fundamentos/funcionesMates.php">Funciones útiles matemáticas </a>
                        </li>

                        <li>
                            <i class="bi bi-check-all"></i>
                            <!--  video 35 -->
                            <a href="content_php/fundamentos/scope.php">Scope </a>
                        </li>


                        <li>
                            <i class="bi bi-check-all"></i>
                            <!--  video 36 -->
                            <a href="content_php/fundamentos/include-require.php">Include - require </a>
                        </li>

                        <li>
                            <i class="bi bi-check-all"></i>
                            <!--  video 37 -->
                            <a href="content_php/fundamentos/dieFuncion.php">die() </a>
                        </li>

                        <li>
                            <i class="bi bi-check-all"></i>
                            <!--  video 38 -->
                            <a href="content_php/fundamentos/tipoEscalar.php">Declaración de tipo escalar</a>
                        </li>

                        <li>
                            <i class="bi bi-check-all"></i>
                            <!--  video 39 -->
                            <a href="content_php/fundamentos/tipoDevolucion.php">Declaración de tipo devolución</a>
                        </li>

                        <li>
                            <i class="bi bi-check-all"></i>
                            <!--  video 40 -->
                            <a href="content_php/fundamentos/operadorNaveEspacial.php">Operador nave espacial</a>
                        </li>

                    </ul>


                </div>
            </div>
        </div>

        <!-- Formularios -->
        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    <h2> Formularios</h2>
                </button>
            </h2>
            <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <ul>
                        <li>
                            <i class="bi bi-check-all"></i>
                            <!--  video 41 -->
                            <a href="content_php/formularios/formulario.php">Formulario</a>
                        </li>

                        <li>
                            <i class="bi bi-check-all"></i>
                            <!--  video 42 -->
                            <a href="content_php/formularios/formularioPost.php">Envío de datos desde un formulario >>> POST </a>
                        </li>

                        <li>
                            <i class="bi bi-check-all"></i>
                            <!--  video 43 -->
                            <a href="content_php/formularios/formularioGet.php">Envío de datos desde un formulario >>> GET </a>
                        </li>

                        <li>
                            <i class="bi bi-check-all"></i>
                            <!--  video 45 -->
                            <a href="content_php/formularios/formularioVerificaEnvio.php">Comprobando si un formulario ha sido enviado</a>
                        </li>

                        <li>
                            <i class="bi bi-check-all"></i>
                            <!--  video 46 -->
                            <a href="content_php/formularios/validaciones.php">Validando un formulario</a>
                        </li>

                        <li>
                            <i class="bi bi-check-all"></i>
                            <!--  video 47 -->
                            <a href="content_php/formularios/fusionnull.php">Operador de fusión null</a>
                        </li>

                    </ul>

                </div>
            </div>
        </div>

        <!-- Práctica formularios -->
        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    <h2>Práctica: Formulario de contacto</h2>
                </button>
            </h2>
            <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <ul>
                        <li>
                            <i class="bi bi-check-all"></i>
                            <!--  video 6 -->
                            <a href="content_php/formularios_contacto_practica/formularios-datos.php">Formulario Funcional</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- POO -->
        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseThree">
                    <h2>POO</h2>
                </button>
            </h2>
            <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <ul>
                        <li>
                            <i class="bi bi-check-all"></i>
                            <!--  video 52 -->
                            <a href="content_php/poo/clases.php">Clases</a>
                        </li>

                        <li>
                            <i class="bi bi-check-all"></i>
                            <!--  video 53 -->
                            <a href="content_php/poo/reservadaThis.php">Palabra reservada: THIS</a>
                        </li>

                        <li>
                            <i class="bi bi-check-all"></i>
                            <!--  video 54 -->
                            <a href="content_php/poo/constructor.php">Método constructor</a>
                        </li>

                        <li>
                            <i class="bi bi-check-all"></i>
                            <!--  video 55 -->
                            <a href="content_php/poo/herencia.php">Herencia</a>
                        </li>

                        <li>
                            <i class="bi bi-check-all"></i>
                            <!--  video 56 -->
                            <a href="content_php/poo/scope.php">Scope</a>
                        </li>

                        <li>
                            <i class="bi bi-check-all"></i>
                            <!--  video 57 -->
                            <a href="content_php/poo/clasesAbstractas.php">Clases Abstractas</a>
                        </li>

                        <li>
                            <i class="bi bi-check-all"></i>
                            <!--  video 57 -->
                            <a href="content_php/poo/static.php">Palabra reservada: static</a>
                        </li>

                        <li>
                            <i class="bi bi-check-all"></i>
                            <!--  video 58 -->
                            <a href="content_php/poo/cadenasMetodos.php">Cadenas de métodos</a>
                        </li>

                    </ul>
                </div>
            </div>




        </div>

         <!-- Cookies y sesiones -->
         <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                    <h2>Sesiones y cookies</h2>
                </button>
            </h2>
            <div id="collapseFive" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <ul>
                        <li>
                            <i class="bi bi-check-all"></i>
                            <!--  video 6 -->
                            <a href="content_php/sesiones_cookies/sesiones.php">Sesiones</a>
                        </li>
                        <li>
                            <i class="bi bi-check-all"></i>
                            <!--  video 6 -->
                            <a href="content_php/sesiones_cookies/cookies.php">Cookies</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>


 <!-- MYSQL -->
 <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                    <h2>MYSQL</h2>
                </button>
            </h2>
            <div id="collapseSix" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <ul>
                        <li>
                            <i class="bi bi-check-all"></i>
                            <!--  video 62-68 -->
                            <a href="content_php/mysql/fundamentosMysql.php">Fundamentos Mysql</a>
                        </li>
                       
                    </ul>
                </div>
            </div>
        </div>









        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>

</html>

<!--  echo '&lt;br&gt;';<br> -->