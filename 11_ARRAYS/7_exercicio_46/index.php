<?php

$array = [
    ['Bmw', 'porshe', 'Mitsubishi', 'volvo'],
    [1, 2, 3, 4],
    ['Palmeiras', 'Vasco', 'Gremio', 'Italia']

];

//loop no array externo
for($i = 0; $i < count($array); $i++) {

    // Imprimindo array
    echo "Imprimindo array externo: " . ($i + 1) . "<br>";

    //imprimindo o array interno
    for($j = 0; $j < count($array[$i]); $j++) {

        echo $array[$i][$j] . "<br>";

    }
}