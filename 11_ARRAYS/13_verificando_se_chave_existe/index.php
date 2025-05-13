<?php

$arr = [
    'nome' => 'João',
    'idade' => 18
];

if(array_key_exists("nome", $arr)) {

    echo "A chave existe! <br>";

} else {

    echo "A cheve não existe";

 }

 if(array_key_exists("profissão", $arr)) {

    echo "A chave existe! <br>";

} else {

    echo "A cheve não existe! <br>";

 }

 if(isset($arr['nome'])) {

    echo "A chave existe! ISSET <br>";

} else {

    echo "A cheve não existe! ISSET <br>";

 }
 

 if(isset($arr['número'])) {

    echo "A chave existe! ISSET <br>";

} else {

    echo "A cheve não existe! ISSET <br>";

 }


 $x = 10;

if (isset($x)) {

    echo "A var existe! ISSET <br>";

} else {

    echo "A var não existe! ISSET <br>";

 }

 
 


