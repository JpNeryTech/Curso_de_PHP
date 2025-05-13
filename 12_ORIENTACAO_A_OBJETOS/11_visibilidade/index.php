<?php

class Car {

    public $rodas = 4;
    private $vidro = "Sem Pelicula";
    protected $portas = 4;

    public function getVidro() {
        return $this->vidro;
    }
 
     public function getPortas() {
        return $this->portas;
    }
 
}

class Mecanico {

    public function alterarRodas($carro){
        $carro->rodas = 10;
    }

    public function colocarPelicula($carro, $pelicula) {

        $carro->vidro = $pelicula;

    }

}

$carro = new Car;

echo $carro->rodas . "<br>";

$carlinhos = new Mecanico;

$carlinhos ->alterarRodas($carro);

echo $carro->rodas . "<br>";

//não pode alterar prque é privado
//$carlinhos ->colocarPelicula($carro, "G20");

echo $carro->getVidro() . "<br>";

echo $carro->getPortas() . "<br>";