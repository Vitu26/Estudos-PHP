<?php
//Encotrando a ultima ocorrencia 

$str = "Testando o resto da string, pra ver se da certo";

$palavra = strstr($str, "resto");

echo "$palavra <br>";

$p = "string";

$resto = strstr($str, $p);

echo "$p <br>";

if(strstr($str, ".NET") === false){
    echo "Não encontramos na string!<br>";
}