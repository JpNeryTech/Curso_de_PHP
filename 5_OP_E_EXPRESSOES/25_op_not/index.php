<?php

if(!(5 > 2)) { // true que virou false
    echo "A operação 1 é verdadeira <br>";
}

if(!(5 > 200)) { // false que virou true
    echo "A operação 2 é verdadeira <br>";
}

$a = 10;
$b = 20;

if(!($a >= $b)) { // true que virou false
    echo "A operação 3 é verdadeira <br>";
}