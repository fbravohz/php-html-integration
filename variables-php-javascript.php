<?php $usuarios = array(
    array(
        "id" => 0,
        "username" => "Mr. michi"
    ),
    array(
        "id" => 1,
        "username" => "Retax"
    ),
    array(
        "id" => 3,
        "username" => "Pancho"
    ),
);

$edad_pepito = 12;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variables PHP a JavaScript</title>
</head>
<body>

    <script>
        let users = JSON.parse('<?= json_encode($usuarios) ?>');
        console.log(users[0].username);
        
        let edadPepito = <?= $edad_pepito ?>;
        console.log(edadPepito);
    </script>

</body>
</html>