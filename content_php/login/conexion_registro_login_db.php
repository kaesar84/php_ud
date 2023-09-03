<?php

$conexion = new mysqli('localhost', 'root', '', 'registro_login_db');


            if ($conexion->connect_errno) { // resultado 0 si conexión ok, en este caso condicionamos si existe error
                die('Error al conectar a la BBDD');
            } else {
                //echo '<p>Conexión establecida correctamente</p>';
            }

?>