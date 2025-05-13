<?php

$str1 = "Está string é muito grande";
$str2 = "Está string";

echo strlen($str1) . "<br>";
echo strlen($str2) . "<br>";


$len1 = strlen($str1);
$len2 = strlen($str2);

if($len1 > $len2) {
    echo "A string 1 é a maior";
} else {
    echo "A string 2 é a maior";
}