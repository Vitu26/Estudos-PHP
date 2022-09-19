<?php

function nomeIdade($nome, $idade,$genero){

    if($genero === "o"){
    echo "Opa! Meu chapa!<br>Eu sou $genero $nome e tenho $idade anos.<br>";
    }else if($genero === "a"){
        echo "Olá, turo pom?<br>Eu sou $genero $nome e tenho $idade aninhos!<br>";
    }else{
        echo "Falta informações";
    }
}

//podemos ter parâmetros de tipos diferentes
nomeIdade("Vitu",29, "o");
nomeIdade("Brogo", 6, "o");
nomeIdade("Monica", 22, "a");
nomeIdade("Broca", 26, "b");