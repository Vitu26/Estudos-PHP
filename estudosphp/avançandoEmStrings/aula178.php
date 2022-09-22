<?php
//Decompondo URL

$url = "https://www.google.com";

$arrayUrl = parse_url($url);

print_r($arrayUrl);//imprimir array na tela
echo "<br>";
echo $arrayUrl["host"];
echo "<br>";

$url2 = "https://github.com/Vitu26";

$arrUrl2 = parse_url($url2);

print_r($arrUrl2);
echo "<br>";