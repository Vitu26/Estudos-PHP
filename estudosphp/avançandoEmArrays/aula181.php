<?php
//adicionando itens a um array

$arr = [1, 2, 3, 4, 5, 6, 7];

$arr[1] = "Vitu";

print_r($arr);
echo "<br>";

//obs.: quando vc adciona um dado a algum indice do array vc tbm substitue esse dado pelo novo.


$arr2 = [1, 2, 3, 4, 5, 6, 7];

$arr3 = ["Mano", "Bichosolto"];

$arr2[1] = $arr3;

print_r($arr2);
echo "<br>";
//Adicionando valores
$array = [];

print_r($array);
echo "<br>";

$array[0] = 10;

print_r($array);
echo "<br>";

$array[1] = 20;

print_r($array);
echo "<br>";

$array[2] = 30;

print_r($array);
echo "<br>";

$array[4] = 50;

print_r($array);
echo "<br>";

//modificando valores

$array[1] += 20;

print_r($array);
echo "<br>";

$array[2] += 15;

print_r($array);
echo "<br>";

//array associativo

$arrAssoc = [];
print_r($arrAssoc);
echo "<br>";

$arrAssoc["carro"] = "BMW";

print_r($arrAssoc);
echo "<br>";

$arrAssoc["moto"] = "KAWAZAKI";

print_r($arrAssoc);
echo "<br>";