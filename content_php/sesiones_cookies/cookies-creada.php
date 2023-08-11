<?php

if(isset($_COOKIE['font-size'])){
    $tamanoFuente =htmlspecialchars($_COOKIE['font-size']);
}else{
    $tamanoFuente = '15px';
}


$tamanoFuente = $_COOKIE['font-size'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cokkie creada</title>
</head>

<body>
    <p style="font-size:<?php echo $tamanoFuente; ?>">
    La cookie determina que el tamaño de la fuente sea 30 px.
    </p>

</body>

</html>