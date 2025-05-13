<?php

$carro = [
    'Marca' => 'BMW',
    'Motor' => '3.0',
    'Teto-solar' => true,
    'Cambio' => 'Manual',
    'Portas' => 4,
];

$chaves =  array_keys($carro);

print_r($chaves);
echo "<br>";

$valores = array_values($carro);

print_r($valores);
echo "<br>";