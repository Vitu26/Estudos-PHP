<?php
 //diferença entre datas

 $dataA = new DateTime();
 $dataB = new DateTime();

 $dataB->setDate(1992, 12, 13);

 print_r($dataA);
 echo "<br>";
 print_r($dataB);
 echo "<br>";
 
 $dif = $dataA->diff($dataB);
 print_r($dif);

 

 