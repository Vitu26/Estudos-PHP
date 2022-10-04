<?php
//buscando em um array

$arr = ["vitu", 2, 3, 5, "mano", "brogo", 45];

$busca = in_array("brogo", $arr);
$busca2 = in_array("jo", $arr);

if($busca == true){
    echo "Sua busca está no array<br>";
}else{
    echo "Busca inválida<br>";
}

if($busca2 == true){
    echo "Sua busca está no array<br>";
}else{
    echo "Busca inválida<br>";
}