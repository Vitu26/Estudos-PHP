<?php
//Faça uma função para mostrar se o número é par ou ímpar
function parImpar($num){
    
    if(is_int($num)){
        if($num %2 == 0 && $num > 0){
            echo "O numero $num é par e positivo<br>";
        }else if($num %2 == 0 && $num < 0){
            echo "O numero $num é par e negativo<br>";
        }else if($num %2 != 0 && $num > 0){
            echo "O numero $num é impar e positivo<br>";
        }else if($num %2 != 0 && $num < 0){
            echo "O numero $num é impar e negativo<br>";
        }else{
            echo "Esse número é 0<br>";
        }
    }else{
        echo "Por favor informe um valor válido!<br>";
    }
}

parImpar(2);
parImpar(-8);
parImpar(3);
parImpar(-15);
parImpar(0);
parImpar("Vitu");