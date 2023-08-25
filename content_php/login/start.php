<?php session_start();

if(isset($_SESSION['usuario'])){
    header('Location: contenido-index.php');

}else{
    header('Location:registrate.php');
}
