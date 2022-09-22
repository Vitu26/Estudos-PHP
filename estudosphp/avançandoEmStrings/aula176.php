<?php
//Encotrando a ultima ocorrencia 

$str = "Testando encontrando a palavra teste, em uma string que tem teste";

$palavra = strrpos($str, "teste");

echo "$palavra <br>";


$palavra2 = strpos($str, "teste");

echo "$palavra2 <br>";

if(strrpos($str, "java") != $str){
    echo "a palavra não foi encontrada<br>";
}

$p = substr($str, strrpos($str, "teste"), 5);

echo "$p <br>";