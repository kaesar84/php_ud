<?php session_start();
  $errores ="";


if(isset($_SESSION['usuario'])){
    header('Location: start.php');

}

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $usuario = (strtolower( $_POST['usuario']));
    $password = $_POST['password'];
    $passwordRepeat = $_POST['passwordRepeat'];

    //echo  $usuario . $password . $passwordRepeat;

  

    if(empty($usuario) or empty($password) or empty($passwordRepeat)){
        $errores .= '<p><i class="bi bi-exclamation-diamond"></i> Por favor rellena los datos correctamente</p>';
    }


}




require 'registrate-view.php';
