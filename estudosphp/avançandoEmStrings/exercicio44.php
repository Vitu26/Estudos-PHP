<?php
//array para string

$arr = [
   "O",
   "PHP",
   "é", 
   "muito",
   "legal" 
];

$string = implode(" ", $arr);

print_r($string);
echo "<br>";