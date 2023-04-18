<?php
$se_hablo_de_bruno = false;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Condicionales</title>
</head>
<body>
    <!-- ESTO NO SE DEBE DE HACER -->
    <?php
    if (false)
    {
        echo "<p>Esta condicional es verdadera</p><br>";
    }
    else
    {
        echo "<b>Esta es falsa</b><br>";
    }
    ?>
    <!-- ESTO ES ACEPTABLE -->
    <?php if(true) {?>
        <b>Se supone que esto es aceptable</b>
        <br>
    <?php }?>
    <!-- ESTO ES LO MEJOR -->
    <?php if($se_hablo_de_bruno): ?>
        <b>Esto si se debe de hacer</b>
        <br>
    <?php else: ?>
        <b>Aqui un else</b>
        <br>
    <?php endif; ?>

</body>
</html>