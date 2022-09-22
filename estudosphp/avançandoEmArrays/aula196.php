<?php

$arr = [
    'cor' => 'vermelho',
    'lapis' => 'azul',
    'forma' => 'retangular',
    'material' => 'aço'
];

extract($arr);

echo "$cor <br>";
echo "$lapis <br>";
echo "$forma <br>";
echo "$material <br>";