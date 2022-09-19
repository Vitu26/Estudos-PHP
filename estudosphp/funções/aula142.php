
<?php
//retorno de função

function soma($n1, $n2){ /*função definida que recebe 2 parâmetros*/

    return $n1 + $n2;
}
echo soma(4, 12). "<br>";

$x = soma(2, 6);

echo "$x<br>";

$y = soma(20, 15);

echo "$y<br>";

$z = soma($x, $y);/*podemos utilizar qualquer valor armazenado nesse retorno*/
echo "$z<br>";

//podemos armazenar o retorno da função em uma variável para usarmos posteriormente.

function testandoRetorno(){
    return "Testando";
}
$z = testandoRetorno();

echo "$z<br>";