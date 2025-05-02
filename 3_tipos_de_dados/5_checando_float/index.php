<?php

$a = "teste";
$b = 4.56;

if(is_float($a)) {
    echo "É float!";
}

if(is_float($b)) {
    echo "É float 2! <br>";   
}

if(is_float(589.65)) {
    echo "É float 3! <br>";
}

if(is_float("teste")) {
    echo "É float 4! <br>";
}

