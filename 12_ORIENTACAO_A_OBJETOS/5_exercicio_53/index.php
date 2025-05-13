<?php

class Cachorro {
    function latir() {
        echo "au au au";
        echo "<br>";
    }
     function andar($m) {
        echo "O cachorro andou $m metros";
         echo "<br>";
    }
}

$tob = new Cachorro;
$jack = new Cachorro;

$tob->Latir();
$jack->andar(50);

$jack->Latir();
$jack->andar(20);