<?php

$a = 3;
$b = 4;

if($a != $b) {
    echo "Testando diferença <br>";
}

if($a != 3) {
    echo "Testando diferença 2 <br>";
}

if(false != "teste") {
    echo "Testando diferença 3 <br>";
}

if(3 != "3") { //Não diferencia tipo!
    echo "Testando diferença 4 <br>";
}

if(3 != "4") {
    echo "Testando diferença 5 <br>";
}




