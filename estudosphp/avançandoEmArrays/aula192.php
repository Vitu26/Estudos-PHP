<?php

$carro = [
    'marca' => 'BMW',
    'motor' => '2.4',
    'teto_solar' => true,
    'cambio' => 'manual',
    'portas' => 4
];

$chaves = array_keys($carro);

print_r($chaves);
echo "<br>";

$valores = array_values($carro);

print_r($valores);
echo "<br>";

print_r(array_key_exists("portas", $carro));
echo "<br>";
print_r(array_key_exists("mala", $carro));
echo "<br>";
if(array_key_exists("mala", $carro) === false){
    echo "Essa key não existe<br>";
}

if(isset($carro['marca'])){
    echo "A chave existe <br>";
}else{
    echo "A chave não existe <br>";
}
if(isset($carro['mala'])){
    echo "A chave existe <br>";
}else{
    echo "A chave não existe <br>";
}

if(isset($x)){
    echo "A var existe <br>";
}else{
    echo "A var não existe <br>";
}