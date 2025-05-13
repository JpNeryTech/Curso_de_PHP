<?php

class Car {
    public $rodas = 4;
    public $aro = 20;
    public $cor = "Verde";

    function acelerar($vel) {
       echo "A BMW M4 Competition acelerou ate $vel km/h";
    }

}

$bmw = new car;

echo $bmw->aro . "<br>";
echo $bmw->rodas . "<br>";

$bmw->cor = "Roxa";

echo $bmw->cor . "<br>";

$bmw->acelerar(320);



