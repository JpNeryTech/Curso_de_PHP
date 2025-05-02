<?php

$a =  7.7;

echo $a;
echo "<br>";

echo 56.58;
echo "<br>";

echo -85.98; //podemos ter floats negativos
echo "<br>";

if(is_float($a)) {
    echo "É um Float <br>";
}

if(is_int($a)) {
    echo "É um inteiro <br>";
}