<?php

$caracCarro = [
    'modelo' =>'BMW M4 Competition', 
    'cor' => 'roxa', 
    'categoria' => 'carro esportivo', 
    'cliente' => 'João Pedro Nery',
    'ano' => 2031];

print_r($caracCarro);

$marca = $caracCarro['modelo'];
$ano = $caracCarro['ano'];
$cliente = $caracCarro['cliente'];

echo "<br>";    

echo "O cliente $cliente comprou o carro de modelo $marca de ano $ano! <br>";