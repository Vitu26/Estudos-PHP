<?php

$arr = [10, 20, 30, 40, 50, 60, 70, 80, 90, 100];

$i = 0;

while ( $i < count($arr)) {
    $numeroAtual = $arr[$i]; //pq temos uma várial repetida

    if ($numeroAtual == 30 || $numeroAtual == 40) {

        $i++;
        continue;
    }
    echo "$numeroAtual <br>"; //para mostrar todos os indeices do array

    $i++;
}

?>