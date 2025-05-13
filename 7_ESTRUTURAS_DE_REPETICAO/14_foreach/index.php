<?php

$nomes = ["JOTA", "BRUNO", "ERICSON", "ARTHUR", "GUILHERME"];

$a = 10;

foreach($nomes as $nome) {
    echo "O nome do indice atual é $nome <br>";
    if($nome == "JOTA") {
        echo "SALVE $a! <br>";
    }
}