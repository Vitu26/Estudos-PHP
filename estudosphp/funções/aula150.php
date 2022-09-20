<?php
/* Retorno de multiplos valores */

function alteraDados($nome, $idade){
    $nome = "Sr. $nome";
    $idade = "$idade anos";

    return [$nome, $idade];
}

$dados = alteraDados("Vitu", 29);
print_r($dados);    

echo "<br>";

echo "Olá $dados[0], você tem $dados[1]";


