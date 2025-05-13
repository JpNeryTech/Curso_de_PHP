<?php

$arr = ["BMW", "M4", "Competition", 2031, 3.6, 510, 735.000, "roxa", 650, "João Pedro Nery"];

$x = count($arr);
$y = 0;

while($y < $x) {

    if(is_string($arr[$y]))

    echo $arr[$y] . "<br>";

    $y++;

}