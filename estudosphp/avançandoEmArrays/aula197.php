<?php
//criando array com compact
$marca = "BMW";
$motor = "3.0";
$cor = "preto";
$cavalos = "240";
$portas = "4 portas";

$carro = compact("marca", "motor", "cor", "cavalos", "portas");
print_r($carro);
echo "<br>";