<?php

$arr = [
    'cor' => 'vermelho',
    'forma' => 'triângulo',
    'material' => 'aço'
];

extract($arr);

echo "$cor <br>";
echo "$forma <br>";
echo "$material <br>";

$nome = "Jota";

$pessoa = [
    'nome' => 'João',
    'idade' => 18
];

echo "$nome <br>";

extract($pessoa);

echo "$nome <br>";
echo "$idade <br>";