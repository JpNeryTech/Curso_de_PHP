<?php

$dataNascimento = mktime(13, 22, 22, 06, 22, 2006);  // HORA / MINUTO / SEGUNDO / DIA / MES / ANO

echo $dataNascimento . "<br>";

$dataNascimentoFormatada = date('d/m/Y' , $dataNascimento);

echo $dataNascimentoFormatada . "<br>";

$dataExpecifica = mktime(20, 30, 22, 30, 9, 2036);

echo $dataExpecifica. "<br>";

$dataExpecificaFormatada = date('d/m/Y' , $dataExpecifica);

echo $dataExpecificaFormatada . "<br>";