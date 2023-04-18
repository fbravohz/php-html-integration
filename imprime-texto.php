<?php
$nombre = "Mr michi";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Imprime texto y etiquetas con PHP</title>
</head>
<body>
    <?php echo "<b>Integracion</b>"; ?>

    <?= "<i>Otra forma de imprimir texto en php</i>" ?>
    <?= "<h1>PRUEBOTOTOTA</h1>" ?>
    <h1>¡Hola <?= $nombre ?> !</h1>
</body>
</html>