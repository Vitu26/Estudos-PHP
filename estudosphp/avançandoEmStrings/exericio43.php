<?php
//string para array

$str = "carro - navio - helicoptero - barco - navio";

$arrStr = explode(" - ", $str);

print_r($arrStr);
echo "<br>";

for($i = 0; $i < count($arrStr); $i++){


    echo "Item: $arrStr[$i] <br>";
}