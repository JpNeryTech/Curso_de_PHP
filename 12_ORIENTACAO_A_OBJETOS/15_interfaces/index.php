<?php

interface Caracteristicas {

    const nome = "João";

    public function falar();

}

class Humano implements Caracteristicas {

    public $idade = 18;

    public function falar() {
        echo "Hello Word! <br>";
    }

    public function dizerNome() {
        echo "Meu nome é" . self::nome . "<br>";
    }

}

$nery = new Humano;

$nery->falar();

$nery->dizerNome();