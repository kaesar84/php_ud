<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Estructura paginación</title>
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



    <div class="lista-paginacion">
        <h3>Paginación</h3>
        <ul class="list-group items-lista-paginacion">

            <!-- por los articulos que existen -->
            <?php foreach ($articulos as $articulo) :  ?>
                <li class="list-group-item">
                    <h4 class="titulo-item"><?php echo $articulo['id'] . ' - ' .  $articulo['titulo_articulo'];   ?></h4>
                    <p class="desc-item"><?php echo $articulo['articulo'];   ?></p>
                </li>
            <?php endforeach  ?>





        </ul>

        <nav aria-label="Page navigation example">
            <ul class="pagination">

                <!-- BOTON PREVIA -->
                <!-- Si es la página 1 el botón de ATRAS esta DISABLED -->
                <?php if ($pagina == 1) : ?>
                    <li class="page-item disabled">
                        <a class="page-link" href="#" aria-label="Previous">
                            <span aria-hidden="true">&laquo;</span>
                        </a>
                    </li>

                    <!-- En caso contrario esta habilitado  href= pagina-1-->
                <?php else : ?>
                    <li class="page-item ">
                        <a class="page-link" href="?pagina=<?php echo $pagina - 1 ?>" aria-label="Previous">
                            <span aria-hidden="true">&laquo;</span>
                        </a>
                    </li>
                <?php endif; ?>

                <!-- BOTONES NÚMEROS DE PÁGINA -->
                <?php
                for ($i = 1; $i <= $nummeroPagina; $i++) {
                    echo ' <li class="page-item pag_activa"><a class="page-link" href="http://localhost:8080/php_ud/content_php/paginacion/paginacion-index.php?pagina='.$i.'">'.$i.'</a></li>';
                }



                ?>




                <!-- <li class="page-item">
                    <a class="page-link" href="#" aria-label="Previous">
                        <span aria-hidden="true">&laquo;</span>
                    </a>
                </li>
                <li class="page-item pag_activa"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#">4</a></li>
                <li class="page-item">
                    <a class="page-link" href="#" aria-label="Next">
                        <span aria-hidden="true">&raquo;</span>
                    </a>
                </li> -->



            </ul>
        </nav>


    </div>









    <footer>
        <button type="button" class="btn-return"><a href="../../index.php"><i class="bi bi-caret-left-square-fill"></i> Atrás</a></button>
    </footer>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>

</html>