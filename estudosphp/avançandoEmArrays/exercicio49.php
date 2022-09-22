<?php
//criando array com compact
$nome = "Lombrigo";
$raça = "Labrador";
$porte = "Grande";
$inteligencia = "Burro";
$personalidade = "Amoroso";

$brogo = compact("nome", "raça", "porte", "inteligencia", "personalidade");
print_r($brogo);
echo "<br>";

foreach($brogo as $caracteristicas => $value){

    echo " $caracteristicas: $value <br>";
}

