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


                //Como facilitar atribuições feitas em php
                $preco = $_GET["p"];
                echo "O preço do produto é R$ ". number_format($preco,2);
                $preco += ($preco * 0.1);
                echo "<br>O preço com 10% de aumento é R$ ". number_format($preco,2);
                $preco -= ($preco * 0.1);
                echo "<br>O preço com 10% de desconto é R$ ".number_format($preco,2);

                //Operações de incremento e decremento
                $atual = $_GET["aa"];
                echo "<br>Estamos no ano de $atual e o ano anterior é ". --$atual;
                echo "<br>Estamos no ano de $atual e o próximo ano é ". ++$atual;


                $a = 3;
                $b = $a;
                $b += 5;
                echo "<br> Valor de $a e valor de $b";

                //Como fazer referencias a variáveis
                $a = 3;
                $b = &$a; // $b é uma referencia a $a
                $b += 5;
                echo "<br> Valor de $a e valor de $b";


                //variáveis de variáveis
                $x = "abc";
                $$x = "def";
                echo "<br> Qual o conteudo de x? $x";
                echo "<br> A variável recebeu o valor de $abc";

            ?>
        </div>
    </body>
</hmtl>
