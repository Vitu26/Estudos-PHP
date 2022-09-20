<?php
/*  */

function soma($a, $b){

    print_r(func_get_args());
    echo "<br>";
    print_r(func_num_args());
    echo "<br>";

    return $a + $b;
}

$retorno = soma(5, 7);
echo "$retorno<br>";
