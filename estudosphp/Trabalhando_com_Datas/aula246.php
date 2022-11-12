<?php
 //comparação de datas

 $dataA = new DateTime();
 $dataB = new DateTime();

 $dataB->setDate(2042, 12, 25);

 if($dataB > $dataA){
    echo " A data B é maior que a A<br>";
 }else{
    echo " A data A é maior que a B<br>";
 }

 $dataC = new DateTime();
 $dataD = new DateTime();

 $dataC->setDate(2042, 12, 25);

 if($dataD > $dataC){
    echo " A data D é maior que a C<br>";
 }else{
    echo " A data C é maior que a B<br>";
 }