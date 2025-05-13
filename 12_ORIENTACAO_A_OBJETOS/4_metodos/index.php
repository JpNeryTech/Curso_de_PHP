<?php

class Pessoa {

    function falar() {
        echo  "Olá eu sou um objeto! <br>";
    }

    function somar($x, $y) {
        echo $x + $y . "<br>";
    }

}

$jota = new Pessoa;

$jota->falar();
$jota->falar();

$cleito = new Pessoa;

$cleito->falar();

$jota->somar(2, 3);

$cleito->somar(10, 12);