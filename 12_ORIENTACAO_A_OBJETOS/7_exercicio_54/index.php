<?php

class Pessoa  {
    public $nome;
    public $idade;

    function andar($m) {
        echo "A pessoa andou $m metros <br>";
    }
}

$pedro = new pessoa;

$pedro->nome = "Pedro";
$pedro->idade = 23;

echo "O nome dele é $pedro->nome e tem $pedro->idade anos <br>";

$pedro->andar(20);

$joaquim = new pessoa;

$joaquim->nome = "Joaquim";
$joaquim->idade = 42;

echo "O nome dele é $joaquim->nome e tem $joaquim->idade anos <br>";

$joaquim->andar(1000);
