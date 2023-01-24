<?php
 //array single
 $arr = ['vitu', 'brogo', 'joão', 'cari'];
 $arr = array('vitu', 'brogo', 'joão', 'cari');

 $arr[0] = 'vitu';
 $arr[1] = 'brogo';
 $arr[2] = 'joão';
 $arr[3] = 'cari';

 //arrays multidimensional
 $arr2 = [['vitu', 'brogo', 'joão', 'cari'], [30, 6, 10, 18]];

 print_r($arr2[1]);
 echo '<br>';
 print_r($arr2[0]);
 echo '<br>';
 echo$arr2[1][0];//pega o primeiro indice do segundo array


 



?>