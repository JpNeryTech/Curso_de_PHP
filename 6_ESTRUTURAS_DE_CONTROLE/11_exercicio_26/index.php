<?php

$vel = 240;

if($vel < 40) {

    echo "Você está na velovidade correta! <br>";

} else if($vel == 40) {

    echo "Tome cuidado! <br>";

} else if ($vel > 40) {

    echo "Você está ACIMA da velocidade, por isso tomou uma multa!";

}