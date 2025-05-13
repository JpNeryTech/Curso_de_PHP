<?php

function checarNumeros($numero) {
    if($numero %2 === 0) {
        echo "O número $numero é par! <br>";
    } else {
        echo "O número $numero é ímpar! <br>";
    }
}

checarNumeros(28);
checarNumeros(54198);
checarNumeros(35);