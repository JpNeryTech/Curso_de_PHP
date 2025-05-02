<?php

$idade1 = 16;
$idade2 = 20;

$maioridade = 18;

$msg = "A pessoa é maior de idade!";
$msg2 = "A pessoa é menor de idade!";

if($idade1 >= $maioridade) {
    echo $msg;
    echo "<br>";
} else {
    echo $msg2;
    echo "<br>";
}


if($idade2 >= $maioridade) {
    echo $msg;
    echo "<br>";
} else {
    echo $msg2;
    echo "<br>";
}