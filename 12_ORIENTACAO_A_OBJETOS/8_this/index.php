<?php

class Animal {

    public $nome;

    function escolherNome($nome) {

        $this->nome= $nome;

    }

    function latir() {
        return "Au Au <br>";
    }
    
    function latirForte() {
        return strtoupper($this->latir());
    }

}

$biloca = new animal;

echo " O nome do animal é $biloca->nome <br>";

$biloca->escolherNome("Biloca");

echo " O nome do animal é $biloca->nome <br>";

echo $biloca->latir();

echo $biloca->latirForte();