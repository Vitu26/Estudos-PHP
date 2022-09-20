<?php
//string para array

$frase = "Testando o explode";

$fraseArray = explode(" ", $frase);
print_r($fraseArray);
echo "<br>";

$fraseB = "Carro, Avisão, Barco, Navio";

$fraseBArray = explode(",", $fraseB);
print_r($fraseBArray);
echo "<br>";

for($i = 0; $i < count($fraseBArray); $i++){

    echo "$fraseBArray[$i] <br>";
}
