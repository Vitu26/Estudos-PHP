<?php
//diferença entra array
 $arr = [1, 2, 3];
 $arr2 = [2, 4, 6];

 $diff = array_diff($arr, $arr2);//diferenças do primeiro array para o segundo
 print_r($diff);
 echo "<br>";

 $diff = array_diff($arr2, $arr);//diferenças do segundo para o primeiro
 print_r($diff);
 echo "<br>";
 //o array_diff mostra os valores que estão presente em um mas não no outro, ele "apaga" os valores iguais do print