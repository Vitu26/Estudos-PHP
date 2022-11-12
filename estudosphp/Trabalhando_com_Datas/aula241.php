<?php
 //função mktime

 $dataNascimento = mktime(07, 33, 53, 12, 13, 1992);// Primeiro número são as horas, segudo os minutos, terceiro os segundos, quarto o mês, quinto o dia e sexto os anos e tudo dá uma data completa com o mktime

 echo date('d, M, Y', $dataNascimento) . "<br>";