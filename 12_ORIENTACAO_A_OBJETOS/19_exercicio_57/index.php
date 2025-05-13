<?php

class Cachorro {

    public $raca;
    public $corPelo;
    public $idade;
    public $patas;

    function __construct($raca, $corPelo, $idade, $patas) {

    $this->raca = $raca;
    $this->corPelo = $corPelo;
    $this->idade = $idade;
    $this->patas = $patas;

}

public function exibirAnimal() {


    echo "O raça do cachorro é $this->raca, a pelagem é da cor $this->corPelo, ele tem $this->idade anos e tem $this->patas patas. <br>";

}

}


 $biloca = new Cachorro("Bull Terrier", "Preta", 5, 4 );

 $biloca->exibirAnimal();

 $raca = "Pit bull";
 $corPelo = "branca";
 $idade = 2;
 $patas = 4;

 $dede = new Cachorro($raca, $corPelo, $idade, $patas);

 $dede->exibirAnimal();
