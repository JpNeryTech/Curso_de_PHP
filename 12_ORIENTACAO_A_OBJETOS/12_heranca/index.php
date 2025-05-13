<?php

class Humano {
    public $idade = 29;

    public function falar() {
        echo "Olá Mundo! <br>";
    }

    private function gritar() {
        echo "PHP É MUITO BOMMM!!!! <br>";
    }

    public function acessarGritar() {
        $this->gritar();
    }

    protected function falarBaixinho() {
        echo "lalalalla <br>";
    }

       public function acessarFalarBaixinho() {
       $this->falarBaixinho();
    }

}

    class Programador extends Humano {

    public function acessarFalarBaixinhoProgramador() {
       $this->falarBaixinho();
    }


    }

$ze= new Humano;

$ze->falar();
$ze->acessarGritar();
$ze->acessarFalarBaixinho();

$joao = new Programador;

echo $joao->idade . "<br>";

$joao->falar();
$joao->acessarGritar();
$joao->acessarFalarBaixinhoProgramador();
