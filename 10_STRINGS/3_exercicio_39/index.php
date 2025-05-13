<?php

$arr = [
    "Roda" => 20000,
    "Suspenssão" => 5000,
    "Pnéu" => 5,
    "Sufilm" => 2500,
];

function itensCaros($arr) {

    $arrItensCaros = [];

   foreach($arr as $item => $preco) {

    if($preco > 10){

        array_push($arrItensCaros, $item);

    }

   }
   return $arrItensCaros;
}

$novoArray = itensCaros($arr);

print_r($novoArray);