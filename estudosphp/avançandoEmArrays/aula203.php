<?php
//ordenando arrays em ordem crescente e decrescente
 $arr = [2, 5, 6, 3, 1, 4, 6, 9, 8];

 sort($arr);//para ordem crescente
 print_r($arr);
 echo"<br>";
 rsort($arr);// para ordem decrescente
 print_r($arr);
 echo"<br>";


 //serve para arrays não números para organizar em ordem alfabética
 $nomes = ["Vitu", "José", "Ana", "Bari", "Brogo", "Alice"];

 sort($nomes);
 print_r($nomes);