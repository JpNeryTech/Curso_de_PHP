<?php

$arr = [
    'Matheus' => 58,
    'joão' => 18,
    'Guilherme' => 20,
    'Ericson' => 28,
    'Arthur' => 18
];

asort($arr); //ordem cresente

print_r($arr);
echo "<br>";

$arr2 = [
    'Matheus' => 8,
    'joão' => 18,
    'Guilherme' => 58,
    'Ericson' => 36,
    'Arthur' => 3
];

arsort($arr2); // ordem decrescente

print_r($arr2);
echo "<br>";

ksort($arr2); //ordem cresente pelas chaves

print_r($arr2);
echo "<br>";

krsort($arr2); //ordem decrescente pelas chaves

print_r($arr2);
echo "<br>";