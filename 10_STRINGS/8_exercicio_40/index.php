<?php

$str = "O rato roeu a roupa do rei de roma";

$contadorDeAs = 0;

for($i = 0; $i < strlen($str); $i++) {

    if($str[$i] === "a"){
        $contadorDeAs++;
    }
}

echo "O número de a's é de: $contadorDeAs <br>";

   
