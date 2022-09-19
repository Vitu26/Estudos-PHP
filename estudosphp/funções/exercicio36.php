<?php
/*Crie uma função que recebe um array, crie um novo array com apenas os números maiores que 7 e retorne esse novo array e imprima na tela */

$arr = [];
/* Criando um array por meio do for */
for($i = 0; $i <= 30; $i++){
    array_push($arr, $i);
}
// print_r($arr);
/* Função para criar um novo array com os números maiores que 7, usando um array como parametro $array */
function arrayMaiorQueSete($array){

    $arrayRetorno = [];
/* Criando outro array através de um novo loop */
    for($j = 0; $j < count($array); $j++){/*count() para pegar o número de elementos do array */

/* Uma condicional para pegar só os números maiores que 7 */
        if($array[$j] > 7){
            /* */
            array_push($arrayRetorno, $array[$j]);/* Precisa dos paramentros, o primeiro é o array que eu quero inserir os númeors e o segundo o array de onde eu vou pegar os números */
        }

    }
    return $arrayRetorno;
}

$novoArray = arrayMaiorQueSete($arr);

print_r($novoArray);