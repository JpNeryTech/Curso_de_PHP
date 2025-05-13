<?php

$array = [];
for($i= 0; $i <= 30; $i++) {

    array_push($array, $i);

}
//print_r($arr);

function arrayMaiorQue7($array) {

    $arrayRetorno = [];

    for($j = 0; $j < count($array); $j++) {

        if($array[$j] > 7) {

            array_push($arrayRetorno, $array[$j]);

        }

    }

    return $arrayRetorno;

}
$novoArray = arrayMaiorQue7($array);

print_r($novoArray);