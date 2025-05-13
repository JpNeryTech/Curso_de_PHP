<?php

//contador;consdição;incremento/decremento

$nome = "Jota";

for($i = 0; $i < 10; $i++) {

    if($i == 4){

        echo "$nome <br>";
    }

    if($i == 8) {
        break;
    }

    echo "Testando for $i <br>";

}