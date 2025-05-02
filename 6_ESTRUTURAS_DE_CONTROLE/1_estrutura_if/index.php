<?php

if(5 > 2) {
    echo "5 é maior que 2 <br>"; //condição verdadeira
}

if(2 >= 5) {
    echo "Não vai entrar no if, porque deu false <br>";//condição falsa
} 

//ultilizar op.lógico
if(10 === 10 && 9 > 3) {
    echo "está condição é verdadeira <br>";
}

//ultilizar variaveis

$a= 10;
$b= 5;

$c = "Deu certo, entrou no if <br>";

if($a >= $b) {

    echo $c;

}