<?php

$arr1 = [1, 2, 3];
$arr2 = [10, 40, 90];
$arr3 = [2, 55.56, 1.3];
$arr4 = ["CS", "bBMW", "Jota"];

$arrMerge = array_merge($arr1, $arr2, $arr3, $arr4, [0, 1]);

print_r($arrMerge);
echo "<br>";