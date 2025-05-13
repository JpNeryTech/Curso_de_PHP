<?php

function definirCorCarro($cor, $a = "vermelha") {

    return "As cores do carro são: $cor e $a. <br>";
}

echo definirCorCarro("Azul");
echo definirCorCarro("Roxo", "Preto");
echo definirCorCarro("Verde");  