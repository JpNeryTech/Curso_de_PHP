<?php

$arr = ['banana', 'maçá', 'batata', 'pêra', 'mamão'];

if(in_array("batata", $arr)) {
    echo "Tem batata no array <br>";
} else {
    echo "Não tem batata no array <br>";
}

$b = 'banana';

if(in_array($b, $arr)) {
    echo "Tem banana no array <br>";
} else {
    echo "Não tem banana no array <br>";
}

if(in_array("teste", $arr)) {
    echo "Tem o item teste no array";
} else {
    echo "Não tem o item teste no array";
}