<?php

$especie = "Leão";
$patas = 4;
$corPelo = "marrom";
$idade = 8;

$animal = compact("especie", "patas", "corPelo", "idade");
print_r($animal);
echo "<br>";

foreach($animal as $caractristicas => $value) {

    echo "$caractristicas: => $value <br>";

}