<?php
//array reduce

 $arr = [1, 2, 4, 7 , 8, 9];

 function soma($a , $b){
    return $a + $b;
 }

 function subtracao($a , $b){
    return $a - $b;
 }

 function multi($a , $b){
    return $a * $b;
 }

 function div($a , $b){
    return $a / $b;
 }


 $resultado1 = array_reduce($arr, "subtracao");
 $resultado2 = array_reduce($arr, "soma");
 $resultado3 = array_reduce($arr, "multi");
 $resultado4 = array_reduce($arr, "div");

 echo "$resultado2<br>";
 echo "$resultado1<br>";
 echo "$resultado3<br>";
 echo "$resultado4<br>";