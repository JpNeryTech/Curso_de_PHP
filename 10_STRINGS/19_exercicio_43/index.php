<?php

$str = "Carro - Navio - Helicóptero - barco - jangada";

$arr = explode(" - ", $str);

for($i = 0; $i < count($arr); $i++) {

    echo "Item: $arr[$i] <br>";

}