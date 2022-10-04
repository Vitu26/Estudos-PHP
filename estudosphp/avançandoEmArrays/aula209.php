<?php
//unindo arrays
 $arr1 = [1,2,3];
 $arr2 = [2,4,6];
 $arr3 = [10,11,12];

 $arrmerge = array_merge($arr1, $arr2, $arr3);
 print_r($arrmerge);
 echo "<br>";

 //une todos os arrays menores em um grande só, mas não é um array com vários dentro é um array só formado pelos elementos dos menores