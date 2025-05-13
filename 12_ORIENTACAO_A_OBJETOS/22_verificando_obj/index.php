<?php

class Humano {

    public function falar() {
        echo "Olá";
    }

}
  $nery = new Humano;

    $teste = 10;

    if(is_object($nery)) {
        echo "É um objeto <br>";
    } else {
        echo "Não é um objeto <br>";
    }

       if(is_object($teste)) {
        echo "É um objeto <br>";
    } else {
        echo "Não é um objeto <br>";
    }

echo get_class($nery) . "<br>";

if(method_exists($nery, "falar")) {
    echo "Método existe! <br>";
} else {
      echo "Método não existe! <br>";
}

if(method_exists($nery, "asd")) {
    echo "Método existe! <br>";
} else {
      echo "Método não existe! <br>";
}