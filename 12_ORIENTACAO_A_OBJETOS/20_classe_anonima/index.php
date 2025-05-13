<?php

$pessoa = new class() {

    public $nome = "João Pedro";
    
    public function dizerNome() {
        echo "Olá meu nome é $this->nome";
    }

};

echo $pessoa->nome . "<br>";

$pessoa->dizerNome();