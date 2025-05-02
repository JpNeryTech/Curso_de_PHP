<?php

class Pessoa {

function falar(){
    echo "Olá, Pessoal!";
}

}

$joao = new Pessoa(); 

$joao->nome = "João";

echo $joao->nome;

echo "<br>";

$joao->falar();