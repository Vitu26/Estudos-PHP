<?php
//percorrendo uma string e mostrando quantas letras "a" tem na frase

$str = "O rato roeu a roupa do rei de Roma";
$contadorDeAs = 0;
$contadorDeRs = 0;
for($i = 0; $i < strlen($str); $i++){

    // echo "$str[$i] <br>";
    if($str[$i] === "a"){ /* para contar quantas letras "a" tem */
        $contadorDeAs++;
        $contadorDeRs++;
    }else if($str[$i] === "r"){
        $contadorDeRs++;
    }
    
}

echo "$contadorDeAs<br>";
echo "$contadorDeRs";