<?php
//Array multidimensional ou matriz

$arr = [
    [1 , 2, 3, 4, ],
    [5 , 6, 7, 8]
];

print_r($arr);
echo "<br>";

echo $arr[1][0] . "<br>";//acessando o primeiro array e o segundo elemento
echo $arr[0][2] . "<br>";

echo count($arr) . "<br>";