<?php
//ordenar arrays associativos

$arr = [
    "Vitu" => 29,
    "Bari" => 17,
    "Alice" => 28,
    "Raquel" => 25,
    "Brogo" => 6,
];

asort($arr);//ordem crescente de valor
print_r($arr);
echo "<br>";
arsort($arr);//prdem inversa de valor
print_r($arr);
echo "<br>";
ksort($arr);//ordem crescente pelas chaves
print_r($arr);
echo "<br>";
krsort($arr);//ordem inversa pelas chaves
print_r($arr);