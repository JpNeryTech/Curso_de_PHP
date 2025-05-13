<?php

$str = "Testando o resto da string, para ver se dá certo";

$rest = strstr($str, "resto");

echo "$rest <br>";

$a = "string";

$resto2 = strstr($str, $a);

echo "$resto2 <br>";

if(strstr($str, ".NET") === false) {
    echo "Não encontramos a string";
}