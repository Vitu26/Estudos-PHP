<?php
//array para string

$arr = [
    "Opa",
    "meu",
    "chapa",
    ",",
    "tudo",
    "de",
    "boas",
    "?"
];

$strArray = implode(" ", $arr);
print_r($strArray);
echo "<br>";
