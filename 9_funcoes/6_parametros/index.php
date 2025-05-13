<?php

function velocidadeMaxima($vel) {  // ($vel) isso é um parametro

    if(is_int($vel)) {
        echo "O carro atinge a velocidade máxima de $vel km/h <br>";
    } else {
        echo "Por favor, informe um número inteiro <br>";
    }

    

}

velocidadeMaxima(200);
velocidadeMaxima(300);
velocidadeMaxima(340);

// Não pode pois essa função exige um parametro e ai em baixo não tem
//velocidadeMaxima();
 echo "Teste de continuando <br>";

 $velocidade = 125;

 velocidadeMaxima($velocidade);

 //PHP ignora parametro desnecessário
 velocidadeMaxima(250, "teste");

 velocidadeMaxima("teste");


//mais parâmetros
 function descreverAnimal($nome, $raca) {

    echo "O $nome é da raça $raca <br>";

 }

 descreverAnimal("Maloka", "Pitbull");
 descreverAnimal("Renatinho", "Jack Rusell");

