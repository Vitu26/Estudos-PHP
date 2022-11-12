<?php
 //setDate e setTime

 $data = new DateTime();
 print_r($data);
 echo "<br>";

 $data->setDate(1999, 10, 07);
 print_r($data);
 echo "<br>";

 $data->setTime(16, 43, 25);
 print_r($data);
 echo "<br>";

 echo $data->format('d/m/y') . "<br>";
