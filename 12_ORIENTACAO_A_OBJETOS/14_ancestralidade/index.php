<?php

class Humano {

}

class Animal {

}

class Professor extends Humano {

}

$marcos = new Humano;

$biloca = new Animal;

if($marcos instanceof Humano) {
    echo "Marcos é um Humano <br>";
} else {
    echo "Marcos não é um Humano <br>";
}

if($biloca instanceof Humano) {
    echo "Biloca é um Humano <br>";
} else {
    echo "Biloca não é um Humano <br>";
}

$lester = new Professor;

if($lester instanceof Professor) {
    echo "lester é um Professor <br>";
} else {
    echo "lester não é um Professor  <br>";
}

if($lester instanceof Humano) {
    echo "lester é um Humano <br>";
} else {
    echo "lester não é um Humano <br>";
}

if($biloca instanceof Professor) {
    echo "Biloca é um Professor <br>";
} else {
    echo "Biloca não é um Professor <br>";
}