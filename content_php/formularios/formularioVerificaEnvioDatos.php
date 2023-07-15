<?php


      // Para un formulario porque no identifica cual envia la documentación
      /* if($_SERVER['REQUEST_METHOD'] == 'POST'){
      echo 'Se enviaron por POST<br>';
      }else{
      echo 'Se enviaron por GET';
      } */

      // Para más de uno, ya que lo vinculamos al name del submit
      if (isset($_POST['submit-form1'])) {
        echo 'Se han enviado los datos correctamente<br>';
        echo '<pre>';
        print_r($_POST);
        echo '</pre>';
      }



?>