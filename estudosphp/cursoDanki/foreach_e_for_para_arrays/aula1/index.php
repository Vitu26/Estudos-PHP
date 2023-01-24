<?php

 $arr = [ 'Vitu', 'José', 'Bari', 'Bacu'];
/*
 foreach ($arr as $key => $value) {
    echo $value;
    echo '<br>';
 }
*/
 $total = count($arr);

 for($i = 0; $i < $total; $i++){
    echo $arr[$i];
    echo '<br>';
 }

?>