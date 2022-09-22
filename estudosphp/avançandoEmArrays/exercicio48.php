<?php
//removendo elementos de um array

$feira = ["batata", "maçã", "pêra", "feijão", "arroz"];

$tirando = array_splice($feira, 2, 2 );

print_r($feira);
echo "<br>";
print_r($tirando);
echo "<br>";