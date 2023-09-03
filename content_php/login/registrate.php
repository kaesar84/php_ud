<?php session_start();
$errores = "";
$erroresPass = "";
$result="";
$registroOk;




if (isset($_SESSION['usuario'])) {
    header('Location: start.php');
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $usuario = (strtolower($_POST['usuario']));
    $password = $_POST['password'];
    //$password_hash = password_hash($password, PASSWORD_DEFAULT);
    $passwordRepeat = $_POST['passwordRepeat'];
    //$passwordRepeat_hash = password_hash($passwordRepeat, PASSWORD_DEFAULT);



    $camposVacio = NULL;
    $passIgual = NULL;

    // comprueba campos vacios
    if (empty($usuario) or empty($password) or empty($passwordRepeat)) {
        $errores .= '<p><i class="bi bi-exclamation-diamond"></i> Por favor rellena los datos correctamente</p>';
        $camposVacio = true;
    }


    // comprueba si las contraseñas son iguales
    if (strcmp($password, $passwordRepeat) == 0) {
        $password_hash = password_hash($password, PASSWORD_DEFAULT);
        $passIgual = true;
        // $erroresPass = 'Contraseña ok';

        // Verificacion de contraseña con el hash
        // echo $password;
        // echo '<br>';
        // echo $password_hash;
        // echo '<br>';

        // if(password_verify($password,$password_hash)){
        //         echo 'Verificación coincidente';
        //         echo '<br>';
        //         }else{
        //          echo 'No coincidente';
        //          echo '<br>';
        //        }


    } else {
        $erroresPass = '<p><i class="bi bi-exclamation-diamond"></i> La contraseña no coincide</p>';
        $passIgual = false;
    }

    if (!$camposVacio && $passIgual) {

        require 'conexion_registro_login_db.php';

        $id = null;
        $statement = $conexion->prepare("INSERT INTO usuarios (id,usuario,pass) VALUES (?,?,?)");
        $statement->bind_param('iss', $id, $usuario, $password_hash);
        $statement->execute();

        $result = $statement->execute();
        if($result){
            $registroOk = '<p>Registrado correctamente</p> ';
        }

        // if ($conexion->affected_rows >= 1) {
        //     echo 'Filas agregadas ' . $conexion->affected_rows;
        // } else {
        //     echo 'No se agregó nada';
        // }
    }
}






require 'registrate-view.php';
