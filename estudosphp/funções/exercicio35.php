<?php
//Criar uma função que recebe um número e retonar o valor dele ao quadrado

function quadrado($n){
    $resultado = $n ** 2;
    return $resultado;
}

$x = quadrado(2);
echo "$x<br>";

echo quadrado(4)."<br>";

