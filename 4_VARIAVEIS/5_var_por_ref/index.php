<?php

$x = 10;

$y =& $x;

echo $x;
echo "<br>";
echo $y;

$y = 20;

echo "<br>";

echo "atribuição após ref";
echo "<br>";
echo $x;
echo "<br>";
echo $y;

$x = 30;

echo "<br>";
echo "atribuição após ref 2!";
echo "<br>";
echo $x;
echo "<br>";
echo $y;
echo "<br>";

$nome = "João";

$nome2 =& $nome;

echo $nome;
echo "<br>";
echo $nome2;
echo "<br>";

$nome2 = "Amilson";

echo $nome;
echo "<br>";
echo $nome2;
echo "<br>";

