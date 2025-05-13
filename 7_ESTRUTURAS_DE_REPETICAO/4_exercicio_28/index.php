<?php

$x= 4;

while($x <= 30){

    echo "Esse é o loop $x! <br>";

    if($x === 24){

        echo "Chegou ao fim! <br>";
        break;

    }

    $x += 2;
}

