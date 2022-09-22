<?php

$carro = ["jaguar", 3.0 , "azul", 18, "teto solar", "automatico"];

print_r($carro);
echo "<br>";

list($marca, $potencia, $corDoCarro, $aro, $teto, $cambio) = $carro;

echo "$marca <br>";
echo "$potencia <br>";
echo "$corDoCarro <br>";
echo "$aro polegadas <br>";
echo "$teto <br>";
echo "$cambio <br>";