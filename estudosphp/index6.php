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


                //Como efetuar comparações me php

                //Operador unario
                $a = $_GET["a"];
                $b = $_GET["b"];
                $tipo = $_GET["op"];
                $r = ($tipo == "s") ? $a + $b : $a * $b;
                echo "O resultado é $r";


                $a = 3;
                $b = "3";
                $t = ($a === $b) ? "SIM" : "NÃO";
                echo "<br>As variáveis A e B são iguais? $t<br>";

                //Aluno passou ou não
                $nota1 = $_GET["n1"];
                $nota2 = $_GET["n2"];
                $nota3 = $_GET["n3"];
                $media = ($nota1 + $nota2 + $nota3)/3;
                $t = ($media >= 7 ) ? "APROVADO" : "REPROVADO";
                echo "Sua média foi $media e você está $t";
                echo "Sua média foi $media e você está ". (($media >= 7 ) ? "APROVADO" : "REPROVADO");

                // mostrar se um eleitor é obrigado a votar ou não
                $ano = $_GET["an"];
                $idade = 2022 - $ano;
                echo "<br>Quem nasceu em $ano, tem $idade anos em 2022";
                $voto = ($idade < 18 && $idade < 60)? "NÃO É OBRIGADO A VOTAR" : "É OBRIGADO A VOTAR!";
                echo "<br>Você tem $idade e você  $voto !";

            ?>
        </div>
    </body>
</hmtl>