<?php

$x = 0;

switch($x) {

    case 0:
        echo "X é igual a 0 <br>";
        break;
    case 1:
        echo "X é igual a 1";    
        break;
    default:
        echo "X não é nenhum dos valores esperados <br>";
} 

$y = "Jota";

switch($y) {

    case "Jota":
        echo "O nome é Jota! <br>";
        break;

    case "João":
        echo "O nome é João";
        break;
    default:
    echo "O nome não foi encontrado! <br>";    
}
