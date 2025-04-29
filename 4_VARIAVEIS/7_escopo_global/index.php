<?php

$teste = "asd";

echo "$teste global 1 <br>";

if(5>2) {

    $teste = "dsa";

    echo "$teste if 1 <br>";
}

echo "$teste global 2 <br>";

function funcao() {

    $teste = "dasd";
    echo "$teste local 2 <br>";

}

funcao();

function testandoGlobbal() {

   global $teste;

   $teste = 2;

    echo "$teste global função <br>";

}

testandoGlobbal();

echo "$teste global 3 <br>";