<?php

$vitu = [
    'nome' => 'Vitu',
    'idade' => 29,
    'profissão' => 'Programador'
];

$seila = [
    'nome' => 'seila',
    'idade' => 24,
    'profissão' => 'algo'
];

foreach($vitu as $carcteristicas => $value){

    echo "$carcteristicas: $value<br>";
}

foreach($seila as $carcateristicas => $value){

    echo "$carcteristicas: $value<br>";
}