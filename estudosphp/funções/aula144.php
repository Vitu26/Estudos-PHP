<?php
//variáveis e escopo

$a = 10;
$b = 15;
function testandoEscopo(){

    $a = 5;
    $a++;
    global $b; /* podemos usar variáveis globais com o global no escopo local da função*/
    $b++; /*podemos alturar na função o escopo local mas não altera o global*/
    echo "Escopo LOCAL de A: $a <br>";
    echo "Escopo LOCAL de B: $b <br>";
}

echo "Escopo GLOBAL de A: $a <br>";
echo "Escopo GLOBAL de B: $b <br>";

testandoEscopo();