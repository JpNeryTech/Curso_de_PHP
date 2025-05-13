<?php

$dataA = new DateTime();
$dataB = new DateTime();

$dataB->setDate(2001, 10, 15);

print_r($dataA);
echo "<br>";
print_r($dataB);
echo "<br>";

$diferença = $dataA->diff($dataB);

print_r($diferença);
echo "<br>";

echo $diferença->format("%a days");
echo "<br>";