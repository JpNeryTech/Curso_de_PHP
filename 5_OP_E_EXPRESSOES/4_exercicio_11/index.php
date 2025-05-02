<?php

$operacao = "5" * 12;

echo $operacao . "<br>";

echo gettype($operacao); //serve para saber o tipo da variável
echo "<br>";
echo gettype([]);
echo "<br>";
echo gettype(12.2); //double === float
echo "<br>";
echo gettype("texto");
