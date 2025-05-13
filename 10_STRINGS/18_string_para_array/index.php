<?php

$frase = "Testando o explode";

$fraseArray = explode(" ", $frase); //toda vez que tiver um espaço ele vai trannsformar em array

print_r($fraseArray);
echo "<br>";

$fraseArray2 = explode(",", $frase); //aqui não foi porque não tem virgola

print_r($fraseArray2);
echo "<br>";

$fraseB = "Carro, Avião, Barco, Navio";

$fraseB = explode(",", $fraseB);

print_r($fraseB);
echo "<br>";

for($i = 0; $i < count($fraseB); $i++) {

    echo "$fraseB[$i] <br>";

}