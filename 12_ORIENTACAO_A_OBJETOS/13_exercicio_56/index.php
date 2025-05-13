<?php

class Humano {
    public $maos = 2;
    public $cabelo = "castanho";
    public $pernas = 2;

    public function falar() {
        echo "Olá, eu sou um humano <br>";
    }
}
    class Professor extends Humano{

        public $disciplina = "Biologia <br>";

        public function estaLecionando() {
            echo "O professor está dando aula de $this->disciplina <br>";
        }

    }

$jota = new Humano;

echo $jota->maos . "<br>";
echo $jota->cabelo . "<br>";
echo $jota->pernas . "<br>";
$jota->falar();

$bianca = new Professor;

echo "$bianca->pernas <br>";
echo "$bianca->disciplina <br>";

$bianca->falar();

$bianca->estaLecionando();