<?php

class Carro {
   public $cor;
   public $tetoSolar;
   public $velocidadeMaxima;

   function setvelocidadeMaxima($vel) {
    $this->velocidadeMaxima = $vel;
   }
    
   function getvelocidadeMaxima() {
    echo "A velocidade máxima desse carro é: $this->velocidadeMaxima km/h <br>";
   }

}

$bmw = new Carro;

$bmw->cor = "verde";
$bmw->tetoSolar = true;

$bmw->setvelocidadeMaxima(360);

$bmw->getvelocidadeMaxima();

$porshe = new Carro;

$porshe->cor= "preto";
$porshe->tetoSolar= true;

$porshe->setvelocidadeMaxima(400);

$porshe->getvelocidadeMaxima();
