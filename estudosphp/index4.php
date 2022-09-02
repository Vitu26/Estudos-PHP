<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8"/>
        <link rel="stylesheet" href="css.css">
        <title></title>
    </head>
    <body>
        <div>
            <?php

            $n = 4;
            $no = "Vitu";
            echo "$no tem $n anos!<br>";

            $n1 = $_GET["a"];
            $n2 = $_GET["b"];
            echo "<h2>Valores recebidos $n1 e $n2</h2>";
            echo "A soma vale ".($n1 + $n2);
            echo "<br>A subtração vale ".($n1 - $n2);
            echo "<br>A multiplicação vale ".($n1 * $n2);
            echo "<br>A divisão vale ".($n1 / $n2);
            echo "<br>O resto da divisão vale ".($n2 % $n1);
            echo "<br>O valor absoluto de $n2 e ". abs($n2);
            echo "<br>O $n1<sup>$n2</sup> é ". pow($n1, $n2);
            echo "<br> A raíz quadrade de $n1 é ". sqrt($n1);
            echo "<br> O arredondamento de $n1 é ". round($n1);
            echo "<br> O arredondamento de $n1 é ". ceil($n1);
            echo "<br> O arredondamento de $n1 é ". floor($n1);
            echo "<br> A parte inteira de $n1 é ". intval($n1);
            echo "<br> O valor de $n1 em moeda é R$". number_format($n1,2);
            ?>
        </div>
    </body>
</hmtl>
