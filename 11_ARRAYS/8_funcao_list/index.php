<?php

$pessoa = ["João", 18, "Programador", "roxo"];
print_r($pessoa);
echo "<br>";

list($nome, $idade, $profissao, $corFav) = $pessoa;

echo "$nome <br>";
echo "$idade <br>";
echo "$profissao <br>";
echo "$corFav <br>";