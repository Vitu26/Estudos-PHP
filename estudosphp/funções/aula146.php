<?php
/* Parêmetro default */

function teste($a = "teste"){

    echo "O valor de é a é $a <br>";

}

teste();
teste("asd");

// function testando($a="x", $b){
/* Não inserir os argumentos default primeiro pois dá erro */
function testando($b, $a = "x"){
    echo "O valor de a é $a e de b é $b <br>";

}

testando("2");
