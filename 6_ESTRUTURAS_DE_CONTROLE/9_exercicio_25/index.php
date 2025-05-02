<?php

$num1 = 10;
$num2 = 55;

$string1 = "jota";

if(is_int($num1) || is_float($num1)) {

   $novoNum = $num1 * 2;
    if($novoNum > 100) {

        echo "O número $novoNum é maior que 100! <br>";

    } else {

        echo "O número $novoNum não é maior que 100! <br>";

    }

} else {

    echo "Não é um número! <br>";

}

if(is_int($num2) || is_float($num2)) {

    $novoNum = $num2 * 2;
     if($novoNum > 100) {
 
         echo "O número $novoNum é maior que 100! <br>";
 
     } else {
 
         echo "O número $novoNum não é maior que 100! <br>";
 
     }
 
 } else {
 
     echo "Não é um número! <br>";
 
 }

 if(is_int($string1) || is_float($string1)) {

    $novoNum = $string1 * 2;
     if($novoNum > 100) {
 
         echo "O número $novoNum é maior que 100! <br>";
 
     } else {
 
         echo "O número $novoNum não é maior que 100! <br>";
 
     }
 
 } else {
 
     echo "Não é um número! <br>";
 
 }
