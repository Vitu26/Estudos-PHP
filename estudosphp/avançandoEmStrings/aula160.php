<?php
//percorrendo uma string

$str = "Está é uma string muito grande mesmo, e ela tem vários caracteres";

for($i = 0; $i < strlen($str); $i++){
//imprimindo cada um dos caracteres de uma string por meio de um loop e a função strlen
    echo "$str[$i]<br>";

}