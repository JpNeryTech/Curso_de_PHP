<?php

class Car {

    public $portas;
    public $cor;
    public $marca;

    function __construct($portas, $cor, $marca) {

        $this->portas = $portas;
        $this->cor = $cor;
        $this->marca = $marca;

    }

}

$bmw = new Car(4, "verde", "BMW");

echo "O carro é da marca $bmw->marca e tem a cor $bmw->cor <br>";

$porsche = new Car(4, "vermelha", "Porsche");

echo "O carro é da marca $porsche->marca e tem a cor $porsche->cor <br>";