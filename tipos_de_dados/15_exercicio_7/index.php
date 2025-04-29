<?php

$pessoa = [
    'nome' => 'João Pedro Nery',
    'idade' => 18,
    'profissão' => 'progamador',
    'altura' => 1.75,
    'peso' => 73
];

print_r($pessoa);
echo "<br>";

$nome = $pessoa['nome'];

if($pessoa['idade'] >= 18) {
    echo "A pessoa $nome é maior de idade! <br>";
} else {
    echo "A pessoa $nome é menor de idade! <br>";
}