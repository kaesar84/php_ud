<?php session_start();


if (isset($_SESSION['usuario'])) {
    header('Location: start.php');
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $usuario = (strtolower($_POST['usuario']));
    $password = $_POST['password'];
    //$password_hash = password_hash($password, PASSWORD_DEFAULT);
   

        require 'conexion_registro_login_db.php';

        $id = null;
        $statement = $conexion->prepare("SELECT * FROM usuarios WHERE usuario=$usuario");
        $statement->execute();
        
        
        
        // if ($conexion->affected_rows >= 1) {
        //     echo 'Filas agregadas ' . $conexion->affected_rows;
        // } else {
        //     echo 'No se agregó nada';
        // }
    
}















require 'login-view.php';

?>