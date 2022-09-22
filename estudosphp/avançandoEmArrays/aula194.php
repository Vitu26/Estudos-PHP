<?php
//removendo elementos de um array

$arr = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12];
$remove = array_splice($arr, 10, 2);

print_r($arr);
echo "<br>";



print_r($remove);
echo "<br>";