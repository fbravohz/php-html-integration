<?php

$arreglo_basico = array(1,2,3,4,5);

var_dump($arreglo_basico);

$arreglo_asociativo = array(
    "Carlos" => 18,
    "Mr. Musculo" => 45,
    "San andres" => "anunaki",
);

var_dump($arreglo_asociativo);

var_dump($arreglo_asociativo["Carlos"]);

echo "<h1> esto se imprime en h1 sin html</h1>";
echo "\n";
echo "asi se imprimen arreglos en comillas dobles {$arreglo_asociativo['Carlos']}";
echo "\n";

$arreglo_json = array(
    "carlos" => array(
        "edad" => 20,
        "apellido" => "santaclaus",
    ),
    "mr niger" => array(
        "edad" => 18,
        "apellido" => "antunez",
    ),
);

echo "carlos tiene edad: {$arreglo_json['carlos']['edad']} \n";