<?php
//função com parâmetro
function velocidadeMaxima($vel/*parametro*/){

    if(is_int($vel)){
    echo "O carro atinge a velocidade máxima $vel km/h <br>";
    }else{
        echo "Não é um valor de velocidade<br>";
    }
}

velocidadeMaxima(200/*parametro*/);
velocidadeMaxima(300/*parametro*/);
velocidadeMaxima(400/*parametro*/);
//é impresso o valor que é chamado no retorno da função
//Definimos o valor do parâmetro quando chamamos a função, podendo ter N parâmetros
//Não se pode executar funções que exigem parâmetros sem os mesmos

$velocidade = 125;
velocidadeMaxima($velocidade);
//pode passar os valores da variaveis como parâmetros
velocidadeMaxima(250, "teste");
//quando se passa parâmetros a mais que está sendo pedido, o php não faz nada apenas ignora esse parâmetros a mais
velocidadeMaxima("Vitu");

echo "Outro teste <br>";

//mais parametros
function descreverAnimal($nome, $raca){

    echo "$nome é da raça $raca<br>";
}
descreverAnimal("Brogo", "labrador");
descreverAnimal("Gato", "laranja");